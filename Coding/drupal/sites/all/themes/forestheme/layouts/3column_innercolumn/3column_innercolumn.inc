<?php

// Plugin definition
$plugin = array(
    'title' => t('3column_innercolumn'),
    'category' => t('Columns: 3'),
    'icon' => '3column_innercolumn.png',
    'theme' => 'panels-3column-innercolumn',
    'css' => '3column_innercolumn.css',
    'regions' => array(
        //top
        //center
        //left
        //left-column-header
        //left-left-column
        //left-right-column
        //left-column-footer
        //middle
        //right
        'top' => t('Top'),
        'left-column-header' => t('Left Header'),
        'left-left-column' => t('Left Left Colummn'),
        'left-right-column' => t('Left Right Colummn'),
        'left-column-footer' => t('Left Footer'),
        'middle' => t('Middle'),
        'right' => t('Right'),
        'right-column-top-left' => t('Right column top left'),
        'right-column-top-right' => t('Right column top right'),
        'right-column-bottom-left' => t('Right column bottom left'),
        'right-column-bottom-right' => t('Right column bottom right'),
    ),
);
