<?php

function ex01() {
    //$vetor = array();
    $sumPos = 0;
    $contaNeg = 0;
    $contaZero = 0;

    /** Quick way !! */
    $vetor = range(-100, 100);
    shuffle($vetor);

    /** Allow repeated numbers!! */
    //for ($i=0; $i < 20; $i++) { 
    //  $vetor[$i] = rand ( -100 , 100 );
    //}
    for ($i = 0; $i < 20; $i++) {
        if ($vetor[$i] > 0) {
            $sumPos += $vetor[$i];
        } elseif ($vetor[$i] < 0) {
            $contaNeg++;
        } else {
            $contaZero++;
        }
    }
    echo "Soma dos positivos = $sumPos<br>";
    echo "Quantidade de numeros negativos = $contaNeg <br>";
    echo "Quantidade de zeros = $contaZero <br>";
    return $vetor;
}

function ex02() {
    $vetor1 = array();
    $vetor2 = array();
    $notin = array();
    $count_notin = 0;
    $in = array();
    $count_in = 0;

    $missboth = range(0, 30);
    /** ---- 1 ---- Alternativa própria
      $missboth = array();
      $count_miss = 0;
     * 
     */
    for ($i = 0; $i < 10; $i++) {
        $vetor1[$i] = rand(0, 30);
        $vetor2[$i] = rand(0, 30);
    }

    $in = array_intersect($vetor1, $vetor2);
    $in = array_unique($in);
    $notin = array_diff(array_merge($vetor1, $vetor2), $in);
    $notin = array_unique($notin);
    // -> Alternativa própria
    /**  ---- 2 ----
      for ($index = 0; $index < 10; $index++) {
      if (in_array($vetor1[$index], $vetor2)) {
      $in[$count_in] = $vetor1[$index];
      $count_in++;
      } else {
      $notin[$count_notin] = $vetor1[$index];
      $count_notin++;
      }
      if (!in_array($vetor2[$index], $vetor1)) {
      $notin[$count_notin] = $vetor2[$index];
      $count_notin++;
      }
      }
     * 
     */
    $missboth = array_diff($missboth, $in, $notin);
    // -> Alternativa própria
    /**  ---- 1 ----
      for ($index = 0; $index <= 30; $index++) {
      if (in_array($index, $in)) {
      continue;
      }
      if (in_array($index, $notin)) {
      continue;
      }
      $missboth[$count_miss] = $index;
      $count_miss++;
      }
     */
    echo "<br>Vetor 1 ->";
    foreach ($vetor1 as $value) {
        echo " $value";
    }
    echo "<br>Vetor 2 ->";
    foreach ($vetor2 as $value) {
        echo " $value";
    }
    echo "<br>Números comuns ->";
    foreach ($in as $value) {
        echo " $value";
    }
    echo "<br>Números não comuns ->";
    foreach ($notin as $value) {
        echo " $value";
    }
    echo "<br>Inexistentes ->";
    foreach ($missboth as $value) {
        echo " $value";
    }
}

/**
 * Feito para resolver o exercicio 3 e 4
 * @param $linhas ->linhas da tabela
 * @param $colunas ->colunas da tabela (caso não exista este parâmetro,
 * ele toma o valor das linhas, sendo uma tabela quadrada)
 */
