<?php
namespace Sols\Mysoap\Api;

/**
 * @api
 */
interface MyCustomerRepositoryInterface
{
    /**
     * createCustomers
     *
     * @param \Sols\Mysoap\Api\Data\MyCustomersInterface $customers
     * @return \Sols\Mysoap\Api\Data\MyCustomersInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function createCustomers(\Sols\Mysoap\Api\Data\MyCustomersInterface $customers);
}
