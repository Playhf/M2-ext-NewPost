<?php

namespace Aws\Newpost\Api;

use Magento\Framework\Api\SearchCriteriaInterface;

interface WarehouseRepositoryInterface
{
    public function save(Data\WarehouseInterface $warehouse);

    public function getList(SearchCriteriaInterface $searchCriteria);

    public function getWarehouseByCity($postcode, $city);
}