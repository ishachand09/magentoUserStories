<?php

namespace Isha\Us7\Block;

use Magento\Framework\View\Element\Template;

class Message extends Template
{
    public function getMyMessage()
    {
        return '<h3 style="color: blue;">This is my custom message</h3>';
    }
}
