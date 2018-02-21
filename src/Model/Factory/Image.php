<?php
namespace LeoGalleguillos\Image\Model\Factory;

use LeoGalleguillos\Image\Model\Entity\Image as ImageEntity;

class Image
{
    public function buildFromArray(array $array)
    {
        $imageEntity = new ImageEntity();

        $imageEntity->setUrl($array['url'])
                    ->setWidth($array['width'])
                    ->setHeight($array['height']);

        return $imageEntity;
    }
}
