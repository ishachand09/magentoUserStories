<?php
namespace Isha\Us2\Plugin;

class HeaderFooterPlugin
{
    public function afterGetWelcome(\Magento\Theme\Block\Html\Header $subject, $result)
    {
        return "Welcome to My Store!";
    }

    public function afterGetCopyright(\Magento\Theme\Block\Html\Footer $subject, $result)
    {
      return '© 2023 Isha Chand. All Rights Reserved.';
    }
}
