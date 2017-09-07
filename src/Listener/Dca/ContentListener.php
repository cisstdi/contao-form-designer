<?php

/**
 * @package    contao-form-designer
 * @author     David Molineus <david.molineus@netzmacht.de>
 * @copyright  2017 netzmacht David Molineus. All rights reserved.
 * @filesource
 *
 */

namespace Netzmacht\Contao\FormDesigner\Listener\Dca;

use Bit3\Contao\MetaPalettes\MetaPalettes;

/**
 * Class ModuleListener.
 *
 * @package Netzmacht\Contao\FormDesigner\Listener\Dca
 */
class ContentListener
{
    /**
     * List of supported content elements.
     *
     * @var array
     */
    private $supportedElements;

    /**
     * ModuleListener constructor.
     *
     * @param array $supportedElements List of supported content elements.
     */
    public function __construct(array $supportedElements)
    {
        $this->supportedElements = $supportedElements;
    }

    /**
     * Initialize.
     *
     * @return void
     */
    public function initialize()
    {
        foreach ($this->supportedElements as $element) {
            MetaPalettes::appendFields('tl_content', $element, 'include', ['formLayout']);
        }
    }
}
