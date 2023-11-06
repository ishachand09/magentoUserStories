<?php

namespace Isha\Us7\Block;

use Magento\Framework\View\Element\Template;

class Message extends Template
{
    public function getMyMessage()
    {
        return '<h3 style="color: blue;">This is my custom message</h3>';
    }

    public function _afterToHtml($html)
    {
        return $html . '<div>Additional Message from _afterToHtml() in userstory7</div>';
    }
}
