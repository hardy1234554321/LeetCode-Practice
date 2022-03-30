<?
# Definition for a singly-linked list.
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
     * @param ListNode $l1
     * @param ListNode $l2
     * @return ListNode
     */
    function addTwoNumbers($l1, $l2)
    {
        $sum = 0;
        $carry = 0;
        $arr_sum = [];

        while ($l1 != '' || $l2 != '') {
            $sum = $l1->val + $l2->val + $carry;

            if ($sum >= 10) {
                $carry = intval($sum / 10);
                $sum = $sum % 10;
            } else {
                $carry = 0;
            }
            $arr_sum[] = $sum;

            $l1 = $l1->next;
            $l2 = $l2->next;
        }
        if ($carry > 0)
            $arr_sum[] = $carry;

        $result_list = new ListNode();
        $res = $result_list;
        foreach ($arr_sum as $num) {
            $res->next = new ListNode($num);
            $res = $res->next;
        }

        return $result_list->next;
    }
}

$arr_l1 = [2, 4, 3];
$arr_l2 = [5, 6, 4];

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
$result = $app->addTwoNumbers($fake_l1->next, $fake_l2->next);
echo '<pre>';
print_r($result);
echo '</pre>';
