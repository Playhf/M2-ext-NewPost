<?php

namespace Aws\Newpost\Api\Data;


interface CityInterface
{
    /**
     * Set city id
     *
     * @param $id
     * @return $this
     */
    public function setCityId($id);

    /**
     * Set city name
     *
     * @param $cityName
     * @return $this
     */
    public function setCityName($cityName);

    /**
     * @param $ref
     * @return $this
     */
    public function setRef($ref);
}