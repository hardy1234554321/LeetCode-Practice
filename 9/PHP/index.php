<?
class Solution
{

    /**
     * @param Integer $x
     * @return Boolean
     */
    function isPalindrome($x)
    {
        //Could you solve it without converting the integer to a string?
        $temp_x = $x;
        $new_x = 0;

        while ($temp_x != null) {
            $d = $temp_x % 10;
            $new_x = $new_x * 10 + $d;
            $temp_x = intval($temp_x / 10);
        }

        if ($new_x == $x && $new_x >= 0)
            return true;
        else
            return false;
    }

    function isPalindrome2($x)
    {
        // 反轉字串
        if ($x == strrev($x))
            return true;
        else
            return false;
    }
}


$app = new Solution();

$x = 10;
$data = $app->isPalindrome($x);