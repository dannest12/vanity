<?php


namespace Google\Service\CloudTasks;

class HeaderOverride extends \Google\Model
{
  protected $headerType = Header::class;
  protected $headerDataType = '';

  /**
   * @param Header
   */
  public function setHeader(Header $header)
  {
    $this->header = $header;
  }
  /**
   * @return Header
   */
  public function getHeader()
  {
    return $this->header;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(HeaderOverride::class, 'Google_Service_CloudTasks_HeaderOverride');
