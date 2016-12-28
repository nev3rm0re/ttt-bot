<?php

class BotTest extends \PHPUnit_Framework_TestCase
{
    public function testCreateBot()
    {
        $bot = new \Egoh\Bot();
        $this->assertTrue(is_object($bot), "Should return an instance of Bot");
        $this->assertTrue(method_exists($bot, 'makeMove'));
    }
}