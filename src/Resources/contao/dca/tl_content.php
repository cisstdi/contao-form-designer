<?php

/**
 * @package    contao-form-designer
 * @author     David Molineus <david.molineus@netzmacht.de>
 * @copyright  2017 netzmacht David Molineus. All rights reserved.
 * @filesource
 *
 */

$GLOBALS['TL_DCA']['tl_content']['config']['onload_callback'][] = [
    'netzmacht.contao_form_designer.listener.dca.content',
    'initialize'
];

$GLOBALS['TL_DCA']['tl_content']['fields']['formLayout'] = [
    'label'      => &$GLOBALS['TL_LANG']['tl_content']['formLayout'],
    'inputType'  => 'select',
    'eval'       => [
        'tl_class' => 'w50',
        'includeBlankOption' => true,
        'chosen'             => true,
    ],
    'foreignKey' => 'tl_form_layout.title',
    'relation'   => ['type' => 'belongsTo', 'load' => 'lazy'],
    'sql'        => "int(10) unsigned NOT NULL default '0'",
];