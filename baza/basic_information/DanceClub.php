<?php
/**
 * Created by PhpStorm.
 * User: Lazar
 * Date: 27.8.2015.
 * Time: 20:31
 */

namespace root\basic_information;


class DanceClub
{

    private $id;

    private $title;

    private $address;

    private $email;

    private $coutry;

    private $city;

    private $webSite;

    public function getJsonData()
    {
        return array('dc_id' => $this->getId(), 'dc_title' => $this->getTitle(),
            'dc_address' => $this->getAddress(), 'dc_email' => $this->getEmail(),
            'dc_country' => $this->getCoutry(), 'dc_city' => $this->getCity(), 'dc_web_site' => $this->getWebSite());
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
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
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
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param mixed $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * @return mixed
     */
    public function getWebSite()
    {
        return $this->webSite;
    }

    /**
     * @param mixed $webSite
     */
    public function setWebSite($webSite)
    {
        $this->webSite = $webSite;
    }

    public function toString()
    {
        return "
            <tr>
                <td>" . $this->getId() . "</td>
                <td>" . $this->getTitle() . "</td>
                <td>" . $this->getAddress() . "</td>
                <td>" . $this->getEmail() . "</td>
                <td>" . $this->getCoutry() . "</td>
                <td>" . $this->getCity() . "</td>
                <td>" . $this->getWebSite() . "</td>
            </tr>
        ";
    }

}