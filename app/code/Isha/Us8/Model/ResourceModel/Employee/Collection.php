<?php
namespace Isha\Us8\Model\ResourceModel\Employee;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{

    protected function _construct()
    {
        $this->_init('Isha\Us8\Model\Employee', 'Isha\Us8\Model\ResourceModel\Employee');
    }
}
