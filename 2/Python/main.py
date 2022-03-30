# Definition for singly-linked list.
class ListNode:
    def __init__(self, val=0, next=None):
        self.val = val
        self.next = next

class Solution:
    def addTwoNumbers(self, l1, l2):
        sum = 0
        carry = 0
        arr_sum = []

        while l1 or l2:
            val_1 = val_2 = 0

            if l1:
                val_1 = l1.val
                l1 = l1.next
            if l2:
                val_2 = l2.val
                l2 = l2.next

            sum = val_1 + val_2 + carry

            carry = 0
            if sum >= 10:
                carry = int(sum / 10)
                sum %= 10
            arr_sum.append(sum)

        if carry > 0:
            arr_sum.append(carry)

        result_list = ListNode()
        res = result_list
        for num in arr_sum:
            res.next = ListNode(num)
            res = res.next

        return result_list.next


arr_l1 = [2, 4, 3]
fake_l1 = ListNode()
res1 = fake_l1
for num in arr_l1:
    res1.next = ListNode(num)
    res1 = res1.next

arr_l2 = [5, 6, 4]
fake_l2 = ListNode()
res2 = fake_l2
for num in arr_l2:
    res2.next = ListNode(num)
    res2 = res2.next

app = Solution()
result = app.addTwoNumbers(fake_l1.next, fake_l2.next)
print(result)