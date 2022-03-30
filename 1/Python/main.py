class Solution:
    def twoSum(self, nums: List[int], target: int) -> List[int]:
        map = {}
        for key in range(len(nums)):
            another_num = target - nums[key]
            if map.get(another_num) != None:
                return [key, map.get(another_num)]
            map[nums[key]] = key