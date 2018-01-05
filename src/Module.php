<?php
namespace LeoGalleguillos\Image;

use LeoGalleguillos\Image\Model\Factory as ImageFactory;

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
            ],
        ];
    }
}
