<?php
namespace Egoh;

class Bot
{
    public function makeMove($boardState, $playerUnit)
    {
        return [1, 1, $playerUnit];
    }
}