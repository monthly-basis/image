<?php
namespace LeoGalleguillos\Image\Model\Entity;

use LeoGalleguillos\Image\Model\Entity as ImageEntity;

class Image
{
    protected $height;
    protected $imageId;

    /**
     * @var int
     */
    protected $orientation;

    protected $rootRelativeUrl;
    protected $url;
    protected $width;

    public function getHeight()
    {
        return $this->height;
    }

    public function getOrientation() : int
    {
        return $this->orientation;
    }

    public function getRootRelativeUrl() : string
    {
        return $this->rootRelativeUrl;
    }

    public function getUrl() : string
    {
        return $this->url;
    }

    public function getWidth()
    {
        return $this->width;
    }

    public function setHeight(int $height) : ImageEntity\Image
    {
        $this->height = $height;
        return $this;
    }

    public function setOrientation(int $orientation) : ImageEntity\Image
    {
        $this->orientation = $orientation;
        return $this;
    }

    public function setRootRelativeUrl(string $rootRelativeUrl) : ImageEntity\Image
    {
        $this->rootRelativeUrl = $rootRelativeUrl;
        return $this;
    }

    public function setUrl(string $url) : ImageEntity\Image
    {
        $this->url = $url;
        return $this;
    }

    public function setWidth(int $width) : ImageEntity\Image
    {
        $this->width = $width;
        return $this;
    }
}
