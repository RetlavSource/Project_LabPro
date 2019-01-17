<?php

class Worksheet03 {

    public function __construct() {
        
    }

    public function ex01($str) {
        $new = strtoupper($str);
        // slpit the string in array of strings (space and comma separated) with no empty strings on array
        $new = preg_split("/[\s,]+/", $new, NULL, PREG_SPLIT_NO_EMPTY);
        return $new;
    }

    public function ex02($frase, $subs, $por) {
        // slpit the string in array of strings (space separated) with no empty strings on array
        $new = preg_split("/[\s]+/", $frase, NULL, PREG_SPLIT_NO_EMPTY);
        foreach ($new as $key => $value) {
            if (!strcmp($value, $subs)) {
                $new[$key] = $por;
            }
        }
        $new = implode(" ", $new);

        // This is ok, but substitute part of a string, and not what we want!!
        /**
          $trans = array($subs => $por);
          $new = strtr($frase, $trans);
         * 
         */
        return $new;
    }

    /**
     * Function that encodes a string using Ceaser Cipher method.
     * 
     * @param string $frase string to encode
     * @param int $cifra shift value
     */
    public function ex03_enc($frase, $cifra) {
        //$min = range('a','z');
        //$max = range('A','Z');
        //$values = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ 0123456789-+*/";
        //$values_shuffled = str_shuffle($values);
        $values_shuffled = 'nCXmk5H1E7aFQt9yi2u6/Ddr8bM*ZfhBKNjR3c0xwT4SGJsAlWOvUgzVqe+ PI-LpoY';
        $n_values = strlen($values_shuffled);
        $frase_ciphered = "";
        for ($i = 0; $i < strlen($frase); $i++) {
            $position = $this->find($values_shuffled, $frase[$i]);
            if ($position !== FALSE) {
                $new = $position + $cifra;
                while ($new >= $n_values) {
                    $new -= $n_values;
                }
                //$frase_ciphered[$i] = $values_shuffled[$new];
                $frase_ciphered .= $values_shuffled[$new];
            } else {
                //$frase_ciphered[$i] = $frase[$i];
                $frase_ciphered .= $frase[$i];
            }
        }
        //-Na versão php 7.0.32, ao colocarmos as linhas 50 e 53, tinhamos de fazer o implode, pois 
        // o compilador identificava a variável $frase_ciphered como sendo um array de strings com 1 caracter.
        // Na versão 7.2.12, isso já não acontece.
        //$frase_ciphered = implode("", $frase_ciphered);
        return $frase_ciphered;
    }

    /**
     * Função que procura um carácter numa string.
     * 
     * @param string $frase String onde procurar
     * @param char $caracter Carácter a procurar
     * @return FALSE|char Caso encontre o carácter, devolve a sua posição (indice), caso não encontre, devolve FALSE
     */
    public function find($frase, $caracter) {
        for ($i = 0; $i < strlen($frase); $i++) {
            if ($frase[$i] == $caracter) {
                return $i;
            }
        }
        return FALSE;
    }

    /**
     * Function that decodes a string using Ceaser Cipher method.
     * 
     * @param string $frase string to decode
     * @param int $cifra shift value
     */
    public function ex03_dec($frase, $cifra) {
        $values_shuffled = "nCXmk5H1E7aFQt9yi2u6/Ddr8bM*ZfhBKNjR3c0xwT4SGJsAlWOvUgzVqe+ PI-LpoY";
        $n_values = strlen($values_shuffled);
        $frase_normal = "";
        for ($i = 0; $i < strlen($frase); $i++) {
            $position = $this->find($values_shuffled, $frase[$i]);
            if ($position !== FALSE) {
                $new = $position - $cifra;
                while ($new < 0) {
                    $new += $n_values;
                }
                //$frase_normal[$i] = $values_shuffled[$new];
                $frase_normal .= $values_shuffled[$new];
            } else {
                //$frase_normal[$i] = $frase[$i];
                $frase_normal .= $frase[$i];
            }
        }
        //-Na versão php 7.0.32, ao colocarmos as linhas 90 e 93, tinhamos de fazer o implode, pois 
        // o compilador identificava a variável $frase_normal como sendo um array de strings com 1 caracter.
        // Na versão 7.2.12, isso já não acontece.
        //$frase_normal = implode("", $frase_normal);
        return $frase_normal;
    }

