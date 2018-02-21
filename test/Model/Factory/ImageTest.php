<?php
namespace LeoGalleguillos\ImageTest\Model\Factory;

use LeoGalleguillos\Image\Model\Factory as ImageFactory;
use LeoGalleguillos\Image\Model\Entity as ImageEntity;
use PHPUnit\Framework\TestCase;

class ImageTest extends TestCase
{
    protected function setUp()
    {
        $this->imageFactory = new ImageFactory\Image();
        $this->imageEntity = new ImageEntity\Image();
    }

    public function testInitialize()
    {
        $this->assertInstanceOf(ImageFactory\Image::class, $this->imageFactory);
    }

    public function testBuildFromArray()
    {
        $array = [
            'url'    => 'https://www.example.com/image.jpg',
            'width'  => '123',
            'height' => '456',
        ];
        $this->assertInstanceOf(
            ImageEntity\Image::class,
            $this->imageFactory->buildFromArray($array)
        );

        $array = [
            'url'    => 'https://www.example.com/image.jpg',
        ];
        $this->assertInstanceOf(
            ImageEntity\Image::class,
            $this->imageFactory->buildFromArray($array)
        );
    }
}
