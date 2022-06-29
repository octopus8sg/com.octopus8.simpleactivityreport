<?php
// This file declares a managed database record of type "ReportTemplate".
// The record will be automatically inserted, updated, or deleted from the
// database as appropriate. For more details, see "hook_civicrm_managed" at:
// https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_managed
return [
  [
    'name' => 'CRM_Simpleactivityreport_Form_Report_SimpleActivity',
    'entity' => 'ReportTemplate',
    'params' => [
      'version' => 3,
      'label' => 'Simple Activity Details',
      'description' => 'Simple Activity Details Report (com.octopus8.simpleactivityreport)',
      'class_name' => 'CRM_Simpleactivityreport_Form_Report_SimpleActivity',
      'report_url' => 'com.octopus8.simpleactivityreport/simpleactivity',
      'component' => '',
    ],
  ],
];
