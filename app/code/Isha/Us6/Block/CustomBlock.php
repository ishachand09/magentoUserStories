<?php

namespace Isha\Us6\Block;

use Magento\Framework\View\Element\Template;

class CustomBlock extends Template
{
    protected function _toHtml()
    {
        return '<div>Hello from CustomBlock!</div>';
    }

    protected function _afterToHtml($html)
    {
        
        return '<h1> Isha </h1>'. $html;
    }
}
