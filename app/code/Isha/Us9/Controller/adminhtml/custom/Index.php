<?php
namespace Isha\Us9\Controller\adminhtml\custom;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Framework\Controller\ResultFactory;

class Index extends Action
{
    private $scopeConfig;

    public function __construct(
        Context $context,
        ScopeConfigInterface $scopeConfig
    ) {
        parent::__construct($context);
        $this->scopeConfig = $scopeConfig;
    }

    public function execute()
    {
        $isEnabled = $this->scopeConfig->getValue('general1/custom_configuration/enable');
        if ($isEnabled === '1') {
            $textToDisplay = $this->scopeConfig->getValue('general1/custom_configuration/text_to_display');
            $resultPage = $this->resultFactory->create(ResultFactory::TYPE_PAGE);
            $resultPage->getConfig()->getTitle()->prepend('Text to Display: ' . $textToDisplay);

            return $resultPage;
        } else {
            return $this->resultFactory->create(ResultFactory::TYPE_FORWARD)->forward('noroute');
        }
            // return $this->resultFactory->create(ResultFactory::TYPE_PAGE);
    }
}