    public function ex04($nome) {
        $new = preg_split("/[\s]+/", $nome, NULL, PREG_SPLIT_NO_EMPTY);
        $size = count($new);
        $values[0] = $new;
        $values[1] = $size;
        return $values;
    }

    public function ex05($data) {
        $data_splited = explode("/", $data);
        //Outro modo de dividir a string:
        //$data_splited = preg_split("/[\/]+/", $data, NULL, PREG_SPLIT_NO_EMPTY);
        // leap year -> ((year % 4 == 0) && ((year % 100 != 0) || (year % 400 == 0)));
        if ($data_splited[2] < 0) {
            return 0;
        }
        if ($data_splited[1] < 1 || $data_splited[1] > 12) {
            return 0;
        }
        switch ($data_splited[1]) {
            case 4:
            case 6:
            case 9:
            case 11:    //30 dias cada
                if ($data_splited[0] < 1 || $data_splited[0] > 30) {
                    return 0;
                }
                break;
            case 2:     //anos bisextos
                if (($data_splited[2] % 4 == 0) && (($data_splited[2] % 100 != 0) || ($data_splited[2] % 400 == 0))) {
                    if ($data_splited[0] < 1 || $data_splited[0] > 29) {
                        return 0;
                    }
                } else {
                    if ($data_splited[0] < 1 || $data_splited[0] > 28) {
                        return 0;
                    }
                }
                break;
            default:    //31 dias cada
                if ($data_splited[0] < 1 || $data_splited[0] > 31) {
                    return 0;
                }
        }
        return 1;
    }

    public function ex06($data) {
        if ($this->ex05($data) == 0) {
            echo "Data introduzida incorrectamente!!";
            return 0;
        }
        $data_splited = explode("/", $data);
        switch ($data_splited[1]) {
            case 4:
            case 6:
            case 9:
            case 11:    //30 dias cada
                $data_splited[0] += 1;
                if ($data_splited[0] > 30) {
                    $data_splited[0] = 1;
                    $data_splited[1] += 1;
                }
                break;
            case 2:     //anos bisextos
                $data_splited[0] += 1;
                if (($data_splited[2] % 4 == 0) && (($data_splited[2] % 100 != 0) || ($data_splited[2] % 400 == 0))) {
                    if ($data_splited[0] > 29) {
                        $data_splited[0] = 1;
                        $data_splited[1] += 1;
                    }
                } else {
                    if ($data_splited[0] > 28) {
                        $data_splited[0] = 1;
                        $data_splited[1] += 1;
                    }
                }
                break;
            case 12:     //ultimo mês
                $data_splited[0] += 1;
                if ($data_splited[0] > 31) {
                    $data_splited[0] = 1;
                    $data_splited[1] = 1;
                    $data_splited[2] += 1;
                }
                break;
            default:    //31 dias cada
                $data_splited[0] += 1;
                if ($data_splited[0] > 31) {
                    $data_splited[0] = 1;
                    $data_splited[1] += 1;
                }
        }
        $data_splited = implode("/", $data_splited);
        return $data_splited;
    }

