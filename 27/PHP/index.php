<?
class Solution
{

    /**
     * @param Integer[] $nums
     * @param Integer $val
     * @return Integer
     */
    function removeElement(&$nums, $val)
    {
        $count = count($nums);
        for ($i = 0; $i < $count; $i++) {
            if ($nums[$i] === $val)
                unset($nums[$i]);
        }
        return count($nums);
    }
}

$app = new Solution();

$nums = [3, 2, 2, 3];
$val = 3;
$data = $app->removeElement($nums, $val);