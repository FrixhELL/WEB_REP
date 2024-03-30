<?php
#a
$matches = [];
$str = 'ahb acb aeb aeeb adcb axeb';
$regs = '/a..b/';

preg_match_all($regs, $str, $matches);

echo "Слова соответствующие регулярному выражению $regs :\n";
foreach ($matches[0] as $match) {
    echo "$match\n";
}
#b
$str = 'a1b2c3';

$matches = [];
$result = preg_replace_callback('/[0-9]+/', function ($matches) {return pow($matches[0], 3);}, $str);

echo "\n".$result;
?>