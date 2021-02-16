<?php
namespace MonthlyBasis\Image\Model\Factory;

use MonthlyBasis\Image\Model\Entity\Image as ImageEntity;

class Image
{
    /**
     * Build from array.
     *
     * @param array $array
     * @return ImageEntity\Image
     */
    public function buildFromArray(array $array)
    {
        $imageEntity = new ImageEntity();

        $imageEntity->setUrl($array['url']);

        if (!empty($array['width'])) {
            $imageEntity->setWidth($array['width']);
        }

        if (!empty($array['height'])) {
            $imageEntity->setHeight($array['height']);
        }

        return $imageEntity;
    }
}
