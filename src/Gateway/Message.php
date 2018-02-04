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

}