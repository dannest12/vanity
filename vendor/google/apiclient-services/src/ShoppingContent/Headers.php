<?php


namespace Google\Service\ShoppingContent;

class Headers extends \Google\Collection
{
  protected $collection_key = 'weights';
  protected $locationsType = LocationIdSet::class;
  protected $locationsDataType = 'array';
  /**
   * @var string[]
   */
  public $numberOfItems;
  /**
   * @var string[]
   */
  public $postalCodeGroupNames;
  protected $pricesType = Price::class;
  protected $pricesDataType = 'array';
  protected $weightsType = Weight::class;
  protected $weightsDataType = 'array';

  /**
   * @param LocationIdSet[]
   */
  public function setLocations($locations)
  {
    $this->locations = $locations;
  }
  /**
   * @return LocationIdSet[]
   */
  public function getLocations()
  {
    return $this->locations;
  }
  /**
   * @param string[]
   */
  public function setNumberOfItems($numberOfItems)
  {
    $this->numberOfItems = $numberOfItems;
  }
  /**
   * @return string[]
   */
  public function getNumberOfItems()
  {
    return $this->numberOfItems;
  }
  /**
   * @param string[]
   */
  public function setPostalCodeGroupNames($postalCodeGroupNames)
  {
    $this->postalCodeGroupNames = $postalCodeGroupNames;
  }
  /**
   * @return string[]
   */
  public function getPostalCodeGroupNames()
  {
    return $this->postalCodeGroupNames;
  }
  /**
   * @param Price[]
   */
  public function setPrices($prices)
  {
    $this->prices = $prices;
  }
  /**
   * @return Price[]
   */
  public function getPrices()
  {
    return $this->prices;
  }
  /**
   * @param Weight[]
   */
  public function setWeights($weights)
  {
    $this->weights = $weights;
  }
  /**
   * @return Weight[]
   */
  public function getWeights()
  {
    return $this->weights;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Headers::class, 'Google_Service_ShoppingContent_Headers');
