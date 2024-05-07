<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/gravAdmin/user/themes/custom/blueprints.yaml',
    'modified' => 1715056715,
    'size' => 664,
    'data' => [
        'name' => 'Custom',
        'version' => '1.0.0',
        'description' => 'Custom theme included with **Grav**',
        'icon' => 'empire',
        'author' => [
            'name' => 'Koushik Balo',
            'email' => 'paponkoushik@gmail.com',
            'url' => 'http://getgrav.org'
        ],
        'homepage' => 'https://github.com/getgrav/grav-theme-antimatter',
        'keywords' => 'custom, theme, core, modern, fast, responsive, html5, css3',
        'license' => 'MIT',
        'dependencies' => [
            0 => [
                'name' => 'grav',
                'version' => '>=1.5.10'
            ]
        ],
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'dropdown.enabled' => [
                    'type' => 'toggle',
                    'label' => 'Dropdown in navbar',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ]
            ]
        ]
    ]
];
