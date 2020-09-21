<?php



if (! function_exists('formatDuration')) {
    /**
     * Format duration.
     *
     * @param float $seconds
     *
     * @return string
     */
    function formatDuration(float $seconds)
    {
        if ($seconds < 0.001) {
            return round($seconds * 1000000).'μs';
        } elseif ($seconds < 1) {
            return round($seconds * 1000, 2).'ms';
        }

        return round($seconds, 2).'s';
    }
}

if (! function_exists('generateRuleTree')) {

    function generateRuleTree($list, $pid)
    {
        $tree = [];
        foreach ($list as $row) {
            if($row['pid'] === $pid) {
                $row = [
                    'id'       => $row['id'],
                    'label'    => $row['title'],
                    'pid'      => $row['pid'],
                    'path'     => $row['name'],
                    'icon'     => $row['icon'],
                    'menu'     => $row['menu']
                ];

                $children = generateRuleTree($list, $row['id']);
                if(!empty($children)) {
                    $row['children'] = $children;
                }

                $tree[] = $row;
            }
        }

        return $tree;
    }

}

if (! function_exists('errMsg')) {

    function errMsg($message, $code = '0')
    {
        throw new \Exception($message,$code);
    }
}
