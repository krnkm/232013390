<?php
for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "FizzBuzz\n";
    } elseif ($i % 3 == 0) {
        echo "Fizz\n";
    } elseif ($i % 5 == 0) {
        echo "Buzz\n";
    } else {
        echo $i . "\n";
    }
}
?>

<?php
$n1 = 0;
$n2 = 1;
$count = 0;
$limit = 10; // First 10 Fibonacci numbers

while ($count < $limit) {
    $next = $n1 + $n2;
    $n1 = $n2;
    $n2 = $next;
    
    if ($next % 2 == 0) {
        echo $next . "\n";
    }
    
    $count++;
}
?>
