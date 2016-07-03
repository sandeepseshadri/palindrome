<?php

use App\PalindromeChecker;
use PHPUnit\Framework\TestCase;

class PalindromeCheckerTest extends TestCase
{
    public function setUp()
    {
        $this->checker = new PalindromeChecker();
    }

    /**
     * @test
     * @dataProvider validPalindromes
     * @param $input
     */
    public function it_returns_true_when_its_palindrome($input)
    {
        $result = $this->checker->check($input);
        $this->assertTrue($result);
    }

    /**
     * @test
     * @dataProvider invalidPalindromes
     * @param $input
     */
    public function it_returns_false_when_input_is_not_palindrome($input)
    {
        $result = $this->checker->check($input);
        $this->assertFalse($result);
    }

    /**
     * List of valid palindromes
     *
     * @return array
     */
    public function validPalindromes()
    {
        return [
            ['tot'],
            ['dood'],
            ['peeweep'],
            ['Civic']
        ];
    }

    /**
     * List of invalid palindromes
     *
     * @return array
     */
    public function invalidPalindromes()
    {
        return [
            [null],
            ['set'],
            ['list']
        ];
    }
}