function ex03($linhas, $colunas = 0) {
    if ($colunas == 0) {
        $colunas = $linhas;
    }
    echo '<br>';
    echo '<table class="table table-bordered table-striped">';
    for ($i = 0; $i < $linhas; $i++) {
        echo '<tr>';
        for ($j = 0; $j < $colunas; $j++) {
            echo '<td>' . "$j" . '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
}

/**
 * Devolve um array, em que <i><b>a primeira posição é o array de numeros</b></i>,
 * e <i><b>a segunda posição é o array de estrelas</b></i>.
 * @return array com os números e estrelas
 */
function ex05() {
    $num = range(1, 50);
    shuffle($num);
    $stars = range(1, 12);
    shuffle($stars);
    $num = array_slice($num, 0, 5);
    $stars = array_slice($stars, 0, 2);
    sort($num);
    sort($stars);
    $game[0] = $num;
    $game[1] = $stars;
    return $game;
}

function ex06() {
    $chave = ex05();
    $sorteio = ex05();
    $resultado[0] = array_intersect($chave[0], $sorteio[0]);
    $resultado[1] = array_intersect($chave[1], $sorteio[1]);
    $array[0] = $chave;
    $array[1] = $sorteio;
    $array[2] = $resultado;
    return $array;
}

/**
 * Cria uma matriz com zero em todas as posições!
 * 
 * @param type $n_li
 * @param type $n_col
 * @return matriz
 */
function cria_matriz_zeros($n_li, $n_col = 0) {
    if ($n_col == 0) {
        $n_col = $n_li;
    }
    $matrix = array();
    for ($i = 0; $i < $n_li; $i++) {
        for ($j = 0; $j < $n_col; $j++) {
            $matrix[$i][$j] = 0;
        }
    }
    return $matrix;
}

function cria_matriz($n_li, $n_col = 0) {
    if ($n_col == 0) {
        $n_col = $n_li;
    }
    $matrix = array();
    for ($i = 0; $i < $n_li; $i++) {
        for ($j = 0; $j < $n_col; $j++) {
            $matrix[$i][$j] = rand(-100, 100);
            //$matrix[$i][$j] = rand(0, 4);
        }
    }
    return $matrix;
}

/**
 * Imprime a matriz em uma tabela!
 * 
 * @param type $matrix
 */
function print_matrix($matrix) {
    echo '<br>';
    echo '<table class="table table-bordered table-striped">';
    foreach ($matrix as $key => $value) {
        echo '<tr>';
        foreach ($matrix[$key] as $value2) {
            echo '<td class="text-center">' . "$value2" . '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
}

/**
 * Calcula o produto entre 2 matrizes!
 * 
 * @param type $li Linhas da matriz 1
 * @param type $col Linhas da matriz 1
 * @param type $li2 Linhas da matriz 2
 * @param type $col2 Linhas da matriz 2
 * @return $resultado Array com a Matriz 1, Matriz 2 e o Produto
 */
function produto_matrizes($li, $col, $li2, $col2) {
    if ($col != $li2) {
        echo "NOTA: No PRODUTO de 2 matrizes, o nº de colunas da matriz 1, tem que ser igual ao nº de linhas da matriz 2!!";
        return;
    }

    $matrix1 = cria_matriz($li, $col);
    $matrix2 = cria_matriz($li2, $col2);
    $produto = cria_matriz_zeros($li, $col2);
    for ($i = 0; $i < $li; $i++) { // itera as linhas da $matrix1
        for ($j = 0; $j < $col2; $j++) { // itera as colunas da $matrix2
            for ($k = 0; $k < $li2; $k++) { // itera as linhas da $matrix2 e colunas da $matrix1
                $produto[$i][$j] += ( $matrix1[$i][$k] * $matrix2[$k][$j] );
            }
        }
    }

    $resultado[0] = $matrix1;
    $resultado[1] = $matrix2;
    $resultado[2] = $produto;

    return $resultado;
}

function soma_matrizes($li, $col, $li2, $col2) {
    if ($li != $li2 || $col != $col2) {
        echo "NOTA: Na SOMA de 2 matrizes, o nº de linhas e colunas da matriz 1, tem que ser igual ao nº de linhas e colunas da matriz 2!!";
        return;
    }

    $matrix1 = cria_matriz($li, $col);
    $matrix2 = cria_matriz($li2, $col2);
    //$soma = cria_matriz_zeros($li, $col2);
    for ($i = 0; $i < $li; $i++) {
        for ($j = 0; $j < $col; $j++) {
            $soma[$i][$j] = ( $matrix1[$i][$j] + $matrix2[$i][$j] );
        }
    }

    $resultado[0] = $matrix1;
    $resultado[1] = $matrix2;
    $resultado[2] = $soma;

    return $resultado;
}

function matriz_transposta($li, $col) {

    $matrix = cria_matriz($li, $col);
    $transposta = cria_matriz_zeros($col, $li);
    for ($i = 0; $i < $li; $i++) {
        for ($j = 0; $j < $col; $j++) {
            $transposta[$j][$i] = $matrix[$i][$j];
        }
    }

    $resultado[0] = $matrix;
    $resultado[1] = $transposta;

    return $resultado;
}

function ex08($num) {
    if ($num == 0) {
        return 1;
    }
    $res = 1;
    for ($i = 1; $i <= $num; $i++) {
        $res *= $i;
    }
    return $res;
}

function ex08_rec($num) {
    if ($num == 0) {
        return 1;
    }
    if ($num == 1) {
        return 1;
    }
    $res = $num * ex08_rec(($num - 1));
    return $res;
}

function ex09(){
    for ($i = 0; $i < 10; $i++) {
        $vetor1[$i] = rand(-100, 100);
        $vetor2[$i] = rand(-100, 100);
    }
    $fusion = array_merge($vetor1, $vetor2);
    $fusion = array_unique($fusion);
    sort($vetor1);
    sort($vetor2);
    sort($fusion);
    $res[0] = $vetor1;
    $res[1] = $vetor2;
    $res[2] = $fusion;
    return $res;
}

function ex10($base, $expoente){
    if ($expoente == 0) {
        return 1;
    }
    if ($expoente == 1) {
        return $base;
    }
    $resultado = 1;
    for ($i = 0; $i < $expoente; $i++) {
        $resultado *= $base;
    }
    return $resultado;
}

function ex10_rec($base, $expoente){
    if ($expoente == 0) {
        return 1;
    }
    if ($expoente == 1) {
        return $base;
    }
    $resultado = $base * ex10_rec($base, ($expoente - 1));
    return $resultado;
}

function ex11($tamanho){
    $matrix = cria_matriz($tamanho);
    $soma = 0;
    for ($i = 0; $i < $tamanho; $i++) {
        $soma += $matrix[$i][$i];
    }
    $resultado[0] = $matrix;
    $resultado[1] = $soma;
    return $resultado;
}