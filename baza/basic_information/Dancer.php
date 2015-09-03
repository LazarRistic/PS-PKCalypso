<?php
/**
 * Created by PhpStorm.
 * User: Lazar
 * Date: 2/13/15
 * Time: 10:50 AM
 */

namespace root\basic_information;


class Dancer
{

    private $id;

    private $firstname;

    private $lastname;

    private $email;

    private $coutry;

    private $password;

    private $username;

    private $gender;

    private $nationality;

    private $danceClub;

    public function getJsonData()
    {
        $array = array('d_id' => $this->getId(), 'd_first_name' => $this->getFirstname(),
            'd_last_name' => $this->getLastname(), 'd_email' => $this->getEmail(),
            'd_country' => $this->getCoutry(), 'd_password' => $this->getPassword(),
            'd_username' => $this->getUsername(), 'd_gender' => $this->getGender(),
            'd_nationality' => $this->getNationality(), 'd_club' => $this->getDanceClub()->getJsonData());
        return $array;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @param mixed $firstname
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }

    /**
     * @return mixed
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * @param mixed $lastname
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getCoutry()
    {
        return $this->coutry;
    }

    /**
     * @param mixed $coutry
     */
    public function setCoutry($coutry)
    {
        $this->coutry = $coutry;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @return mixed
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @param mixed $gender
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    /**
     * @return mixed
     */
    public function getNationality()
    {
        return $this->nationality;
    }

    /**
     * @param mixed $nationality
     */
    public function setNationality($nationality)
    {
        $this->nationality = $nationality;
    }

    /**
     * @return mixed
     */
    public function getDanceClub()
    {
        return $this->danceClub;
    }

    /**
     * @param mixed $danceClub
     */
    public function setDanceClub($danceClub)
    {
        $this->danceClub = $danceClub;
    }

    public function toString()
    {
        return "
           <tr>
               <td>" . $this->getId() . "</td>
               <td>" . $this->getFirstname() . "</td>
               <td>" . $this->getLastname() . "</td>
               <td>" . $this->getEmail() . "</td>
               <td>" . $this->getCoutry() . "</td>
               <td>" . $this->getPassword() . "</td>
               <td>" . $this->getUsername() . "</td>
               <td>" . $this->getGender() . "</td>
               <td>" . $this->getNationality() . "</td>
               " . $this->getDanceClub()->toString() . "
            </tr>
            ";
    }


} 