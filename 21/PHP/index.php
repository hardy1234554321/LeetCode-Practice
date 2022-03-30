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
     * @param ListNode $list1
     * @param ListNode $list2
     * @return ListNode
     */
    function mergeTwoLists($list1, $list2)
    {
        if ($list1 == '')
            return $list2;
        if ($list2 == '')
            return $list1;

        if ($list1->val < $list2->val) {
            $list1->next = $this->mergeTwoLists($list1->next, $list2);
            return $list1;
        } else {
            $list2->next = $this->mergeTwoLists($list1, $list2->next);
            return $list2;
        }
    }
}


// $arr_l1 = [];
// $arr_l2 = [0];
// $arr_l1 = [2];
// $arr_l2 = [1];
$arr_l1 = [1, 2, 4];
$arr_l2 = [1, 3, 4];

$fake_l1 = new ListNode();
$l1 = $fake_l1;
foreach ($arr_l1 as $num) {
    $l1->next = new ListNode($num);
    $l1 = $l1->next;
}

$fake_l2 = new ListNode();
$l2 = $fake_l2;
foreach ($arr_l2 as $num) {
    $l2->next = new ListNode($num);
    $l2 = $l2->next;
}

$app = new Solution();
$data = $app->mergeTwoLists($fake_l1->next, $fake_l2->next);