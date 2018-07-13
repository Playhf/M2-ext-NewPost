<?php

namespace Aws\Newpost\Api\Data;

use Magento\Framework\Api\SearchResultsInterface;

interface WarehouseSearchResultInterface extends SearchResultsInterface
{
    /**
     * Set warehouses list
     *
     * @param CityInterface[] array $items
     * @return $this
     */
    public function setItems(array $items);

    /**
     * Get warehouses list
     *
     * @return CityInterface[] array $items
     */
    public function getItems();
}