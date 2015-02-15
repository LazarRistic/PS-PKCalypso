<?php
/**
 * Created by PhpStorm.
 * User: Lazar
 * Date: 2/13/15
 * Time: 10:50 AM
 */

namespace root\basic_information;


class Dancer {

    /**
     * Dancers ID
     * @var int
     */
    private  $id;

    /**
     * Dancers Firstname
     * @var String
     */
    private $firstname;

    /**
     * Username
     * @var String
     */
    private $lastname;

    /**
     * Name of age_group dancer is in
     * @var String
     */
    private $ageGroup;

    /**
     * Name of class dancer is in
     * @var String
     */
    private $class;

    /**
     * Name of groups dancer is dancing in
     * @var String
     */
    private $group;

    /**
     * Dancers username
     * @var String
     */
    private $username;

    /**
     * Dancers password
     * @var String
     */
    private $password;

    /**
     * Dancers gender
     * @var String ( as char )
     */
    private $gender;

    /**
     * Dancers date of birth
     * @var
     */
    private $dateOfBirth;


    private $apsolutnobebitnapromenjiva;

    /**
     * Register full User
     * @param $ageGroup
     * @param $class
     * @param $dateOfBirth
     * @param $firstname
     * @param $gender
     * @param $group
     * @param $id
     * @param $lastname
     * @param $password
     * @param $username
     * @return Dancer
     */
    public static function fullUser($ageGroup, $class, $dateOfBirth, $firstname, $gender, $group, $id, $lastname, $password, $username)
    {
        $dancer = new Dancer();
        $dancer->ageGroup = $ageGroup;
        $dancer->class = $class;
        $dancer->dateOfBirth = $dateOfBirth;
        $dancer->firstname = $firstname;
        $dancer->gender = $gender;
        $dancer->group = $group;
        $dancer->id = $id;
        $dancer->lastname = $lastname;
        $dancer->username = $username;
        $dancer->password = $password;
        return $dancer;
    }

    /**
     * @param String $ageGroup
     */
    public function setAgeGroup($ageGroup)
    {
        $this->ageGroup = $ageGroup;
    }

    /**
     * @return String
     */
    public function getAgeGroup()
    {
        return $this->ageGroup;
    }

    /**
     * @param String $class
     */
    public function setClass($class)
    {
        $this->class = $class;
    }

    /**
     * @return String
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * @param mixed $dateOfBirth
     */
    public function setDateOfBirth($dateOfBirth)
    {
        $this->dateOfBirth = $dateOfBirth;
    }

    /**
     * @return mixed
     */
    public function getDateOfBirth()
    {
        return $this->dateOfBirth;
    }

    /**
     * @param String $firstname
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }

    /**
     * @return String
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @param String $gender
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    /**
     * @return String
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @param String $group
     */
    public function setGroup($group)
    {
        $this->group = $group;
    }

    /**
     * @return String
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param String $lastname
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }

    /**
     * @return String
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * @param String $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return String
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param String $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @return String
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $apsolutnobebitnapromenjiva
     */
    public function setApsolutnobebitnapromenjiva($apsolutnobebitnapromenjiva)
    {
        $this->apsolutnobebitnapromenjiva = $apsolutnobebitnapromenjiva;
    }

    /**
     * @return mixed
     */
    public function getApsolutnobebitnapromenjiva()
    {
        return $this->apsolutnobebitnapromenjiva;
    }



} 