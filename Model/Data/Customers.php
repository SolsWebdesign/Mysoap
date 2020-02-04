<?php
namespace Sols\Mysoap\Model\Data;

use Magento\Framework\Model\AbstractModel;
use Sols\Mysoap\Api\Data\CustomersInterface;

class Customers extends AbstractModel implements CustomersInterface
{
    /**
     * @inheritDoc
     */
    public function getName()
    {
        return $this->getData(self::NAME);
    }

    /**
     * @inheritDoc
     */
    public function setName($name)
    {
        return $this->setData(self::NAME, $name);
    }
}
