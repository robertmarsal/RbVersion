<?php

return array(
    'rb_version' => array(
        'provider' => array(
            /**
             * Accepted types:
             *     - file
             *     - direct
             */
//            'type' => 'file',
//            'file'=> '/tmp/version.php',
            'type' => 'direct',
            'number'=> '1.2.3',
            'name'=> 'Amazing',
        ),
    ),
    'controller_plugins' => array(
        'invokables' => array(
            'rbVersion' => 'RbVersion\Mvc\Controller\Plugin\Version',
        )
    ),
    'view_helpers' => array(
        'invokables' => array(
            'rbVersion' => 'RbVersion\View\Helper\Version',
        ),
    ),
);