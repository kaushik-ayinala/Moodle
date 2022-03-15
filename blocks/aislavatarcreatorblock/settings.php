<?php
$settings->add(new admin_setting_heading(
    'headerconfig',
    get_string('headerconfig', 'block_aislavatarcreatorblock'),
    get_string('descconfig', 'block_aislavatarcreatorblock')
));

$settings->add(new admin_setting_configcheckbox(
    'aislavatarcreatorblock/Allow_HTML',
    get_string('labelallowhtml', 'block_aislavatarcreatorblock'),
    get_string('descallowhtml', 'block_aislavatarcreatorblock'),
    '0'
));
