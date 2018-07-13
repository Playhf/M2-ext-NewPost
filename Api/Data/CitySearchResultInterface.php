<?php

namespace Aws\Newpost\Api\Data;

use Magento\Framework\Api\SearchResultsInterface;

interface CitySearchResultInterface extends SearchResultsInterface
{
    /**
     * Set cities list
     *
     * @param CityInterface[] array $items
     * @return $this
     */
    public function setItems(array $items);

    /**
     * Get cities lest
     *
     * @return CityInterface[] array $items
     */
    public function getItems();
}