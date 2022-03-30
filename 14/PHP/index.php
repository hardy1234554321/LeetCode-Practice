<?
class Solution
{
    /**
     * @param String[] $strs
     * @return String
     */
    function longestCommonPrefix($strs)
    {
        // 找出陣列中長度最小的字串
        $min_len = strlen($strs[0]);
        $now_len = strlen($strs[0]);
        $min_len_str = $strs[0];
        foreach ($strs as $i => $str) {
            $now_len = strlen($str);

            if ($min_len > $now_len) {
                $min_len = $now_len;
                $min_len_str = $str;
            }
        }

        // 一一比對陣列中的字串
        for ($i = $min_len; $i > 0; $i--) {
            $count = 0;
            foreach ($strs as $str) {
                // strpos = 0，表示找到第 0 位置上的(第一個)字元
                if (
                    strpos($str, substr($min_len_str, 0, $i)) !== false
                    && strpos($str, substr($min_len_str, 0, $i)) == 0
                ) {
                    $count++;
                }

                // 所有字串皆符合條件
                if ($count == count($strs))
                    return substr($min_len_str, 0, $i);
            }
        }

        return '';
    }
}


$app = new Solution();
$strs = ["flower", "flow", "flight"];
$data = $app->longestCommonPrefix($strs);