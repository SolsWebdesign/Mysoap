<?php
namespace Sols\Mysoap\Model\Data;

use Magento\Framework\Model\AbstractModel;
use Sols\Mysoap\Api\Data\MyCustomersInterface;

class MyCustomers extends AbstractModel implements MyCustomersInterface
{
    /**
     * @inheritDoc
     */
    public function getCustomers()
    {
        return $this->getData(self::CUSTOMERS);
    }

    /**
     * @inheritDoc
     */
    public function setCustomers(array $customers)
    {
        return $this->setData(self::CUSTOMERS, $customers);
    }
}
