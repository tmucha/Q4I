<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/g5-dev/user/themes/g5_helium/blueprints/styles/font.yaml',
    'modified' => 1497457668,
    'data' => [
        'name' => 'Font Families',
        'description' => 'Font families for the Helium theme',
        'type' => 'core',
        'form' => [
            'fields' => [
                'family-default' => [
                    'type' => 'input.fonts',
                    'label' => 'Body Font',
                    'default' => 'Raleway, Helvetica, Tahoma, Geneva, Arial, sans-serif'
                ],
                'family-title' => [
                    'type' => 'input.fonts',
                    'label' => 'Title Font',
                    'default' => 'Lato, Helvetica, Tahoma, Geneva, Arial, sans-serif'
                ]
            ]
        ]
    ]
];