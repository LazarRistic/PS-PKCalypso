<?php
/**
 * Created by PhpStorm.
 * User: Lazar
 * Date: 4.9.2015.
 * Time: 22:29
 */

use root\basic_information\DanceClub;
use root\basic_information\Dancer;

include "basic_information/Dancer.php";
include "basic_information/DanceClub.php";
?>
<?php
$title = $_GET["danceClub"];
$url = "http://localhost/IS%20PK%20Calypso/PS-PKCalypso/rest/danceclub/json/" . $title;

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
    $danceClub = new DanceClub();
    $danceClub->setId($curl_odg->{'dc_id'});
    $danceClub->setTitle($curl_odg->{'dc_title'});
    $danceClub->setAddress($curl_odg->{'dc_address'});
    $danceClub->setEmail($curl_odg->{'dc_email'});
    $danceClub->setCoutry($curl_odg->{'dc_country'});
    $danceClub->setCity($curl_odg->{'dc_city'});
    $danceClub->setWebSite($curl_odg->{'dc_web_site'});
    echo "
        <table class='table table-striped'>
            <thead>
                <tr>
                    <th>Naziv Kluba</th>
                    <th>Adresa Kluba</th>
                    <th>Email</th>
                    <th>Zemlja</th>
                    <th>Grad</th>
                    <th>Web Sajt</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                   <td>" . $danceClub->getTitle() . "</td>
                   <td>" . $danceClub->getAddress() . "</td>
                   <td>" . $danceClub->getEmail() . "</td>
                   <td>" . $danceClub->getCoutry() . "</td>
                   <td>" . $danceClub->getCity() . "</td>
                   <td>" . $danceClub->getWebSite() . "</td>
                </tr>
            </tbody>
        </table>";
}




?>