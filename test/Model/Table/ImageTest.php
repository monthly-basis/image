<?php
namespace LeoGalleguillos\QuestionTest\Model\Table;

use LeoGalleguillos\Image\Model\Table as ImageTable;
use LeoGalleguillos\Test\TableTestCase;
use Zend\Db\Adapter\Exception\InvalidQueryException;

class ImageTest extends TableTestCase
{
    protected function setUp()
    {
        $this->imageTable = new ImageTable\Image($this->getAdapter());

        $this->dropTable('image');
        $this->createTable('image');
    }

    public function testInitialize()
    {
        $this->assertInstanceOf(
            ImageTable\Image::class,
            $this->imageTable
        );
    }

    public function testInsert()
    {
        $imageId = $this->imageTable->insert(
            '/root/relative/url'
        );
        $this->assertSame(
            1,
            $imageId
        );

        $imageId = $this->imageTable->insert(
            '/root/relative/url2'
        );
        $this->assertSame(
            2,
            $imageId
        );

        try {
            $this->imageTable->insert(
                '/root/relative/url'
            );
            $this->fail();
        } catch (InvalidQueryException $invalidQueryException) {
            $this->assertSame(
                'Statement could not be executed',
                substr($invalidQueryException->getMessage(), 0, 31)
            );
        }
    }
}
