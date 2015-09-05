<?php
/**
 * Created by PhpStorm.
 * User: Lazar
 * Date: 27.8.2015.
 * Time: 22:41
 */


use root\basic_information\DanceClub;
use root\basic_information\Dancer;

include "basic_information/Dancer.php";
include "basic_information/DanceClub.php";
?>
<?php
$username = $_GET["dancer"];
$url = "http://localhost/IS%20PK%20Calypso/PS-PKCalypso/rest/dancer/json/" . $username;

$curl = curl_init();

curl_setopt($curl, CURLOPT_URL, $url); //Url together with parameters
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_POST, false);
$curl_odgovor = curl_exec($curl);
curl_close($curl);
if (substr($curl_odgovor, 0, 6) === '"There') {
    echo $curl_odgovor;
} else {
    $curl_odg = json_decode($curl_odgovor);
    $dance = new Dancer();
    $danceClub = new DanceClub();

    $dance->setId($curl_odg->{'d_id'});
    $dance->setFirstname($curl_odg->{'d_first_name'});
    $dance->setLastname($curl_odg->{'d_last_name'});
    $dance->setEmail($curl_odg->{'d_email'});
    $dance->setCoutry($curl_odg->{'d_country'});
    $dance->setPassword($curl_odg->{'d_password'});
    $dance->setUsername($curl_odg->{'d_username'});
    $dance->setGender($curl_odg->{'d_gender'});
    $dance->setNationality($curl_odg->{'d_nationality'});
    $danceClub->setId($curl_odg->{'d_club'}->{'dc_id'});
    $danceClub->setTitle($curl_odg->{'d_club'}->{'dc_title'});
    $danceClub->setAddress($curl_odg->{'d_club'}->{'dc_address'});
    $danceClub->setEmail($curl_odg->{'d_club'}->{'dc_email'});
    $danceClub->setCoutry($curl_odg->{'d_club'}->{'dc_country'});
    $danceClub->setCity($curl_odg->{'d_club'}->{'dc_city'});
    $danceClub->setWebSite($curl_odg->{'d_club'}->{'dc_web_site'});
    $dance->setDanceClub($danceClub);
    echo "
        <table class='table table-striped'>
            <thead>
                <tr>
                    <th>Korisnicko ime</th>
                    <th>Ime</th>
                    <th>Prezime</th>
                    <th>Email</th>
                    <th>Zemlja</th>
                    <th>Pol</th>
                    <th>Klub</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                   <td>" . $dance->getUsername() . "</td>
                   <td>" . $dance->getFirstname() . "</td>
                   <td>" . $dance->getLastname() . "</td>
                   <td>" . $dance->getEmail() . "</td>
                   <td>" . $dance->getCoutry() . "</td>
                   <td>" . $dance->getGender() . "</td>
                   <td>" . $dance->getDanceClub()->getTitle() . "</td>
                </tr>
            </tbody>
        </table>";
}




?>