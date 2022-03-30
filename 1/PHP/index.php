<?
class Solution
{

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target)
    {
        $map = [];

        try {
            # check nums length
            $this->constraints_list($nums);
            # check target
            $this->constraints_number($target);

            foreach ($nums as $key => $number) {
                $this->constraints_number($number);

                $another_number = $target - $number;
                if (isset($map[$another_number])) {
                    return [$key, $map[$another_number]];
                }

                $map[$number] = $key;
            }
        } catch (Exception $e) {
            print($e->getMessage());
        }
    }

    private function constraints_list($nums)
    {
        $length_of_nums = count($nums);

        if (2 > $length_of_nums || $length_of_nums > pow(10, 4))
            throw new Exception('Over nums.length range!');
    }

    private function constraints_number($number)
    {
        if (pow(-10, 9) > $number || $number > pow(10, 9))
            throw new Exception('Over number range!');
    }
}
