<?php
ini_set('display_errors', 1);
require(__DIR__.'/constants.php');

return array(
    'modules' => array(
        'ZfcBase',
        'ZfcUser',
        'ScnSocialAuth',
        'Application',
        'AssetManager',
        'Assetic',
        'HybridAuth',
        'EdpGithub',
		'User',
    ),
    'module_listener_options' => array(
        'config_glob_paths'    => array(
            'config/autoload/{,*.}{global,local}.php',
        ),
        'module_paths' => array(
            'ScnSocialAuth' => '../moduledev/ScnSocialAuth',
            './module',
            './vendor',
            '../moduledev',
        ),
    ),
);
