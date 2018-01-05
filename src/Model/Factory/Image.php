<?php
namespace LeoGalleguillos\Image\Model\Factory;

use LeoGalleguillos\Image\Model\Entity\Image as ImageEntity;

class Image
{
    public function buildFromArray($array)
    {
        $imageEntity         = new ImageEntity();
        $imageEntity->url    = $array['url']    ?? null;
        $imageEntity->width  = $array['width']  ?? null;
        $imageEntity->height = $array['height'] ?? null;
        return $imageEntity;
    }
}
