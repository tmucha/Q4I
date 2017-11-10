<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/g5-dev/user/data/gantry5/themes/g5_helium/config/_error/layout.yaml',
    'modified' => 1507566798,
    'data' => [
        'version' => 2,
        'preset' => [
            'image' => 'gantry-admin://images/layouts/default.png',
            'name' => '_error',
            'timestamp' => 1497479266
        ],
        'layout' => [
            '/navigation/' => [
                0 => [
                    0 => 'logo-9608 15',
                    1 => 'menu-6409 65',
                    2 => 'social-3171 20'
                ]
            ],
            '/header/' => [
                
            ],
            '/intro/' => [
                
            ],
            '/features/' => [
                0 => [
                    0 => 'custom-3518'
                ]
            ],
            '/utility/' => [
                
            ],
            '/above/' => [
                
            ],
            '/testimonials/' => [
                
            ],
            '/expanded/' => [
                
            ],
            '/container-main/' => [
                0 => [
                    0 => [
                        'mainbar' => [
                            0 => [
                                0 => 'system-content-6005'
                            ]
                        ]
                    ]
                ]
            ],
            'footer' => [
                
            ],
            '/offcanvas/' => [
                0 => [
                    0 => 'mobile-menu-5697'
                ]
            ]
        ],
        'structure' => [
            'navigation' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => ''
                ]
            ],
            'header' => [
                'attributes' => [
                    'boxed' => '3',
                    'class' => ''
                ]
            ],
            'intro' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => ''
                ]
            ],
            'features' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => '2',
                    'class' => ''
                ]
            ],
            'utility' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => '',
                    'class' => ''
                ]
            ],
            'above' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => ''
                ]
            ],
            'testimonials' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => ''
                ]
            ],
            'expanded' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => ''
                ]
            ],
            'mainbar' => [
                'type' => 'section',
                'subtype' => 'main',
                'attributes' => [
                    'class' => ''
                ],
                'block' => [
                    'variations' => 'center'
                ]
            ],
            'container-main' => [
                'attributes' => [
                    'boxed' => ''
                ]
            ],
            'footer' => [
                'inherit' => [
                    'outline' => 'default',
                    'include' => [
                        0 => 'attributes',
                        1 => 'children'
                    ]
                ]
            ],
            'offcanvas' => [
                'attributes' => [
                    'boxed' => ''
                ]
            ]
        ],
        'content' => [
            'logo-9608' => [
                'title' => 'Logo / Image'
            ],
            'social-3171' => [
                'block' => [
                    'class' => 'g-social-header'
                ]
            ],
            'custom-3518' => [
                'title' => 'Custom HTML',
                'attributes' => [
                    'html' => '<a onclick="ga(\'send\',\'event\',\'Error-page\',\'Go-to-page\',\'From-Error-to-Ultimate-guide\')" href="http://questionsforinterviewer.com/questions-to-ask-interviewer" title="error-page">
                        <img src="/g5/user/images/g5_helium/media/error.png" alt="error-page">
            </a>'
                ]
            ]
        ]
    ]
];
