<?php
namespace Sols\Mysoap\Api\Data;
/*
 * @api
 */
interface MyCustomersInterface
{
    /**#@+
     * Constants defined for keys of the data array. Identical to the name of the getter in snake case
     */
    const CUSTOMERS = 'customers';

    /**
     * Get customers
     *
     * @return \Sols\Mysoap\Api\Data\CustomersInterface[]
     */
    public function getCustomers();

    /**
     * Set customers
     *
     * @param \Sols\Mysoap\Api\Data\CustomersInterface[] $customers
     * @return $this
     */
    public function setCustomers(array $customers);
}
