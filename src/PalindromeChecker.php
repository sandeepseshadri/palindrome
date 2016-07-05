<?php
namespace App;

class PalindromeChecker
{

    /**
     * Checks if input string is palindrome or not
     *
     * @param $input
     * @return bool
     */
    public function isPalindrome($input)
    {
        if (empty($input)){
            return false;
        }

        $charCount = strlen($input);
        $input = strtolower($input);

        if ($charCount === 1) {
            return true;
        }

        for($i=0; $i < ($charCount / 2); $i++) {

            if ( substr($input, $i, 1) !=  substr($input, $charCount - $i - 1, 1)) {

                return false;
            }
        }

        return true;
    }
}