<?php

$matches = [];
$str = 'ahb acb aeb aeeb adcb axeb';
$regs = '/a..b/';

preg_match_all($regs, $str, $matches);

echo "Слова соответствующие регулярному выражению $regs :\n";
foreach ($matches[0] as $match) {
    echo "$match\n";
}
?>