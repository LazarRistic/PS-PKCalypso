<?php
/**
 * Created by PhpStorm.
 * User: Lazar
 * Date: 2/13/15
 * Time: 12:35 PM
 */

namespace root\baza;


use root\basic_information\DanceClub;
use root\basic_information\Dancer;

include "basic_information/Dancer.php";
include "basic_information/DanceClub.php";
include "DBInfo.php";

class BazaBrokerSQL {


    /**
     * Returns all dancers from database
     * @return array
     */
    public function getAllDancers()
    {

        $dancers = array();

        $sql = "SELECT * FROM dancer";
        $result = mysqli_query($this->connection(), $sql);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $dancer = new Dancer();
                $dancer->setId($row["d_id"]);
                $dancer->setFirstname($row["d_first_name"]);
                $dancer->setLastname($row["d_last_name"]);
                $dancer->setEmail($row["d_email"]);
                $dancer->setCoutry($row["d_country"]);
                $dancer->setPassword($row["d_password"]);
                $dancer->setUsername($row["d_username"]);
                $dancer->setGender($row["d_gender"]);
                $dancer->setNationality($row["d_nationality"]);
                $dancer->setDanceClub($this->getDancerClubFromId($row["d_club"]));
                $dancers[] = $dancer;
            }
        }
        $this->connection()->close();
        return $dancers;
    }

    /**
     * @return \mysqli connection
     */
    private function connection()
    {
        $DBinfo = new DBInfo();
        $servername = $DBinfo->getDBHost();
        $username = $DBinfo->getDBUser();
        $password = $DBinfo->getDBPass();
        $dbname = $DBinfo->getDBName();

        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        return $conn;
    }

    public function getDancerClubFromId($id)
    {
        $danceClubs = array();
        $danceClubs = $this->getAllDanceClub();
        foreach ($danceClubs as $danceClub) {
            if ($danceClub->getId() == $id) {
                return $danceClub;
            }
        }
        return new DanceClub();

    }

    /**
     * Returns all Classes from database
     * @return array
     */
    public function getAllDanceClub()
    {
        $danceClubs = array();

        $sql = "SELECT * FROM dance_club";
        $result = mysqli_query($this->connection(), $sql);

        if (mysqli_num_rows($result) > 0 ) {
            while ($row = mysqli_fetch_assoc($result)) {
                $danceClub = new DanceClub();
                $danceClub->setId($row["dc_id"]);
                $danceClub->setTitle($row["dc_title"]);
                $danceClub->setAddress($row["dc_address"]);
                $danceClub->setEmail($row["dc_email"]);
                $danceClub->setCoutry($row["dc_country"]);
                $danceClub->setCity($row["dc_city"]);
                $danceClub->setWebSite($row["dc_web_site"]);
                $danceClubs[] = $danceClub;
            }
        }
        $this->connection()->close();
        return $danceClubs;
    }

    /**
     * Used for REST, returns all AgeGroups from database
     * @return string as JSON
     */
    public function getAllDanceClubsJSON()
    {

        $sql = "SELECT * FROM dance_club ORDER BY dc_id ASC";
        if (!$result = mysqli_query($this->connection(), $sql)) {
            //ako se upit ne izvrši
            echo '{"greska":"Nastala je greška pri izvršavanju upita."}';
            exit();
        } else {
            //ako je upit u redu
            if ($result->num_rows > 0) {
                //ako ima rezultata u bazi
                $niz = array();
                while ($red = $result->fetch_object()) {
                    $niz[] = $red;
                }
                //print_r ($niz);
                $niz_json = json_encode($niz);
                return ($niz_json);
                //print ($niz_json);
            } else {
                //ako nema rezultata u bazi
                echo '{"greska":"Nema rezultata."}';
            }
        }
        $this->connection()->close();
    }

    public function registerDanceClub($title, $address, $email, $country, $city, $website)
    {
        $danceClub = new DanceClub();
        $danceClub->setTitle($title);
        $danceClub->setAddress($address);
        $danceClub->setEmail($email);
        $danceClub->setCity($city);
        $danceClub->setCoutry($country);
        $danceClub->setWebSite($website);
        $sql = "INSERT INTO `dance_club` ( `dc_title`,`dc_address`,`dc_email`,`dc_country`,`dc_city`, `dc_web_site`)
                VALUES ('" . $danceClub->getTitle() . "', '" . $danceClub->getAddress() . "', '" . $danceClub->getEmail() . "', '" . $danceClub->getCoutry() .
            "', '" . $danceClub->getCity() .
            "', '" . $danceClub->getWebSite() . "')";

        if ($this->connection()->query($sql) === TRUE) {
            return "<p> Uspesno ste registrovali plesni klub <a href='index.php'>vratite se nazad</a></p> ";
        } else {
            echo "Error: " . $sql . "<br>" . $this->connection()->error;
            return "<p> Nije uspela registracija, pokusajte ponovo na ovom <a href='register.php'> linku </a></p> ";
        }
    }
}