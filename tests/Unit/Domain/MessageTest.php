<?php

namespace Tests\Unit\Domain;

use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;
use Tests\TestCase;

use App\Core\Domain\Message;

class MessageTest extends TestCase
{
    /**
     * @test
     */
    public function criar_uma_entidade_de_Message()
    {
        $ddd = '98';
        $number = '985870637';
        $content = 'Content Test';
        $message = new Message($ddd, $number, $content);

        $this->assertEquals($message->getDdd(), $ddd);
        $this->assertEquals($message->getNumber(), $number);
        $this->assertEquals($message->getContent(), $content);
    }
}
