<?php
namespace Emotion\Gateway;

use Medoo\Medoo;

class Message
{

    /**
     * @var Medoo
     */
    private $gateway;

    /**
     * @var string
     */
    private $table = 'message';

    public function __construct(
        Medoo $gateway
    ) {
        $this->gateway = $gateway;
    }

    /**
     * @param int $id
     * @return array
     */
    public function getMessageById(int $id) : array
    {
        return $this->gateway->select($this->table, '*', ['id' => $id]);
    }

    /**
     * @param int $userId
     * @return array
     */
    public function getMessagesByUserId(int $userId) : array
    {
        return $this->gateway->select($this->table, '*', ['user_id' => $userId]);
    }

}