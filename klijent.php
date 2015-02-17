<?php
/**
 * Created by PhpStorm.
 * User: Lazar
 * Date: 2/15/15
 * Time: 1:42 PM
 */

$url = 'http://localhost/ITEH%20Domaci%203/baza/RESTserver.php';
$curl = curl_init($url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_POST, false);
$curl_odgovor = curl_exec($curl);
curl_close($curl);
$json_objekat=json_decode($curl_odgovor);
?>

<!DOCTYPE html>
<html>
<head>
</head>
<body>
<table>
    <tr>
        <td>Id</td>
        <td>Naziv</td>
    </tr>
    <?php
    foreach($json_objekat->age_group as $vrednost){
        ?>
        <tr>
            <td><?php echo $vrednost->id;?></td>
            <td><?php echo $vrednost->name;?></td>
        </tr>
    <?php
    }
    ?>
</table>
</body>
</html>

