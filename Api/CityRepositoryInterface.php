<?php

namespace Aws\Newpost\Api;

use Magento\Framework\Api\SearchCriteriaInterface;

interface CityRepositoryInterface
{
    /**
     * @param Data\CityInterface $city
     * @return mixed
     */
    public function save(Data\CityInterface $city);

    public function getList(SearchCriteriaInterface $searchCriteria);
}