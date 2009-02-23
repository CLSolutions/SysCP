<?php
return Array(
	'ubuntu_hardy' => Array(
		'label' => 'Ubuntu 8.04 (Hardy)',
		'services' => Array(
			'http' => Array(
				'label' => $lng['admin']['configfiles']['http'],
				'daemons' => Array(
					'apache2' => Array(
						'label' => 'Apache 2',
						'commands' => Array(
							'mkdir -p ' . $settings['system']['documentroot_prefix'],
							'mkdir -p ' . $settings['system']['logfiles_directory'],
							'mkdir -p ' . $settings['system']['mod_fcgid_tmpdir'],
							'chmod 1777 ' . $settings['system']['mod_fcgid_tmpdir'],
							'a2dismod userdir',
						),
						'restart' => Array(
							'/etc/init.d/apache2 restart'
						)
					),
					'lighttpd' => Array(
						'label' => 'Lighttpd Webserver',
						'commands_1' => Array(
							'apt-get install lighttpd',
						),
						'files' => Array(
							'etc_lighttpd.conf' => '/etc/lighttpd/lighttpd.conf',
						),
						'commands_2' => Array(
							$configcommand['vhost'],
							$configcommand['diroptions'],
							$configcommand['v_inclighty'],
							$configcommand['d_inclighty'],
							'mkdir -p ' . $settings['system']['documentroot_prefix'],
							'mkdir -p ' . $settings['system']['logfiles_directory'],
							'mkdir -p ' . $settings['system']['mod_fcgid_tmpdir'],
							'chmod 1777 ' . $settings['system']['mod_fcgid_tmpdir'],
						),
						'restart' => Array(
							'/etc/init.d/lighttpd restart'
						)
					)
				)
			),
			'dns' => Array(
				'label' => $lng['admin']['configfiles']['dns'],
				'daemons' => Array(
					'bind' => Array(
						'label' => 'Bind9',
						'commands' => Array(
							'echo "include \"' . $settings['system']['bindconf_directory'] . 'syscp_bind.conf\";" >> /etc/bind/named.conf',
							'touch ' . $settings['system']['bindconf_directory'] . 'syscp_bind.conf'
						),
						'restart' => Array(
							'/etc/init.d/bind9 restart'
						)
					),
					'powerdns' => Array(
						'label' => 'PowerDNS',
						'files' => Array(
							'etc_powerdns_pdns.conf' => '/etc/powerdns/pdns.conf',
							'etc_powerdns_pdns-syscp.conf' => '/etc/powerdns/pdns_syscp.conf',
						),
						'restart' => Array(
							'/etc/init.d/pdns restart'
						)
					),
				)
			),
			'smtp' => Array(
				'label' => $lng['admin']['configfiles']['smtp'],
				'daemons' => Array(
					'postfix' => Array(
						'label' => 'Postfix',
						'commands_1' => Array(
							'mkdir -p /etc/postfix/sasl',
							'mkdir -p /var/spool/postfix/etc/pam.d',
							'mkdir -p /var/spool/postfix/var/run/mysqld',
							'groupadd -g ' . $settings['system']['vmail_gid'] . ' vmail',
							'useradd -u ' . $settings['system']['vmail_uid'] . ' -g vmail vmail',
							'mkdir -p ' . $settings['system']['vmail_homedir'],
							'chown -R vmail:vmail ' . $settings['system']['vmail_homedir'],
							'mv /etc/postfix/main.cf /etc/postfix/main.cf.ubuntu',
							'touch /etc/postfix/main.cf',
							'touch /etc/postfix/mysql-virtual_alias_maps.cf',
							'touch /etc/postfix/mysql-virtual_mailbox_domains.cf',
							'touch /etc/postfix/mysql-virtual_mailbox_maps.cf',
							'touch /etc/postfix/sasl/smtpd.conf',
							'chown root:root /etc/postfix/main.cf',
							'chown root:root /etc/postfix/master.cf',
							'chown root:postfix /etc/postfix/mysql-virtual_alias_maps.cf',
							'chown root:postfix /etc/postfix/mysql-virtual_mailbox_domains.cf',
							'chown root:postfix /etc/postfix/mysql-virtual_mailbox_maps.cf',
							'chown root:root /etc/sasl2/smtpd.conf',
							'chmod 0644 /etc/postfix/main.cf',
							'chmod 0644 /etc/postfix/master.cf',
							'chmod 0640 /etc/postfix/mysql-virtual_alias_maps.cf',
							'chmod 0640 /etc/postfix/mysql-virtual_mailbox_domains.cf',
							'chmod 0640 /etc/postfix/mysql-virtual_mailbox_maps.cf',
							'chmod 0600 /etc/sasl2/smtpd.conf',
						),
						'files' => Array(
							'etc_postfix_main.cf' => '/etc/postfix/main.cf',
							'etc_postfix_master.cf' => '/etc/postfix/master.cf',
							'etc_postfix_mysql-virtual_alias_maps.cf' => '/etc/postfix/mysql-virtual_alias_maps.cf',
							'etc_postfix_mysql-virtual_mailbox_domains.cf' => '/etc/postfix/mysql-virtual_mailbox_domains.cf',
							'etc_postfix_mysql-virtual_mailbox_maps.cf' => '/etc/postfix/mysql-virtual_mailbox_maps.cf',
							'etc_postfix_sasl_smtpd.conf' => '/etc/postfix/sasl/smtpd.conf'
						),
						'restart' => Array(
							'/etc/init.d/postfix restart',
							'newaliases'
						)
					),
					'exim4' => Array(
						'label' => 'Exim4',
						'commands_1' => Array(
							'dpkg-reconfigure exim4-config',
							'# choose "no configuration at this time" and "splitted configuration files" in the dialog'
						),
						'files' => Array(
							'etc_exim4_conf.d_acl_30_exim4-config_check_rcpt.rul' => '/etc/exim4/conf.d/acl/30_exim4-config_check_rcpt.rul',
							'etc_exim4_conf.d_auth_30_syscp-config' => '/etc/exim4/conf.d/auth/30_syscp-config',
							'etc_exim4_conf.d_main_10_syscp-config_options' => '/etc/exim4/conf.d/main/10_syscp-config_options',
							'etc_exim4_conf.d_router_180_syscp-config' => '/etc/exim4/conf.d/router/180_syscp-config',
							'etc_exim4_conf.d_transport_30_syscp-config' => '/etc/exim4/conf.d/transport/30_syscp-config'
						),
						'commands_2' => Array(
							'chmod o-rx /var/lib/exim4',
							'chmod o-rx /etc/exim4/conf.d/main/10_syscp-config_options'
						),
						'restart' => Array(
							'/etc/init.d/exim4 restart'
						)
					)
				)
			),
			'mail' => Array(
				'label' => $lng['admin']['configfiles']['mail'],
				'daemons' => Array(
					'courier' => Array(
						'label' => 'Courier',
						'files' => Array(
							'etc_courier_authdaemonrc' => '/etc/courier/authdaemonrc',
							'etc_courier_authmysqlrc' => '/etc/courier/authmysqlrc'
						),
						'restart' => Array(
							'/etc/init.d/courier-authdaemon restart',
							'/etc/init.d/courier-pop restart'
						)
					),
					'dovecot' => Array(
						'label' => 'Dovecot',
						'commands' => Array(
							'/etc/init.d/dovecot stop',
						),
						'files' => Array(
							'etc_dovecot_dovecot.conf' => '/etc/dovecot/dovecot.conf',
							'etc_dovecot_dovecot-sql.conf' => '/etc/dovecot/dovecot-sql.conf'
						),
						'restart' => Array(
							'/etc/init.d/dovecot restart'
						)
					)
				)
			),
			'ftp' => Array(
				'label' => $lng['admin']['configfiles']['ftp'],
				'daemons' => Array(
					'proftpd' => Array(
						'label' => 'ProFTPd',
						'files' => Array(
							'etc_proftpd_modules.conf' => '/etc/proftpd/modules.conf',
							'etc_proftpd_proftpd.conf' => '/etc/proftpd/proftpd.conf'
						),
						'restart' => Array(
							'/etc/init.d/proftpd restart'
						)
					),
					'pure-ftpd' => Array(
						'label' => 'Pure FTPd',
						'files' => Array(
							'etc_pure-ftpd_conf_MinUID' => '/etc/pure-ftpd/conf/MinUID',
							'etc_pure-ftpd_conf_MySQLConfigFile' => '/etc/pure-ftpd/MySQLConfigFile',
							'etc_pure-ftpd_conf_NoAnonymous' => '/etc/pure-ftpd/conf/NoAnonymous',
							'etc_pure-ftpd_conf_MaxIdleTime' => '/etc/pure-ftpd/conf/MaxIdleTime',
							'etc_pure-ftpd_conf_ChrootEveryone' => '/etc/pure-ftpd/conf/ChrootEveryone',
							'etc_pure-ftpd_conf_PAMAuthentication' => '/etc/pure-ftpd/conf/PAMAuthentication',
							'etc_pure-ftpd_db_mysql.conf' => '/etc/pure-ftpd/db/mysql.conf',
							'etc_pure-ftpd_conf_CustomerProof' => '/etc/pure-ftpd/conf/CustomerProof',
							'etc_pure-ftpd_conf_Bind' => '/etc/pure-ftpd/conf/Bind',
							'etc_default_pure-ftpd-common' => '/etc/default/pure-ftpd-common'
						),
						'restart' => Array(
							'/etc/init.d/pure-ftpd-mysql restart'
						)
					),
				)
			),
			'etc' => Array(
				'label' => $lng['admin']['configfiles']['etc'],
				'daemons' => Array(
					'cron' => Array(
						'label' => 'Crond (cronscript)',
						'files' => Array(
							'etc_cron.d_syscp' => '/etc/cron.d/syscp'
						),
						'restart' => Array(
							'/etc/init.d/cron restart'
						)
					),
					'awstats' => Array(
						'label' => 'Awstats',
						'files' => Array(
							($settings['system']['mod_log_sql'] == 1 ? 'etc_awstats_awstats.model_log_sql.conf.syscp' : 'etc_awstats_awstats.model.conf.syscp') => '/etc/awstats/awstats.model.conf.syscp',
							($settings['system']['mod_log_sql'] == 1 ? 'etc_cron.d_awstats_log_sql' : 'etc_cron.d_awstats') => '/etc/cron.d/awstats',
							($settings['system']['webserver'] == 'lighttpd' ? 'etc_lighttpd_syscp-awstats.conf' : 'etc_apache_vhosts_05_awstats.conf') => ($settings['system']['webserver'] == 'lighttpd' ? '/etc/lighttpd/syscp-awstats.conf' : '/etc/apache2/sites-enabled/05_awstats.conf')
						),
						'commands' => Array(
							($settings['system']['webserver'] == 'lighttpd' ? 'echo "include \"syscp-awstats.conf\"" >> /etc/lighttpd/lighttpd.conf' : '')
						),
						'restart' => Array(
							($settings['system']['webserver'] == 'lighttpd' ? '/etc/init.d/lighttpd restart' : '/etc/init.d/apache2 restart')
						)
					),
					'libnss' => Array(
						'label' => 'libnss (system login with mysql)',
						'commands' => Array(
							'apt-get install libnss-mysql nscd'
						),
						'files' => Array(
							'etc_nss-mysql.conf' => '/etc/nss-mysql.conf',
							'etc_nss-mysql-root.conf' => '/etc/nss-mysql-root.conf',
							'etc_nsswitch.conf' => '/etc/nsswitch.conf',
						),
						'restart' => Array(
							'/etc/init.d/nscd restart'
						)
					)
				)
			)
		)
	)
);

?>
