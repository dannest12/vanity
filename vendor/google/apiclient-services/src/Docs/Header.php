<?php


namespace Google\Service\Docs;

class Header extends \Google\Collection
{
  protected $collection_key = 'content';
  protected $contentType = StructuralElement::class;
  protected $contentDataType = 'array';
  /**
   * @var string
   */
  public $headerId;

  /**
   * @param StructuralElement[]
   */
  public function setContent($content)
  {
    $this->content = $content;
  }
  /**
   * @return StructuralElement[]
   */
  public function getContent()
  {
    return $this->content;
  }
  /**
   * @param string
   */
  public function setHeaderId($headerId)
  {
    $this->headerId = $headerId;
  }
  /**
   * @return string
   */
  public function getHeaderId()
  {
    return $this->headerId;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Header::class, 'Google_Service_Docs_Header');
