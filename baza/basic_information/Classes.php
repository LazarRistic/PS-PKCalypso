<?php
/**
 * Created by PhpStorm.
 * User: Lazar
 * Date: 2/14/15
 * Time: 9:49 PM
 */

namespace root\basic_information;


class Classes
{

    /**
     * Id of dancer's class
     * @var int
     */
    private $id;

    /**
     * Class of Dancer
     * @var String
     */
    private $name;

    /**
     * @param $id
     * @param $name
     * @return Classes
     */
    public static function addClass($id, $name)
    {
        $class = new Classes();
        $class->id = $id;
        $class->name = $name;
        return $class;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return String
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param String $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }


}