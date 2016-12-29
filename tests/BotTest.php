<?php

class BotTest extends \PHPUnit_Framework_TestCase
{
    public function testCreateBot()
    {
        $bot = new \Egoh\Bot();
        $this->assertTrue(is_object($bot), "Should return an instance of Bot");
        $this->assertTrue(method_exists($bot, 'makeMove'));
    }

    public function makeMoveProvider()
    {
        $emptyBoard = [
            ['', '', ''],
            ['', '', ''],
            ['', '', '']
        ];
        return [
            "empty board, player X" => [$emptyBoard, 'X'],
            "empty board, player O" => [$emptyBoard, 'O']
        ];
    }

    /**
    * @dataProvider makeMoveProvider
    */
    public function testMakeMove($board, $playerUnit)
    {
        // setup
        $expectedMove = [1, 1, $playerUnit];

        // test
        $bot = new \Egoh\Bot();
        $move = $bot->makeMove($board, $playerUnit);

        // verify
        $this->assertEquals($expectedMove, $move);
    }
}