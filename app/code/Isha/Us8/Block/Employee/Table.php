<?php
namespace Isha\Us8\Block\Employee;

use Magento\Framework\View\Element\Template;
use Isha\Us8\Model\ResourceModel\Employee\Collection;

class Table extends Template
{
    protected $employeeCollection;

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        Collection $employeeCollection,
        array $data = []
    ) {
        parent::__construct($context, $data);
        $this->employeeCollection = $employeeCollection;
    }

    /**
     * Get the employee collection
     *
     * @return array
     */
    public function getEmployeeCollection()
    {
        return $this->employeeCollection->getItems();
    }
}
