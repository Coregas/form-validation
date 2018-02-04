<?php
namespace Emotion\Gateway;

use Medoo\Medoo;

class User
{
    /**
     * @var Medoo
     */
    private $gateway;

    /**
     * @var string
     */
    private $table = 'user';

    public function __construct(
        Medoo $gateway
    ) {
        $this->gateway = $gateway;
    }

    /**
     * @param int $id
     * @return array
     */
    public function getUserById(int $id) : array
    {
        return $this->gateway->select($this->table,'*', ['id' => $id]);
    }

    /**
     * @param string $email
     * @return array
     */
    public function getUserByEmail(string $email) : array
    {
        return $this->gateway->select($this->table, '*', ['email' => $email]);
    }
}