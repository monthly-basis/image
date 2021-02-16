<?php
namespace MonthlyBasis\ImageTest\Model\Service\Thumbnail;

use MonthlyBasis\Image\Model\Entity as ImageEntity;
use MonthlyBasis\Image\Model\Service as ImageService;
use PHPUnit\Framework\TestCase;

class CreateTest extends TestCase
{
    protected function setUp(): void
    {
        $this->createService = new ImageService\Thumbnail\Create();
    }

    public function testInitialize()
    {
        $this->assertInstanceOf(
            ImageService\Thumbnail\Create::class,
            $this->createService
        );
    }

    public function testCreate()
    {
        $imageEntity = new ImageEntity\Image();
        $imageEntity->setExtension('jpg')
                    ->setRootUrl($_SERVER['PWD'] . '/uploads/original.jpg');

        $width = 300;
        $destination = $_SERVER['PWD'] . '/uploads/thumbnail.jpg';

        $thumbnail = $this->createService->create(
            $imageEntity,
            $width,
            $destination
        );

        $this->assertInstanceOf(
            ImageEntity\Image::class,
            $thumbnail
        );
    }
}
