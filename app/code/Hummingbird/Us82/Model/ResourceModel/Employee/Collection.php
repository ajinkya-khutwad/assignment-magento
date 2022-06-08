<?php


namespace Hummingbird\Us82\Model\ResourceModel\Employee;


use Hummingbird\Us82\Model\Employee;
use Hummingbird\Us82\Model\ResourceModel\Employee as EmployeeResourceModel;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(Employee::class, EmployeeResourceModel::class);
    }
}