<?
class ListNode
{
    public $val = 0;
    public $next = null;
    function __construct($val = 0, $next = null)
    {
        $this->val = $val;
        $this->next = $next;
    }
}

class Solution
{

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function removeDuplicates(&$nums)
    {
        $count = count($nums);
        for ($i = 0; $i < $count; $i++) {
            if ($nums[$i] == $nums[$i - 1]) {
                unset($nums[$i - 1]);
            }
        }
        return count($nums);
    }
}

$app = new Solution();

$nums = [0, 0, 1, 1, 1, 2, 2, 3, 3, 4];
$data = $app->removeDuplicates($nums);