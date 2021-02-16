<?php
namespace MonthlyBasis\Image\Model\Table;

use Laminas\Db\Adapter\Adapter;

class Image
{
    /**
     * @var Adapter
     */
    protected $adapter;

    /**
     * Construct.
     *
     * @param Adapter $adapter
     */
    public function __construct(Adapter $adapter)
    {
        $this->adapter = $adapter;
    }

    public function insert(
        string $rootRelativeUrl
    ): int {
        $sql = '
            INSERT
              INTO `image` (
                       `root_relative_url`
                   )
            VALUES (?)
                 ;
        ';
        $parameters = [
            $rootRelativeUrl,
        ];
        return (int) $this->adapter
                          ->query($sql)
                          ->execute($parameters)
                          ->getGeneratedValue();
    }
}
