<?php
/**
 * Created by PhpStorm.
 * User: Lazar
 * Date: 2/13/15
 * Time: 2:36 PM
 */

namespace root\baza;

use root\baza\BazaBrokerSQL;
use root\exeptions\Message;

include "BazaBrokerSQL.php";
include "exeptions\Message.php";


class BazaController {

    /**
     * @param int $id
     * @return AgeGroup
     */
    public function getAgeGroup($id) {
        $bazaBrokeSQL = new BazaBrokerSQL();
        $ageGroups = array();
        $ageGroups = $bazaBrokeSQL->getAllAgeGroup();
        foreach ($ageGroups as $ageGroup) {
            if ( $ageGroup->getId() == $id ) {
                $massage = new Message();
                $massage->setGood(true);
                $massage->setObject($ageGroup);
                return $massage;
            }
        }
        return Message::Exeption(false, new \Exception("Nismo nasli AgeGroup sa zadatim id-em") );
    }


    public function getAllAgeGroup() {
        $bazaBroker = new BazaBrokerSQL();
        $ageGroups[] = array();
        $ageGroups = $bazaBroker->getAllAgeGroup();
        if (empty($ageGroups)) {
            return Message::Exeption(false, new \Exception("Nema ni jedan Age Group u bazi"));
        } else {
            return Message::Exeption(true, $ageGroups);
        }
    }

} 