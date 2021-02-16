<?php
namespace MonthlyBasis\Image\Model\Service\Thumbnail;

use Imagick;
use MonthlyBasis\Image\Model\Entity as ImageEntity;

class Create
{
    public function create(
        ImageEntity\Image $imageEntity,
        int $width,
        string $destination
    ) :ImageEntity\Image {
        $imagick = new Imagick($imageEntity->getRootUrl());
        $imagick->scaleImage($width, 0);
        $imagick->writeImage($destination);

        $thumbnail = new ImageEntity\Image();
        $thumbnail->setRootUrl($destination);
        return $thumbnail;
    }
}
