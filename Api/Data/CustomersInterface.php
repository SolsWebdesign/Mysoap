<?php
namespace Sols\Mysoap\Api\Data;
/*
 * @api
 */
interface CustomersInterface
{
    const NAME = 'name';
    /**
     * Get name
     * @return string|null
     */
    public function getName();

    /**
     * Set name
     * @param string $name
     * @return $this
     */
    public function setName($name);
}
