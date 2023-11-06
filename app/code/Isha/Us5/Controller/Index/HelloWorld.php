<?php

namespace Isha\Us5\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;

class HelloWorld extends Action
{
    protected $resultPageFactory;

    public function __construct(Context $context, PageFactory $resultPageFactory)
    {
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
    }

    public function execute()
    {
        // $resultPage = $this->resultPageFactory->create();
        // $resultPage->getConfig()->getTitle()->set("Hello World");
        // return $resultPage;
        // echo "Hello World";
        return $this->resultRedirectFactory->create()->setPath('catalog/product/view/id/15');
    }
}
