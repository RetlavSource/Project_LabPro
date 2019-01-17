<?php

function ex01($min, $max)
{
    if ($min==null || $max==null) {
        echo "Insira valores em todos os campos!!";
        return;
    }
    if ($min>$max) {
        echo "O valor mínimo é superior ao valor máximo!!";
        return;
    }
    for ($i=$min ; $i <= $max ; $i++) {
        if ($i%2==0) {
            echo "$i is EVEN!<br/>";
        } else {
            echo "$i is ODD!<br/>";
        }
    }
}

function ex02($tabuada)
{
    if ($tabuada==null) {
        echo "Não inseriu nenhum valor !!!!";
        return;
    }

    echo "Tabuada dos $tabuada:<br/>";
    for ($i=1; $i <= 10 ; $i++) {
        $resultado = $tabuada * $i;
        echo "$tabuada x $i = $resultado<br/>";
    }
}

function ex03($min, $max)
{
    $test=true;
    if ($min==null || $max==null) {
        echo "Insira valores em todos os campos!!";
        return;
    }
    if ($min>$max) {
        echo "O valor mínimo é superior ao valor máximo!!";
        return;
    }
    if ($max<2) {
        echo "Não existem números primos até 2!!";
        return;
    }
    if ($max==2) {
        echo "$max";
        return;
    }
    for ($i=$min; $i <= $max ; $i++) {
        for ($j=2; $j < $i ; $j++) {
            if ($i%$j==0) {
                $test=false;
                break;
            }
        }
        if ($test==true && $i!=1) {
            echo "$i ";
        } else {
            $test=true;
        }
    }
}

function ex04($num)
{
    echo "A capicua de $num é ";
    $capicua=0;
    while ($num > 9) {
        $capicua = ($capicua*10) + ($num%10);
        $num=(int) ($num/10);
    }
    $capicua = ($capicua*10) + $num;
    echo $capicua;
}

function ex05($num)
{
    echo "Em Binário, $num é ";
    $binario=0;
    $conta=0;
    $invert=0;
  
    while ($num > 1) {
        $binario = ($binario*10) + ($num%2);
        $num=(int) ($num/2);
        $conta++;
    }
    $binario = ($binario*10) + $num;
    
    while ($conta > 0) {
        $invert = ($invert + ($binario%10)) * 10;
        $binario=(int) ($binario/10);
        $conta--;
    }
    $invert = $invert + $binario;
    echo $invert;
}

function ex06($num)
{
    if ($num < 1) {
        echo "O valor tem que ser superior a zero!";
        return;
    }
    $prod=1;
    for ($i=1; $i <= $num; $i++) {
        echo "$i ";
        $prod*=$i;
    }
    echo "= $prod";
}

function ex07($num)
{
    if ($num < 0) {
        echo "Não pode trocar nada ou dinheiro negativo!!";
    }

    $val=0;
    echo "Troco de $num :<br>";
    if ($num >= 500) {
        $val = (int) ($num/500);
        echo " $val notas de €500;<br>";
        $num = $num - ($val * 500);
    }

    if ($num >= 200) {
        $val = (int) ($num/200);
        echo " $val notas de €200;<br>";
        $num = $num - ($val * 200);
    }

    if ($num >= 100) {
        $val = (int) ($num/100);
        echo " $val notas de €100;<br>";
        $num = $num - ($val * 100);
    }

    if ($num >= 50) {
        $val = (int) ($num/50);
        echo " $val notas de €50;<br>";
        $num = $num - ($val * 50);
    }

    if ($num >= 10) {
        $val = (int) ($num/10);
        echo " $val notas de €10;<br>";
        $num = $num - ($val * 10);
    }

    if ($num >= 5) {
        $val = (int) ($num/5);
        echo " $val notas de €5;<br>";
        $num = $num - ($val * 5);
    }

    if ($num >= 2) {
        $val = (int) ($num/2);
        echo " $val moedas de €2;<br>";
        $num = $num - ($val * 2);
    }

    if ($num >= 1) {
        $val = (int) ($num/1);
        echo " $val moedas de €1;<br>";
        $num = $num - ($val * 1);
        $num = round($num, 2);
    }

    if ($num >= 0.5) {
        $val = (int) ($num/0.5);
        echo " $val moedas de €0.50;<br>";
        $num = $num - ($val * 0.5);
        $num = round($num, 2);
    }

    if ($num >= 0.2) {
        $val = (int) ($num/0.2);
        echo " $val moedas de €0.20;<br>";
        $num = $num - ($val * 0.2);
        $num = round($num, 2);
    }

    if ($num >= 0.1) {
        $val = (int) ($num/0.1);
        echo " $val moedas de €0.10;<br>";
        $num = $num - ($val * 0.1);
        $num = round($num, 2);
    }

    if ($num >= 0.05) {
        $val = (int) ($num/0.05);
        echo " $val moedas de €0.05;<br>";
        $num = $num - ($val * 0.05);
        $num = round($num, 2);
    }

    if ($num >= 0.02) {
        $val = (int) ($num/0.02);
        echo " $val moedas de €0.02;<br>";
        $num = $num - ($val * 0.02);
        $num = round($num, 2);
    }

    if ($num >= 0.01) {
        $val = (int) ($num/0.01);
        echo " $val moedas de €0.01;<br>";
        $num = $num - ($val * 0.01);
        $num = round($num, 2);
    }
}
