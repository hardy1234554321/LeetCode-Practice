<?
class Solution
{

    /**
     * @param String $s
     * @return Boolean
     */
    function isValid($s)
    {
        $strs = str_split($s);

        if (count($strs) % 2 == 1)
            return false;

        // 定義左括號、右括號陣列
        $arr_dic = array(
            '(' => ')',
            '{' => '}',
            '[' => ']'
        );

        $arr_stack = array();
        foreach ($strs as $c) {
            if ($arr_dic[$c]) {
                array_push($arr_stack, $arr_dic[$c]);
            } else {
                // array_pop 回傳陣列最後一個值，並移除最後一個元素
                $temp_c = array_pop($arr_stack);
                if ($temp_c != $c)
                    return false;
            }
        }

        if (count($arr_stack) == 0)
            return true;
        else
            return false;
    }
}


$app = new Solution();
// $s = "()";
// $s = "(]";
// $s = "([)]";
// $s = "[{[]}]";
// $s = "(){}}{";
// $s = "()[]{}";
$s = "(([]){})";
// $s = "([}}])";
$data = $app->isValid($s);
