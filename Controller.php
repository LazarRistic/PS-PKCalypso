<?php
/**
 * Created by PhpStorm.
 * User: Lazar
 * Date: 15.8.2015.
 * Time: 9:43
 */

namespace root;


use root\baza\BazaBrokerSQL;

include "baza/BazaBrokerSQL.php";

class Controller
{

    public function loadUserFromUsernameJSON($username)
    {
        $bazaBroker = new BazaBrokerSQL();
        $userArray = array();
        $userArray = $bazaBroker->getAllDancers();
        foreach ($userArray as $dancer) {
            if ($dancer->getUsername() == $username) {
                $dancerJSON = json_encode($dancer->getJsonData());
                return $dancerJSON;
            }
        }
    }

    public function getDancerClubFromId($id)
    {
        $bazaBroker = new BazaBrokerSQL();
        return $bazaBroker->getDancerClubFromId($id);
    }

    public function loadAllDanceClubsJSON()
    {
        $bazaBroker = new BazaBrokerSQL();
        return $bazaBroker->getAllDanceClubsJSON();
    }

    public function  loadAllDanceCLubsXML()
    {
        $bazaBroker = new BazaBrokerSQL();
        $danceClubs = $bazaBroker->getAllDanceClub();

        $data = '<rss><channel>';
        $data .= '<title> Dance CLubs </title>';

        foreach ($danceClubs as $danceClub) {

            $data .= '<item>';
            $data .= '<title>' . $danceClub->getTitle() . '</title>';
            $data .= '<address>' . $danceClub->getAddress() . '</address>';
            $data .= '<email>' . $danceClub->getEmail() . '</email>';
            $data .= '<country>' . $danceClub->getCoutry() . '</country>';
            $data .= '<city>' . $danceClub->getCity() . '</city>';
            $data .= '<website>' . $danceClub->getWebSite() . '</website>';
            $data .= '</item>';
        }
        $data .= '</channel></rss>';

        $xml = new \SimpleXMLElement($data);
        return $xml;
    }

    public function registerDanceClub($title, $address, $email, $country, $city, $website)
    {
        $bazaBroker = new BazaBrokerSQL();

        return $bazaBroker->registerDanceClub($title, $address, $email, $country, $city, $website);
    }
}