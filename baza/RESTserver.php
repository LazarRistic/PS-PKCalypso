<?php
/**
 * Created by PhpStorm.
 * User: Lazar
 * Date: 2/15/15
 * Time: 1:22 PM
 */

//definiše se mime type
header("Content-type: application/json");?>{"age_group":
<?php
$mysql_server = "sql3.freemysqlhosting.net";
$mysql_user = "sql367451";
$mysql_password = "pY9!pV6%";
$mysql_db = "sql367451";
$mysqli = new mysqli($mysql_server, $mysql_user, $mysql_password, $mysql_db);

if ($mysqli->connect_errno) {
    printf("Konekcija neuspešna: %s\n", $mysqli->connect_error);
    exit();
}
$mysqli->set_charset("utf8");

$sql="SELECT * FROM age_group ORDER BY id ASC";
if (!$q=$mysqli->query($sql)){
//ako se upit ne izvrši
    echo '{"greska":"Nastala je greška pri izvršavanju upita."}';
    exit();
} else {
//ako je upit u redu
    if ($q->num_rows>0){
//ako ima rezultata u bazi
        $niz = array();
        while ($red=$q->fetch_object()){
            $niz[] = $red;
        }
//print_r ($niz);
        $niz_json = json_encode ($niz);
        print ($niz_json);
    } else {
//ako nema rezultata u bazi
        echo '{"greska":"Nema rezultata."}';
    }
}
?>}

