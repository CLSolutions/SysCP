<?php

/**
 * This file is part of the SysCP project.
 * Copyright (c) 2003-2009 the SysCP Team (see authors).
 *
 * For the full copyright and license information, please view the COPYING
 * file that was distributed with this source code. You can also view the
 * COPYING file online at http://files.syscp.org/misc/COPYING.txt
 *
 * @copyright  (c) the authors
 * @author     Florian Lippert <flo@syscp.org>
 * @license    GPLv2 http://files.syscp.org/misc/COPYING.txt
 * @package    Functions
 * @version    $Id$
 */

function processForm($form, $input, $url_params = array())
{
	if(validateFormDefinition($form))
	{
		$submitted_fields = array();
		$changed_fields = array();
		$saved_fields = array();

		foreach($form['groups'] as $groupname => $groupdetails)
		{
			if(validateFieldDefinition($groupdetails))
			{
				// Prefetch form fields
				foreach($groupdetails['fields'] as $fieldname => $fielddetails)
				{
					$groupdetails['fields'][$fieldname] = array_merge_prefix($fielddetails, $fielddetails['type'], prefetchFormFieldData($fieldname, $fielddetails));
					$form['groups'][$groupname]['fields'][$fieldname] = $groupdetails['fields'][$fieldname];
				}
			}
		}
		
		foreach($form['groups'] as $groupname => $groupdetails)
		{
			if(validateFieldDefinition($groupdetails))
			{
				// Validate fields
				foreach($groupdetails['fields'] as $fieldname => $fielddetails)
				{
					$newfieldvalue = getFormFieldData($fieldname, $fielddetails, &$input);
			
					if($newfieldvalue != $fielddetails['value'])
					{
						if(($error = validateFormField($fieldname, $fielddetails, $newfieldvalue)) !== true)
						{
							standard_error($error, $fieldname);
						}
						else
						{
							$changed_fields[$fieldname] = $newfieldvalue;
						}
					}

					$submitted_fields[$fieldname] = $newfieldvalue;
				}
			}
		}

		foreach($form['groups'] as $groupname => $groupdetails)
		{
			if(validateFieldDefinition($groupdetails))
			{
				// Check fields for plausibility
				foreach($groupdetails['fields'] as $fieldname => $fielddetails)
				{
					if(($plausibility_check = checkPlausibilityFormField($fieldname, $fielddetails, $submitted_fields[$fieldname], $submitted_fields)) !== false)
					{
						if(is_array($plausibility_check) && isset($plausibility_check[0]))
						{
							if($plausibility_check[0] == FORMFIELDS_PLAUSIBILITY_CHECK_OK)
							{
								// Nothing to do here, everything's okay
							}
							elseif($plausibility_check[0] == FORMFIELDS_PLAUSIBILITY_CHECK_ERROR)
							{
								unset($plausibility_check[0]);
								$error = $plausibility_check[1];
								unset($plausibility_check[1]);
								$targetname = implode(' ', $plausibility_check);
								standard_error($error, $targetname);
							}
							elseif($plausibility_check[0] == FORMFIELDS_PLAUSIBILITY_CHECK_QUESTION)
							{
								unset($plausibility_check[0]);
								$question = $plausibility_check[1];
								unset($plausibility_check[1]);
								$targetname = implode(' ', $plausibility_check);
								if(!isset($input[$question]))
								{
									if(is_array($url_params) && isset($url_params['filename']))
									{
										$filename = $url_params['filename'];
										unset($url_params['filename']);
									}
									else
									{
										$filename = '';
									}
									ask_yesno($question, $filename, array_merge($url_params, $submitted_fields, array($question => $question)), $targetname);
								}
							}
							else
							{
								standard_error('plausibilitychecknotunderstood');
							}
						}
					}
				}
			}
		}

		foreach($form['groups'] as $groupname => $groupdetails)
		{
			if(validateFieldDefinition($groupdetails))
			{
				// Save fields
				foreach($groupdetails['fields'] as $fieldname => $fielddetails)
				{
					if(isset($changed_fields[$fieldname]))
					{
						if(($saved_field = saveFormField($fieldname, $fielddetails, manipulateFormFieldData($fieldname, $fielddetails, $changed_fields[$fieldname]))) !== false)
						{
							$saved_fields = array_merge($saved_fields, $saved_field);
						}
						else
						{
							standard_error('errorwhensaving', $fieldname);
						}
					}
				}
			}
		}

		// Save form
		return saveForm($form, $saved_fields);
	}
}
