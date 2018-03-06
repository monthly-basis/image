<?php
namespace LeoGalleguillos\Image;

use LeoGalleguillos\Image\Model\Factory as ImageFactory;
use LeoGalleguillos\Image\Model\Service as ImageService;

class Module
{
    public function getConfig()
    {
        return [
            'view_helpers' => [
                'factories' => [
                ],
            ],
        ];
    }

    public function getServiceConfig()
    {
        return [
            'factories' => [
                ImageFactory\Image::class => function ($serviceManager) {
                    return new ImageFactory\Image();
                },
                ImageService\Thumbnail\Create::class => function ($serviceManager) {
                    return new ImageService\Thumbnail\Create();
                },
            ],
        ];
    }
}
