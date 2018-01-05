<?php
namespace LeoGalleguillos\ImageTest\Model\Entity;

use LeoGalleguillos\Image\Model\Entity\Image as ImageEntity;
use PHPUnit\Framework\TestCase;

class ImageTest extends TestCase
{
    protected function setUp()
    {
        $this->imageEntity = new ImageEntity();
    }

    public function testInitialize()
    {
        $this->assertInstanceOf(ImageEntity::class, $this->imageEntity);
    }

    public function testAttributes()
    {
        $this->assertObjectHasAttribute('height', $this->imageEntity);
        $this->assertObjectHasAttribute('imageId', $this->imageEntity);
        $this->assertObjectHasAttribute('rootRelativeUrl', $this->imageEntity);
        $this->assertObjectHasAttribute('width', $this->imageEntity);
        $this->assertObjectHasAttribute('url', $this->imageEntity);
    }
}
