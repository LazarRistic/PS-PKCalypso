<?php
/**
 * Created by PhpStorm.
 * User: Lazar
 * Date: 2/13/15
 * Time: 3:22 PM
 */

namespace root\basic_information;

/**
 * Class AgeGroup it shows age groups for dancer like Pioniri, Mladji omladinic,
 * Omladinci, Stariji omladinci i Seniori
 * @package root\basic_information
 */
class AgeGroup
{

    /**
     * Id of AgeGroup it's identifier
     * @var int
     */
    private $id;

    /**
     * Name of AgeGroup
     * @var String
     */
    private $name;

    /**
     * Register AgeGroup
     * @param $id
     * @param $name
     * @return AgeGroup
     */
    public static function newAgeGroup($id, $name)
    {
        $ageGroup = new AgeGroup();
        $ageGroup->setId($id);
        $ageGroup->setName($name);
        return $ageGroup;
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