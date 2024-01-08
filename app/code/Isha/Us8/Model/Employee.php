<?php
namespace Isha\Us8\Model;

use Magento\Framework\Model\AbstractModel;

class Employee extends AbstractModel
{
    protected function _construct()
    {
        $this->_init('Isha\Us8\Model\ResourceModel\Employee');
    }
}
