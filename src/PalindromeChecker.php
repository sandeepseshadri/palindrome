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
    public function check($input)
    {
        if (empty($input)){
            return false;
        }

        $charArr = str_split(strtolower($input));
        $charCount = count($charArr);

        for($i=0; $i < ($charCount / 2); $i++) {

            if ($charArr[$i] != $charArr[$charCount - $i - 1]) {
                return false;
            }
        }
        return true;
    }
}