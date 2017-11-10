<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/g5-dev/user/data/gantry5/themes/g5_helium/config/home_page/layout.yaml',
    'modified' => 1507541284,
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
                0 => [
                    0 => 'spacer-9692 5',
                    1 => 'custom-2721 90',
                    2 => 'spacer-5162 5'
                ]
            ],
            '/intro/' => [
                0 => [
                    0 => 'custom-5916'
                ]
            ],
            '/features/' => [
                
            ],
            '/utility/' => [
                
            ],
            '/above/' => [
                0 => [
                    0 => 'custom-3163'
                ],
                1 => [
                    0 => 'custom-8792 50',
                    1 => 'custom-9529 50'
                ]
            ],
            '/testimonials/' => [
                
            ],
            '/expanded/' => [
                
            ],
            '/container-main/' => [
                0 => [
                    0 => [
                        'aside 25' => [
                            0 => [
                                0 => 'position-position-4734'
                            ]
                        ]
                    ],
                    1 => [
                        'mainbar 50' => [
                            0 => [
                                0 => 'system-content-1587'
                            ]
                        ]
                    ],
                    2 => [
                        'sidebar 25' => [
                            0 => [
                                0 => 'position-position-3949'
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
                    'boxed' => '',
                    'class' => ''
                ]
            ],
            'intro' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => '',
                    'class' => '',
                    'extra' => [
                        0 => [
                            'background-color' => 'grey'
                        ]
                    ]
                ]
            ],
            'features' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => '0',
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
                    'boxed' => '',
                    'class' => '',
                    'extra' => [
                        0 => [
                            'background-color' => 'white'
                        ]
                    ]
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
                    'boxed' => '3',
                    'class' => '',
                    'extra' => [
                        
                    ]
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
            'custom-2721' => [
                'title' => 'Custom HTML',
                'attributes' => [
                    'html' => '<div class="modular modular-row showcase flush-top" style="background-color: rgba(0, 0, 0, 0.35); padding-left: 3%; padding-right: 3%;"><h1>Preparing for a Job Interview?</h1><h2 class="hero">Questions for interviewer are <strong>overlooked by most job candidates</strong>. Don\'t be like them!</h2><h2 class="hero"><strong>Stand out</strong> with your questions.</h2><a class="button primary" id="hero-button" href="/questions-to-ask-interviewer" onclick="ga(\'send\',\'event\',\'Home-page\',\'Go-to-page\',\'From-home-page-hero-to-ultimate-guide\')">SHOW ME THE QUESTIONS NOW!</a></div>'
                ]
            ],
            'custom-5916' => [
                'title' => 'Custom HTML',
                'attributes' => [
                    'html' => '<div class="modular-row features big"><h2 style="font-size: 250%; line-height: 150%; text-transform: uppercase;">Boost Your Interview Preparations</h2><div class="feature-items"><div class="feature"><i class="fa fa-fw fa-graduation-cap" aria-hidden="true"></i><div class="feature-content icon-offset"><h4>Over 1 million new graduates</h4><p>Every single year there is over 1 million university graduates that enter job market.</p></div></div>              <div class="feature">                       <i class="fa fa-fw fa-users" aria-hidden="true"></i>           <div class="feature-content icon-offset">                                   <h4>Over 100,000 people</h4>                                   <p>According to Google, this is the number of people who search for job interview tips every single month.</p>                       </div>       </div></div></div><div style="font-size: 150%; text-align: center;" class="feature-items"><p>Most of them try to improve their interview skills, but never go beyond the obvious things. Go the extra mile and launch your career successfully!</p></div><div class="modular modular-row showcase flush-top" style="padding-top: 0rem; background-color: white;"><a class="button primary" id="hero-button2" href="/questions-to-ask-interviewer" onclick="ga(\'send\',\'event\',\'Home-page\',\'Go-to-page\',\'From-home-page-StartHereBTTN-to-ultimate-guide\')">START HERE</a></div>'
                ]
            ],
            'custom-3163' => [
                'title' => 'resources -heading',
                'attributes' => [
                    'html' => '<div style="padding-bottom: 0px; margin-bottom: 0rem;" class="modular-row features big"><h2 style="text-transform: uppercase; font-size: 250%; line-height: 150%;">In-depth resources for you</h2></div>'
                ]
            ],
            'custom-8792' => [
                'title' => 'ultimate article',
                'attributes' => [
                    'html' => '<h3 class="resources-h3">TOP ARTICLE</h3><a href="/questions-to-ask-interviewer" onclick="ga(\'send\',\'event\',\'Home-page\',\'Go-to-page\',\'From-home-page-TopArticleIMG-to-ultimate-guide\')"><img alt="Questions for interviewer - the ultimate guide to asking questions in a job interview" style="background-color: #73bcdf; padding: 5%;" src="home/ultimate-header.png"></a><div><p>The most extensive and detailed guide to Asking Questions in a Job Interview that exists today. This resource is piled to the top with ideas for questions. All of the questions can be taken immediately into use.</p><a class="button" style="border-radius: 0.5rem; display: block; text-align: center;" href="/questions-to-ask-interviewer" onclick="ga(\'send\',\'event\',\'Home-page\',\'Go-to-page\',\'From-home-page-TopArticleBTTN-to-ultimate-guide\')">VIEW THE ARTICLE</a></div>'
                ]
            ],
            'custom-9529' => [
                'title' => 'more resources',
                'attributes' => [
                    'html' => '<h3 class="resources-h3">MORE RESOURCES</h3><a target="_blank" href="http://www.subscribepage.com/t7f3d8" onclick="ga(\'send\',\'event\',\'Home-page\',\'Subscribe\',\'From-home-page-MoreResourcesIMG-to-subscribe\')"><img alt="Job search and job interview preparation - more resources" style="background-color: #ffdaaa; padding: 5%;" src="home/more-tools-resources.png"></a><div><p>Asking good questions in a job interview is only one of the tools that you should have in your toolbox when you apply for a job. Access even more free resources that dig deeper into the topic than anywhere else.</p><a class="button" style="border-radius: 0.5rem; display: block; text-align: center;" target="_blank" href="http://www.subscribepage.com/t7f3d8" onclick="ga(\'send\',\'event\',\'Home-page\',\'Subscribe\',\'From-home-page-MoreResourcesBTTN-to-subscribe\')">ACCESS FREE RESOURCES</a></div>'
                ]
            ],
            'position-position-4734' => [
                'title' => 'Aside',
                'attributes' => [
                    'key' => 'aside'
                ]
            ],
            'position-position-3949' => [
                'title' => 'Sidebar',
                'attributes' => [
                    'key' => 'sidebar'
                ]
            ]
        ]
    ]
];
