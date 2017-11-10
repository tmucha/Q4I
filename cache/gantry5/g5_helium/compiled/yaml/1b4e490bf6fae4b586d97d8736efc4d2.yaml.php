<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/g5-dev/user/themes/g5_helium/custom/particles/article.yaml',
    'modified' => 1499753454,
    'data' => [
        'name' => 'Article',
        'description' => 'Displays an article covering one question to be asked in an interview',
        'type' => 'particle',
        'form' => [
            'fields' => [
                'enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Enabled',
                    'description' => 'Globally enable to the particles.',
                    'default' => true
                ],
                'bg' => [
                    'type' => 'input.text',
                    'label' => 'Article background color - CSS class',
                    'description' => 'Article background color - CSS class'
                ],
                'highlight' => [
                    'type' => 'input.text',
                    'label' => 'Question highlight color - CSS class',
                    'description' => 'Question highlight color - CSS class'
                ],
                'image' => [
                    'type' => 'input.text',
                    'label' => 'Image name',
                    'description' => 'Image file name'
                ],
                'question.number' => [
                    'type' => 'input.text',
                    'label' => 'Question number',
                    'description' => 'Question number'
                ],
                'question.title' => [
                    'type' => 'input.text',
                    'label' => 'Title',
                    'description' => 'Title'
                ],
                'html' => [
                    'type' => 'textarea.textarea',
                    'label' => 'Text / HTML',
                    'description' => 'Article text in HTML format.',
                    'overridable' => false
                ]
            ]
        ]
    ]
];
