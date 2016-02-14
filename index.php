<html>
<body>
<?php

print "***** Calc *****";
print "<br>";

$i = 8 * 4 + 2 * (10 - 3 - 4) + 5 * 3;
print $i;
print "<br><br>";

print "***** Strings *****";
print "<br>";

$task2 = "1984"."cisco";
print $task2;
print "<br><br>";

print "***** Even List *****";
print "<br>";

$x = 1;

while ($x <= 100){
    if ($x % 2 == 0){
        $test[] = $x;
    }
    $x = $x + 1;
}

print_r($test);
print "<br><br>";

print "***** Prime List *****";
print "<br>";

$list[] = 1;

for ($i = 2 ; $i <= 10000 ; $i++) {
    for ($x = 2 ; $i >= $x ; $x++){
        if ($i == $x){
            $list[] = $x;
        } elseif ($i % $x == 0){
            break;
        }
    }
}

print_r($list);
print "<br><br>";


print "***** fizzbuzz *****";
print "<br>";

for ($i=1;$i<=100;$i++){
    if ($i % 3 ==0 and $i % 5 == 0){
        print $i." is fizzbuzz";
        print "<br>";
    } elseif ($i % 3 ==0){
        print $i." is fizz";
        print "<br>";
    } elseif ($i % 5 == 0){
        print $i." is buzz";
        print "<br>";
    }
}
?>

</body>
</html>
