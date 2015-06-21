<?php
require('index.php');

class WordSearchTest extends \PHPUnit_Framework_TestCase
{
    public function testWordSearch()
    {
        $board = [
            ['a', 'b', 'c', 'd'],
            ['d', 'k', 'l', 'm'],
            ['m', 'f', 'b', 's']
        ];

        // Word can be constructed form letters of sequentially adjacent cell,
        // where 'adjacent' cells are those horizontally or vertically neighboring.
        $this->assertTrue(searchWord($board, 'abcl'));
        $this->assertTrue(searchWord($board, 'admfbl'));
        $this->assertTrue(searchWord($board, 'smdc'));
        $this->assertTrue(searchWord($board, 'dklm'));

        // words that doesn't exists
        $this->assertFalse(searchWord($board, 'dlm'));
        $this->assertFalse(searchWord($board, 'smdb'));

        // It's not allowed to use the same letter twice
        $this->assertFalse(searchWord($board, 'abcc'));
        $this->assertFalse(searchWord($board, 'dklml'));

        // Full board
        $this->assertTrue(searchWord($board, 'abcdmlkdmfbs'));
    }
}