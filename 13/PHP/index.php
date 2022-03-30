<?
class Solution
{
    /**
     * @param String $s
     * @return Integer
     */
    function romanToInt($s)
    {
        $arr_list = array(
            'I' => 1,
            'V' => 5,
            'X' => 10,
            'L' => 50,
            'C' => 100,
            'D' => 500,
            'M' => 1000,
        );

        $number = 0;
        for ($i = 0; $i < strlen($s); $i++) {
            $temp_a = $arr_list[substr($s, $i, 1)];
            $temp_b = $arr_list[substr($s, $i + 1, 1)];

            if ($temp_a < $temp_b) {
                $number -= $temp_a;
            } else {
                $number += $temp_a;
            }
        }

        return $number;
    }
}

$app = new Solution();

$s = 'DCCXVII';
$data = $app->romanToInt($s);
