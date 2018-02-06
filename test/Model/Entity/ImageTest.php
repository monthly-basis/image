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
        $orientation = 6;
        $this->assertSame(
            $this->imageEntity,
            $this->imageEntity->setOrientation($orientation)
        );
        $this->assertSame(
            $orientation,
            $this->imageEntity->getOrientation()
        );
    }
}