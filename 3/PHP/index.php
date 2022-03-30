<?
class Solution
{

    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLongestSubstring($s)
    {
        $arr_char = preg_split('//', $s, -1, PREG_SPLIT_NO_EMPTY);

        $arr_result = [];

        for ($k = 0; $k < count($arr_char); $k++) {
            for ($i = $k; $i < count($arr_char); $i++) {
                $arr_check = [];

                for ($j = $i; $j < count($arr_char) - $k; $j++) {
                    if (in_array($arr_char[$j], $arr_check)) {
                        continue;
                    }
                    $arr_check[] = $arr_char[$j];
                    $new_str = implode('', $arr_check);
                    $flag_str = strpos($s, $new_str);


                    if ($flag_str !== false) {
                        $arr_result[count($arr_check)] = count($arr_check);
                    }
                }
            }
        }

        if ($arr_result)
            return max($arr_result);
        else
            return 0;
    }
}

$app = new Solution();

// $s = 'abcabcbb';
// $s = 'bbbbb';
// $s = 'pwwkew';
// $s = 'dvdf';
$s = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!\"#$%&'()*+,-./:;<=>?@[\\]^_`{|}~ abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!\"#$%&'()*+,-./:;<=>?@[\\]^_`{|}~ abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!\"#$%&'()*+,-./:;<=>?@[\\]^_`{|}~ ";
$result = $app->lengthOfLongestSubstring($s);
