<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/g5/user/data/gantry5/themes/g5_helium/config/default/layout.yaml',
    'modified' => 1507538412,
    'data' => [
        'version' => 2,
        'preset' => [
            'image' => 'gantry-admin://images/layouts/default.png',
            'name' => 'default',
            'timestamp' => 1497479266
        ],
        'layout' => [
            '/navigation/' => [
                0 => [
                    0 => 'system-messages-7972'
                ],
                1 => [
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
                        'aside 25' => [
                            
                        ]
                    ],
                    1 => [
                        'mainbar 42' => [
                            0 => [
                                0 => 'system-content-1587'
                            ]
                        ]
                    ],
                    2 => [
                        'sidebar 33' => [
                            
                        ]
                    ]
                ]
            ],
            '/footer/' => [
                0 => [
                    0 => 'custom-5869 34',
                    1 => 'custom-5624 33',
                    2 => 'custom-3406 33'
                ],
                1 => [
                    0 => 'horizontalmenu-9737'
                ],
                2 => [
                    0 => 'copyright-1736'
                ]
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
                    'boxed' => '',
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
                    'boxed' => ''
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
            'aside' => [
                'attributes' => [
                    'class' => ''
                ],
                'block' => [
                    'fixed' => '1'
                ]
            ],
            'mainbar' => [
                'type' => 'section',
                'subtype' => 'main'
            ],
            'sidebar' => [
                'type' => 'section',
                'subtype' => 'aside',
                'attributes' => [
                    'class' => ''
                ],
                'block' => [
                    'fixed' => '1'
                ]
            ],
            'container-main' => [
                'attributes' => [
                    'boxed' => '',
                    'class' => '',
                    'extra' => [
                        
                    ]
                ]
            ],
            'footer' => [
                'attributes' => [
                    'boxed' => ''
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
            'custom-5869' => [
                'title' => 'Call to action',
                'attributes' => [
                    'html' => '<h2 style="margin: 0px;
    font-size: 150%;">Want more?</h2>
<h3 style="margin: 5px 0px 0px;
    font-size: 240%;">JOIN THE<br>COMMUNITY</h3> '
                ]
            ],
            'custom-5624' => [
                'title' => 'Subscribe',
                'attributes' => [
                    'html' => '<div style="height: 100%; padding: 10% 0px;" onclick="ga(\'send\',\'event\',\'Page-footer\',\'Subscribe\',\'From-page-footer-to-subscribe-form\')"><script type="text/javascript" src="https://static.mailerlite.com/data/webforms/592675/f9z7v3.js?v3"></script></div>'
                ]
            ],
            'custom-3406' => [
                'title' => 'Social media liks',
                'attributes' => [
                    'html' => '<div  style="text-align: center; height: 100%; padding: 10% 0px;" class="g-social "><a target="_blank" href="http://www.twitter.com/Q4Interviewer" title="" aria-label="" onclick="ga(\'send\',\'event\',\'Page-footer\',\'Go-to-social-media\',\'From-page-footer-to-Twitter\')"><span class="fa fa-twitter fa-fw fa-2x"></span> <span class="g-social-text"></span></a><a target="_blank" href="http://www.facebook.com/Q4Interviewer" title="" aria-label="" onclick="ga(\'send\',\'event\',\'Page-footer\',\'Go-to-social-media\',\'From-page-footer-to-Twitter\')"><span class="fa fa-facebook fa-fw fa-2x"></span><span class="g-social-text"></span></a></div>'
                ]
            ],
            'horizontalmenu-9737' => [
                'title' => 'Horizontal Menu',
                'attributes' => [
                    'class' => 'my-footer-menu',
                    'items' => [
                        0 => [
                            'text' => 'About',
                            'link' => '/about',
                            'onclick' => 'ga(\'send\',\'event\',\'Page-footer\',\'Go-to-page\',\'From-page-footer-menu-to-About\')',
                            'name' => 'About'
                        ],
                        1 => [
                            'text' => 'Privacy policy',
                            'link' => '/privacypolicy',
                            'name' => 'Privacy policy',
                            'onclick' => 'ga(\'send\',\'event\',\'Page-footer\',\'Go-to-page\',\'From-page-footer-menu-to-PrivacyPolicy\')'
                        ],
                        2 => [
                            'text' => 'Terms of Use',
                            'link' => '/termsofuse',
                            'name' => 'Terms of Use',
                            'onclick' => 'ga(\'send\',\'event\',\'Page-footer\',\'Go-to-page\',\'From-page-footer-menu-to-TermsOfUse\')'
                        ],
                        3 => [
                            'text' => 'Contact me',
                            'link' => '/contact',
                            'name' => 'Contact me',
                            'onclick' => 'ga(\'send\',\'event\',\'Page-footer\',\'Go-to-page\',\'From-page-footer-menu-to-Contact\')'
                        ]
                    ]
                ]
            ]
        ]
    ]
];
