<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/g5-dev/user/themes/g5_helium/blueprints/styles/above.yaml',
    'modified' => 1497457668,
    'data' => [
        'name' => 'Above Styles',
        'description' => 'Above section styles for the Helium theme',
        'type' => 'section',
        'form' => [
            'fields' => [
                'background' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Background',
                    'default' => '#f4f5f7'
                ],
                'text-color' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Text',
                    'default' => '#424753'
                ]
            ]
        ]
    ]
];
