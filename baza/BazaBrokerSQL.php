<?php
/**
 * Created by PhpStorm.
 * User: Lazar
 * Date: 2/13/15
 * Time: 12:35 PM
 */

namespace root\baza;

use root\basic_information\Dancer;
use root\basic_information\AgeGroup;
use root\basic_information\Classes;

include "../basic_information/Dancer.php";
include "../basic_information/AgeGroup.php";
include "../basic_information/Classes.php";





class BazaBrokerSQL {

    private $DBHost = "sql3.freemysqlhosting.net";

    private $DBName = "sql367451";

    private $DBUser = "sql367451";

    private $DBPass = "pY9!pV6%";


    /**
     * @return \mysqli connection
     */
    private function connection()
    {
        $servername = $this->DBHost;
        $username = $this->DBUser;
        $password = $this->DBPass;
        $dbname = $this->DBName;

        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        return $conn;
    }

    /**
     * Returns all dancers from database
     * @return array
     */
    public function getAllDancers() {

        $dancer = array();

        $sql = "SELECT * FROM dancer";
        $result = mysqli_query($this->connection(), $sql);

        if ( mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $dancer[] = Dancer::fullUser($row["id"], $row["firstname"], $row["lastname"], $row["age_group_id"], $row["class_id"], $row["group_id"], $row["username"], $row["password"], $row["gender"], $row["date_of_birth"]);
            }
        }
        $this->connection()->close();
        return $dancer;
    }

    public function getAllAgeGroup() {
        $ageGroup = array();

        $sql = "SELECT * FROM age_group";
        $result = mysqli_query($this->connection(), $sql);

        if (mysqli_num_rows($result) > 0 ) {
            while ($row = mysqli_fetch_assoc($result)) {
                $ageGroup[] = AgeGroup::newAgeGroup($row["id"], $row["name"]);
            }
        }
        $this->connection()->close();
        return $ageGroup;
    }

    public function getAllClass() {
        $class = array();

        $sql = "SELECT * FROM class";
        $result = mysqli_query($this->connection(), $sql);

        if (mysqli_num_rows($result) > 0 ) {
            while ($row = mysqli_fetch_assoc($result)) {
                $class[] = Classes::addClass($row["id"], $row["name"]);
            }
        }
        $this->connection()->close();
        return $class;
    }

}