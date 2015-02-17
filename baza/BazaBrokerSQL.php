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
use root\baza\DBInfo;





class BazaBrokerSQL {


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

    /**
     * Used for REST, returns all AgeGroups from database
     * @return string as JSON
     */
    public function getAllAgeGroupJSON() {

        $sql="SELECT * FROM age_group ORDER BY id ASC";
        if (!$result = mysqli_query($this->connection(), $sql)){
            //ako se upit ne izvrši
            echo '{"greska":"Nastala je greška pri izvršavanju upita."}';
            exit();
        } else {
            //ako je upit u redu
            if ($result->num_rows>0){
                //ako ima rezultata u bazi
                $niz = array();
                while ($red=$result->fetch_object()){
                    $niz[] = $red;
                }
                //print_r ($niz);
                $niz_json = json_encode ($niz);
                return ($niz_json);
                //print ($niz_json);
            } else {
                //ako nema rezultata u bazi
                echo '{"greska":"Nema rezultata."}';
            }
        }
        $this->connection()->close();
    }

    /**
     * Returns all Classes from database
     * @return array
     */
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