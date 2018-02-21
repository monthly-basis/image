<?php
namespace LeoGalleguillos\ImageTest\Model\Entity;

use LeoGalleguillos\Image\Model\Entity as ImageEntity;
use PHPUnit\Framework\TestCase;

class ImageTest extends TestCase
{
    protected function setUp()
    {
        $this->imageEntity = new ImageEntity\Image();
    }

    public function testInitialize()
    {
        $this->assertInstanceOf(
            ImageEntity\Image::class,
            $this->imageEntity
        );
    }

    public function testAttributes()
    {
        $this->assertObjectHasAttribute('height', $this->imageEntity);
        $this->assertObjectHasAttribute('imageId', $this->imageEntity);
        $this->assertObjectHasAttribute('rootRelativeUrl', $this->imageEntity);
        $this->assertObjectHasAttribute('width', $this->imageEntity);
        $this->assertObjectHasAttribute('url', $this->imageEntity);
    }

    public function testGettersAndSetters()
    {
        $height = 987;
        $this->assertSame(
            $this->imageEntity,
            $this->imageEntity->setHeight($height)
        );
        $this->assertSame(
            $height,
            $this->imageEntity->getHeight()
        );

        $orientation = 6;
        $this->assertSame(
            $this->imageEntity,
            $this->imageEntity->setOrientation($orientation)
        );
        $this->assertSame(
            $orientation,
            $this->imageEntity->getOrientation()
        );

        $url = 'https://www.example.com/test.jpg';
        $this->assertSame(
            $this->imageEntity,
            $this->imageEntity->setUrl($url)
        );
        $this->assertSame(
            $url,
            $this->imageEntity->getUrl()
        );

        $width = 123;
        $this->assertSame(
            $this->imageEntity,
            $this->imageEntity->setWidth($width)
        );
        $this->assertSame(
            $width,
            $this->imageEntity->getWidth()
        );
    }
}
