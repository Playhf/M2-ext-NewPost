<?php

namespace Aws\Newpost\Api\Data;


interface WarehouseInterface
{
    /**
     * Set city id
     *
     * @param $id
     * @return $this
     */
    public function setCityId($id);

    /**
     * Set Warehouse name
     *
     * @param $name
     * @return $this
     */
    public function setName($name);

    /**
     * @param $ref
     * @return $this
     */
    public function setRef($ref);

}