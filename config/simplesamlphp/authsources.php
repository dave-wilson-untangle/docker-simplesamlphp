<?php

$config = array(
    'admin' => array(
        'core:AdminPassword',
    ),

    'example-userpass' => array(
        'exampleauth:UserPass',
        'user1:password' => array(
            'email' => 'dwilson@arista.com',
        ),
        'dwilson:password' => [
            'email' => 'dwilson@arista.com',
        ],
        'rsanchez:password' => array(
            'email' => 'rsanchez@samltest.id',
        ),
    ),
);
