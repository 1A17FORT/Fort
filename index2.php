<?php

// function test()
// {
//     echo 'Hello';
// }
// test();
// test();

// function hello($x = 'Guest')
// {
//     echo "Hello, $x";
// }
// hello();
// hello('John');
// hello('jack');

// $a = 5;
// function test($a)
// {
//     global $a; Для использования вне функции
//     $a+=10;
//     var_dump($a);
// }
// var_dump($a);
// test($a);
// var_dump($a);


// function sum(... $nums)
// {
//     $res = 0;
//     foreach($nums as $num)
//         {
//             $res += $num;
//         }
//     echo $res;
// }
// sum(10, 10, 20, 1,);

// function sum($a, $b, $c):int
// {
//     return $a + $b + $c;
// }
// var_dump(sum(1,2,4));

function table(int $trfirst, int $tdfirst)
{
    echo '<table border="1" width="100%">';
    for ($tr = 1; $tr < $trfirst; $tr++)
        {
            echo "<tr>";
            for ($td = 1; $td < $tdfirst; $td++)
                {
                    echo "<td> $tr * $td = " . $td*$tr . "</td>";
                }
                echo "</tr>";
        }
    echo '</table>';
}
table(2,5);
