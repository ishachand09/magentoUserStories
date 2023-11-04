<?php
namespace Isha\Us1\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Isha\Us1\Test;

class DisplayParams extends Action
{
    protected $test;

    public function __construct(Context $context, Test $test)
    {
        parent::__construct($context);
        $this->test = $test;
    }

    public function execute()
    {
        
        $this->test->displayParams();
    }
}