<?php
namespace MonthlyBasis\Image;

use MonthlyBasis\Image\Model\Factory as ImageFactory;
use MonthlyBasis\Image\Model\Service as ImageService;
use MonthlyBasis\Image\Model\Table as ImageTable;

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
                ImageTable\Image::class => function ($serviceManager) {
                    return new ImageTable\Image(
                        $serviceManager->get('image')
                    );
                }
            ],
        ];
    }
}
