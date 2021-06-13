<?php
function pypart($n)
{
    for ($i = 0; $i < $n; $i++)
    {
        for($j = 0; $j <= $i; $j++ )
        {
            echo "* ";
        }
        echo "\n";
    }
}

function contalpha($n)
{
    $num = 65;
    for ($i = 0; $i < $n; $i++)
    {
        for ($j = 0; $j <= $i; $j++ )
        {
            $ch = chr($num);
            echo $ch." ";
            $num = $num + 1;
        }
        echo "\n";
    }
}

function numpat($n)
{
    $n = 3;
    for ($i = 3; $i > $n; $i--)
    {
        for ($j = 3; $j >= $i; $j-- )
        {
            echo $num." ";
            $num = $num + 1;
        }
        echo "\n";
    }
}

  
    $n = 3;
    pypart($n);
    contalpha($n);
    numpat($n);
?>
