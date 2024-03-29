<?php

return [
    'plugin' => [
        'name' => 'Wysiwyg Editors',
        'description' => 'Inject your favorite Wysiwyg Editor to CMS and other Code Editor'
    ],
    'settings' => [
        'label' => 'Wysiwyg Editors',
        'description' => 'Configure Wysiwyg Editors preferences.'
    ],
    'widget' => [
        'label' => 'Wysiwyg',
        'name' => 'Wysiwyg Editors',
        'description' => 'Renders a wysiwyg editor of user`s choice'
    ],
    'form' => [
        'settings' => [
            'select_editor' => 'Select editor',
            'editor_width' => 'Editor width',
            'editor_height' => 'Editor height',
            'toolbar_label' => 'Toolbar customization',
            'toolbar_tinymce' => 'Documentation: http://www.tinymce.com/docs/advanced/editor-control-identifiers/#toolbarcontrols',
            'toolbar_ckeditor' => 'Documentation: http://docs.ckeditor.com/#!/guide/dev_toolbar',
            'toolbar_froala' => 'Documentation: https://www.froala.com/wysiwyg-editor/docs/options#toolbarButtons'
        ],
        'page' => [
            'label' => 'Use for CMS - Page?',
            'comment' => 'Use Wysiwyg editor in CMS page'
        ],
        'content' => [
            'label' => 'Use for CMS - Content?',
            'comment' => 'Use Wysiwyg editor in CMS Content'
        ],
        'partial' => [
            'label' => 'Use for CMS - Partial?',
            'comment' => 'Use Wysiwyg editor in CMS Partial'
        ],
        'layout' => [
            'label' => 'Use for CMS - Layout?',
            'comment' => 'Use Wysiwyg editor in CMS Layout'
        ],
        'others' => [
            'label' => 'Use for others?',
            'comment' => 'Replace every instance of Code Editor with Wysiwyg Editor in all plugins except CMS (Page, Partial, Layout, Content)'
        ],
        'problog' => [
            'label' => 'Use for Radiantweb Problog?',
            'comment' => 'Use Wysiwyg editor in Radientweb Problog plugin as post editor'
        ],
        'proevent' => [
            'label' => 'Use for Radiantweb ProEvents?',
            'comment' => 'Use Wysiwyg editor in Radientweb ProEvents plugin as Event details editor'
        ],
        'spages' => [
            'label' => 'Use for RainLab Static Pages?',
            'comment' => 'Use Wysiwyg editor in RainLab Static Pages plugin as page editor'
        ],
        'blog' => [
            'label' => 'Use for RainLab Blog?',
            'comment' => 'Use Wysiwyg editor in RainLab blog plugin as post editor'
        ],
        'apages' => [
            'label' => 'Use for Autumn Pages?',
            'comment' => 'Use Wysiwyg editor in Autumn page plugin as page editor'
        ],
        'tab' => [
            'settings' => 'Settings',
            'content' => 'Content'
        ]
    ]
];
