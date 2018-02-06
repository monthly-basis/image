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

    public function getOrientation() : int
    {
        return $this->orientation;
    }

    public function getRootRelativeUrl() : string
    {
        return $this->rootRelativeUrl;
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
}
