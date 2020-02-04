<?php
namespace Sols\Mysoap\Model;

use Sols\Mysoap\Api\MyCustomerRepositoryInterface;

class MyCustomerRepository implements MyCustomerRepositoryInterface
{
    /**
     * @inheritdoc
     */
    public function createCustomers(\Sols\Mysoap\Api\Data\MyCustomersInterface $customers)
    {
        // do some stuff (here I will write to log file)
        $writer = new \Zend\Log\Writer\Stream(BP . '/var/log/sols_mysoap.log');
        $devLog = new \Zend\Log\Logger();
        $devLog->addWriter($writer);
        $allCustomers = $customers->getCustomers();
        foreach ($allCustomers as $customer) {
            $devLog->info(print_r('Customer name is ' . $customer->getName(),true));
        }
        return $customers;
    }
}
