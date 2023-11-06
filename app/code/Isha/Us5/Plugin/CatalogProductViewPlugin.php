<?php

namespace Isha\Us5\Plugin;

class CatalogProductViewPlugin
{
    protected $modificationApplied = false;

    public function afterToHtml(\Magento\Catalog\Block\Product\View $subject, $result)
    {
        if (!$this->modificationApplied) {
            $modifiedResult = '<p style="color:red;"><strong>Modified Product View</strong></p>';
            
            $result .= $modifiedResult;

            $this->modificationApplied = true;
        }

        return $result;
    }

    
}
