<?php
namespace LeoGalleguillos\Image\Model\Service\Thumbnail;

use Imagick;
use LeoGalleguillos\Image\Model\Entity as ImageEntity;

class Create
{
    public function create(
        ImageEntity\Image $imageEntity,
        int $width,
        string $destination
    ) {
        $imagick = new Imagick($imageEntity->getRootUrl());

        $thumbnail = new ImageEntity\Image();
        $thumbnail->setRootUrl($destination);
        return $thumbnail;
    }
}
