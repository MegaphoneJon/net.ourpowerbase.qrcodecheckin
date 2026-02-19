<?php
use CRM_Qrcodecheckin_ExtensionUtil as E;

return [
  [
    'name' => 'AfformPlacement:qrcode_landing_page',
    'entity' => 'OptionValue',
    'cleanup' => 'always',
    'update' => 'always',
    'params' => [
      'version' => 4,
      'values' => [
        'option_group_id.name' => 'afform_placement',
        'name' => 'qrcode_landing_page',
        'value' => 'qrcode_landing_page',
        'label' => E::ts('QR Code Landing Page'),
        'is_reserved' => TRUE,
        'is_active' => TRUE,
        'icon' => 'fa-qrcode',
        'grouping' => 'Event,Participant',
        'description' => E::ts('Add to QR Code Check-In landing page.'),
      ],
      'match' => ['option_group_id', 'name'],
    ],
  ],
];