    public function ex07($data1, $data2) {
        if ($this->ex05($data1) == 0 || $this->ex05($data2) == 0) {
            echo "Data introduzida incorrectamente!!";
            return FALSE;
        }
        $data1_splited = explode("/", $data1);
        $data2_splited = explode("/", $data2);
        $dias = 0;

        //Ponto de partida (mês da primeira data) do ciclo while seguinte.
        //Vai incluir todos os dias do mês da primeira data, mas serão retirados no fim...
        $token = $data1_splited[1];

        //calculo dos dias desde o mês/ano da primeira data (inclusive), até ao mês/ano (exclusive) da data seguinte...
        while ($data1_splited[2] <= $data2_splited[2]) {
            $flag = 0;
            if ($data1_splited[2] == $data2_splited[2]) {
                $flag = $data2_splited[1];
            }
            switch ($token) {
                case 1:
                    if ($flag == 1) {
                        break;
                    } else {
                        $dias += 31;
                    }
                case 2:
                    if ($flag == 2) {
                        break;
                    } else {        //verifica anos bisextos
                        if (($data1_splited[2] % 4 == 0) && (($data1_splited[2] % 100 != 0) || ($data1_splited[2] % 400 == 0))) {
                            $dias += 29;
                        } else {
                            $dias += 28;
                        }
                    }
                case 3:
                    if ($flag == 3) {
                        break;
                    } else {
                        $dias += 31;
                    }
                case 4:
                    if ($flag == 4) {
                        break;
                    } else {
                        $dias += 30;
                    }
                case 5:
                    if ($flag == 5) {
                        break;
                    } else {
                        $dias += 31;
                    }
                case 6:
                    if ($flag == 6) {
                        break;
                    } else {
                        $dias += 30;
                    }
                case 7:
                    if ($flag == 7) {
                        break;
                    } else {
                        $dias += 31;
                    }
                case 8:
                    if ($flag == 8) {
                        break;
                    } else {
                        $dias += 31;
                    }
                case 9:
                    if ($flag == 9) {
                        break;
                    } else {
                        $dias += 30;
                    }
                case 10:
                    if ($flag == 10) {
                        break;
                    } else {
                        $dias += 31;
                    }
                case 11:
                    if ($flag == 11) {
                        break;
                    } else {
                        $dias += 30;
                    }
                case 12:
                    if ($flag == 12) {
                        break;
                    } else {
                        $dias += 31;
                    }
            }
            $data1_splited[2] ++;
            $token = 1;
        }
        //Subtrai-se os dias a mais do mês da primeira data e soma-se os dias da segunda data.
        $dias += ($data2_splited[0] - $data1_splited[0]);
        return $dias;
    }

    /**
     * O mesmo do que a função ex07, mas com a utilização de objectos de php
     * 
     * @param string $data1 primeira data
     * @param string $data2 segunda data
     * @return string Dias de diferença
     */
    public function ex07_2($data1, $data2) {
        $data_ini = date_create_from_format('d/m/Y', $data1);
        $data_fim = date_create_from_format('d/m/Y', $data2);
        $val = date_diff($data_ini, $data_fim);
        return $val->days;
    }

    public function ex08($roman) {
        $code = array('I' => 1, 'V' => 5, 'X' => 10, 'L' => 50, 'C' => 100, 'D' => 500, 'M' => 1000);
        $val = 0;
        $ante = 1000;
        for ($i = 0; $i < strlen($roman); $i++) {
            $value = $code[$roman[$i]];
            if ($value > $ante) {
                $val -= (2 * $ante);
            }
            $val += $value;
            $ante = $value;
        }
        return $val;
    }

    /**
     * Deprecated (Imprime na própria função)
     * Ver "ex09_array"
     * 
     * @param type $word
     */
    public function ex09($word) {
        $frase = $word;
        echo "$frase<br>";
        for ($i = 1; $i < strlen($word); $i++) {
            $frase = $frase . " " . $word;
            echo "$frase<br>";
        }
    }

    /**
     * O mesmo do que a função ex09, só que devolve um array de strings.
     * 
     * @param string $word string a multiplicar
     * @return array array de strings
     */
    public function ex09_array($word) {
        $frase = $word;
        $array_str = array();
        $array_str[0] = $frase;
        for ($i = 1; $i < strlen($word); $i++) {
            $frase = $frase . " " . $word;
            $array_str[$i] = $frase;
        }
        return $array_str;
    }

}
