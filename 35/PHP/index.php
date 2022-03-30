<?
class Solution
{

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function searchInsert($nums, $target)
    {
        $count = count($nums);

        $data = 0;
        for ($i = 0; $i < $count; $i++) {
            if ($target == $nums[$i]) {
                $data = $i;
                break;
            }
            if ($target > $nums[$i]) {
                $data = $i + 1;
            }
        }
        return $data;
    }
}

$app = new Solution();

$nums = [1, 3, 5, 6];
$val = 3;
$data = $app->searchInsert($nums, $val);