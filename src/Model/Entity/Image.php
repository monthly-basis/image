<?php
namespace LeoGalleguillos\Image\Model\Entity;

use LeoGalleguillos\Image\Model\Entity as ImageEntity;

class Image
{
    protected $height;
    protected $imageId;
    protected $rootRelativeUrl;
    protected $url;
    protected $width;

    public function getRootRelativeUrl() : string
    {
        return $this->rootRelativeUrl;
    }

    public function setRootRelativeUrl(string $rootRelativeUrl) : ImageEntity\Image
    {
        $this->rootRelativeUrl = $rootRelativeUrl;
        return $this;
    }
}
