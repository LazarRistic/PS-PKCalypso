<?php
/**
 * Created by PhpStorm.
 * User: Lazar
 * Date: 2/17/15
 * Time: 6:01 PM
 */

namespace root\baza;


class DBInfo {

    private $DBHost = "sql3.freemysqlhosting.net";

    private $DBName = "sql367451";

    private $DBUser = "sql367451";

    private $DBPass = "pY9!pV6%";

    /**
     * @return string
     */
    public function getDBHost()
    {
        return $this->DBHost;
    }

    /**
     * @return string
     */
    public function getDBName()
    {
        return $this->DBName;
    }

    /**
     * @return string
     */
    public function getDBPass()
    {
        return $this->DBPass;
    }

    /**
     * @return string
     */
    public function getDBUser()
    {
        return $this->DBUser;
    }



} 