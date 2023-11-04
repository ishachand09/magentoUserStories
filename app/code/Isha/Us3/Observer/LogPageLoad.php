<?php

namespace Isha\Us3\Observer;

use Magento\Framework\Event\ObserverInterface;
use Psr\Log\LoggerInterface;

class LogPageLoad implements ObserverInterface
{
    protected $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        $html = $observer->getEvent()->getData('response')->getBody();
        $this->logger->info("Page HTML: " . $html);
    }
}
