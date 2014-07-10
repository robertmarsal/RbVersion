<?php

return array(
    'rb_version' => array(
        'provider' => array(
            /**
             * Accepted types:
             *     - file
             *     - git
             */
            'type' => 'file',
            'file'=> '/tmp/version.php',
        ),
    ),
    'view_helpers' => array(
        'invokables' => array(
            'rbVersion' => 'RbVersion\View\Helper\Version',
        ),
    ),
);