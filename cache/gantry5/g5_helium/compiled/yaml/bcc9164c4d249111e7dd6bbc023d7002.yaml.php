<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/g5-dev/user/plugins/gantry5/engines/nucleus/particles/totop.yaml',
    'modified' => 1497457302,
    'data' => [
        'name' => 'To Top',
        'description' => 'Scroll back to top.',
        'type' => 'particle',
        'icon' => 'fa-chevron-up',
        'configuration' => [
            'caching' => [
                'type' => 'static'
            ]
        ],
        'form' => [
            'fields' => [
                'enabled' => [
                    'type' => 'checkbox',
                    'label' => 'Enabled',
                    'description' => 'Globally enable to top particles.',
                    'default' => true
                ],
                'css.class' => [
                    'type' => 'input.selectize',
                    'label' => 'CSS Classes',
                    'description' => 'CSS class name for the particle.',
                    'default' => 'totop'
                ],
                'icon' => [
                    'type' => 'input.icon',
                    'label' => 'Icon',
                    'description' => 'A Font Awesome icon to be displayed for the link.'
                ],
                'content' => [
                    'type' => 'input.text',
                    'label' => 'Text',
                    'description' => 'The text to be displayed for the link. HTML is allowed.',
                    'placeholder' => 'To Top'
                ]
            ]
        ]
    ]
];
