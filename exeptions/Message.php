<?php
/**
 * Created by PhpStorm.
 * User: Lazar
 * Date: 2/13/15
 * Time: 3:47 PM
 */

namespace root\exeptions;


class Message {

    /**
     * Is the message good or error
     * @var Boolean
     */
    private $good;

    /**
     * Exeption or ClassObject
     * @var Object
     */
    public $object;

    /**
     * @param boolean $good
     */
    public function setGood($good)
    {
        $this->good = $good;
    }

    /**
     * @return boolean
     */
    public function getGood()
    {
        return $this->good;
    }

    /**
     * @param Object $object
     */
    public function setObject($object)
    {
        $this->object = $object;
    }

    /**
     * @return Object
     */
    public function getObject()
    {
        return $this->object;
    }

    public static function Exeption($good, $object) {

        $message = new Message();
        $message->setGood($good);
        $message->setObject($object);
        return $message;

    }

} 