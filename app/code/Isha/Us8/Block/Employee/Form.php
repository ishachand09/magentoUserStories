<?php
namespace Isha\Us8\Block\Employee;

use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;

class Form extends Template
{
    public function __construct(
        Context $context,
        array $data = []
    ) {
        parent::__construct($context, $data);
    }

    
    public function getFormAction()
    {
        // Replace 'employee/index/save' with the actual route and action where you want to process the form data.
        return $this->getUrl('us8/index/employee');
    }

    /**
     * Get the form field names and IDs
     *
     * @return array
     */
    public function getFormFieldNames()
    {
        return [
            'first_name' => 'first_name',
            'last_name' => 'last_name',
            'email' => 'email',
        ];
    }
}
