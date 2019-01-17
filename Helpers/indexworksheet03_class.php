<?php
session_start();
include 'worksheet03_class.php';
?>

<!doctype html>
<html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
              integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
              crossorigin="anonymous">

        <title>Worksheet03!!</title>
    </head>

    <body>
        <p class="text-center h1">Worksheet03!!</p>

        <?php
        // ---------- COOKIES ----------
        //Counts the times the page is visited in each 15 secounds, using a COOKIE!!
        if (!isset($_COOKIE["nome"])) {
            $count = 1;
            setcookie("nome", $count, time() + 15);
            echo '<p class="text-center">--COOKIE-- Visited the first time in 15 secounds!</p>';
        } else {
            $count = ++$_COOKIE["nome"];
            setcookie("nome", $count, time() + 15);
            echo '<p class="text-center">--COOKIE-- Visited ' . $_COOKIE["nome"] . ' times in 15 secounds!</p>';
        }

        // ---------- SESSIONS ----------
        //Counts the times the page is visited in each 15 secounds, using a SESSIONS!!
        if (!isset($_SESSION["count"])) {
            $_SESSION["start_time"] = time();
            $_SESSION["count"] = 1;
            echo '<p class="text-center">--SESSION-- Visited the first time!</p>';
        } else {
            // Destroy the session, after 15 secounds of inactivity
            if ($_SESSION["start_time"] < (time() - 15)) {
                session_destroy();
                //header('Location: http://app.test/');
                echo '<p class="text-center">--SESSION FINISHED-- Session finished ... Please login again !!!!</p>';
            } else {
                $_SESSION["start_time"] = time();
                $_SESSION["count"] ++;
                echo '<p class="text-center">--SESSION-- Visited ' . $_SESSION["count"] . ' times!</p>';
            }
        }
        ?>;

        <div class="container">

            <div class="row">

                <div class="col-md-6" style="background-color: gainsboro">
                    <h3>Exercise 01!</h3>
                    <h5>Insira uma frase!</h5>
                    <h5>Parte a frase pelos espaços e coloca tudo em maiúsculas!</h5>
                    <form action="indexworksheet03_class.php" method="GET">
                        <input type="text" name="str1" class="form-control"
                               value="<?php echo isset($_GET['str1']) ? $_GET['str1'] : '' ?>"><br>
                        <input type="submit" name="ex1" value="GO" class="btn btn-primary">
                    </form>

                    <?php
                    if (isset($_GET['ex1'])) {

                        //print_r($_GET);
                        //echo '<br>';
                        $exercise01 = new Worksheet03();
                        $array = $exercise01->ex01($_GET['str1']);
                        echo "Frase  original -> " . $_GET['str1'] . " <br/>";
                        echo "Palavras: <br/>";
                        foreach ($array as $value) {
                            echo "$value<br>";
                        }
                    }
                    ?>
                </div>

                <div class="col-md-6">
                    <h3>Exercise 02!</h3>
                    <h5>Recebe frase e substitui palavras!</h5>
                    <form action="indexworksheet03_class.php" method="GET">
                        <p>Frase:</p>
                        <input type="text" name="frase" class="form-control"
                               value="<?php echo isset($_GET['frase']) ? $_GET['frase'] : '' ?>"><br>
                        <p>Substituir:</p>
                        <input type="text" name="sub" class="form-control"
                               value="<?php echo isset($_GET['sub']) ? $_GET['sub'] : '' ?>"><br>
                        <p>Por:</p>
                        <input type="text" name="por" class="form-control"
                               value="<?php echo isset($_GET['por']) ? $_GET['por'] : '' ?>"><br>
                        <input type="submit" name="ex2" value="GO" class="btn btn-primary">
                    </form>

                    <?php
                    if (isset($_GET['ex2'])) {
                        //print_r($_GET);
                        //echo '<br>';
                        $exercise02 = new Worksheet03();
                        $string = $exercise02->ex02($_GET['frase'], $_GET['sub'], $_GET['por']);
                        echo "$string";
                    }
                    ?>
                </div>

            </div>

            <hr/>
            <hr/>

            <div class="row">

                <div class="col-md-6">
                    <h3>Exercise 03!</h3>
                    <h5>Insira uma frase cifrada/para cifrar segundo a Cifra de César e seu deslocamento!</h5>
                    <form action="indexworksheet03_class.php" method="GET">
                        <p>Frase / Frase Cifrada:</p>
                        <input type="text" name="cif" class="form-control"
                               value="<?php echo isset($_GET['cif']) ? $_GET['cif'] : '' ?>"><br>
                        <p>Deslocamento:</p>
                        <input type="text" name="des" class="form-control"
                               value="<?php echo isset($_GET['des']) ? $_GET['des'] : '' ?>"><br>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="option" id="inlineRadio1" value="1"
                            <?php
                            if (isset($_GET['ex3'])) {
                                if ($_GET['option'] == 1) {
                                    echo "checked";
                                }
                            } else {
                                echo "checked";
                            }
                            ?>
                                   >
                            <label class="form-check-label" for="inlineRadio1">Decode</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="option" id="inlineRadio2" value="0"
                            <?php
                            if (isset($_GET['ex3'])) {
                                if ($_GET['option'] == 0) {
                                    echo "checked";
                                }
                            }
                            ?>
                                   >
                            <label class="form-check-label" for="inlineRadio2">Encode</label>
                        </div>
                        <input type="submit" name="ex3" value="GO" class="btn btn-primary">
                    </form>

                    <?php
                    if (isset($_GET['ex3'])) {
                        //print_r($_GET);
                        //echo '<br>';
                        $exercise03 = new Worksheet03();
                        if ($_GET['option'] == 0) {
                            echo "Frase Original:<br>" . $_GET['cif'] . "<br>";
                            $str = $exercise03->ex03_enc($_GET['cif'], $_GET['des']);
                            echo "Frase Codificada:<br>$str<br>";
                        } else {
                            echo "Frase Codificada:<br>" . $_GET['cif'] . "<br>";
                            $str = $exercise03->ex03_dec($_GET['cif'], $_GET['des']);
                            echo "Frase Descodificada:<br>$str<br>";
                        }
                    }
                    ?>
                </div>

                <div class="col-md-6" style="background-color: gainsboro">
                    <h3>Exercise 04!</h3>
                    <h5>Converte o nome de uma pessoa de "formato normal" para "formato compacto"!</h5>
                    <form action="indexworksheet03_class.php" method="GET">
                        <input type="text" name="nome" class="form-control"
                               value="<?php echo isset($_GET['nome']) ? $_GET['nome'] : '' ?>"><br>
                        <input type="submit" name="ex4" value="GO" class="btn btn-primary">
                    </form>

                    <?php
                    if (isset($_GET['ex4'])) {

                        //print_r($_GET);
                        //echo '<br>';
                        $exercise04 = new Worksheet03();
                        $values = $exercise04->ex04($_GET['nome']);
                        $array_nome = $values[0];
                        $size = $values[1];
                        echo $array_nome[$size - 1] . ", ";
                        for ($i = 0; $i < ($size - 1); $i++) {
                            echo $array_nome[$i][0] . ". ";
                        }
                    }
                    ?>
                </div>

            </div>

            <hr/>
            <hr/>

            <div class="row">

                <div class="col-md-6" style="background-color: gainsboro">
                    <h3>Exercise 05!</h3>
                    <h5>Verifica se uma data é correcta no formato DD/MM/AAAA!</h5>
                    <form action="indexworksheet03_class.php" method="GET">
                        <input type="text" name="data" class="form-control"
                               value="<?php echo isset($_GET['data']) ? $_GET['data'] : '' ?>"><br>
                        <input type="submit" name="ex5" value="GO" class="btn btn-primary">
                    </form>

                    <?php
                    if (isset($_GET['ex5'])) {

                        //print_r($_GET);
                        //echo '<br>';
                        $exercise05 = new Worksheet03();
                        echo ($exercise05->ex05($_GET['data'])) ? "Data CORRECT!" : "Data NOT CORRECT!";
                    }
                    ?>
                </div>

                <div class="col-md-6">
                    <h3>Exercise 06!</h3>
                    <h5>Dada uma data no formato DD/MM/AAAA, calcula o dia seguinte!</h5>
                    <form action="indexworksheet03_class.php" method="GET">
                        <input type="text" name="data1" class="form-control"
                               value="<?php echo isset($_GET['data1']) ? $_GET['data1'] : '' ?>"><br>
                        <input type="submit" name="ex6" value="GO" class="btn btn-primary">
                    </form>

                    <?php
                    if (isset($_GET['ex6'])) {

                        //print_r($_GET);
                        //echo '<br>';
                        echo "Data de hoje: " . $_GET['data1'] . " <br>";
                        $exercise06 = new Worksheet03();
                        $str = $exercise06->ex06($_GET['data1']);
                        if ($str) {
                            echo "O dia seguinte é: $str<br>";
                        }
                    }
                    ?>
                </div>

            </div>

            <hr/>
            <hr/>

            <div class="row">

                <div class="col-md-6">
                    <h3>Exercise 07!</h3>
                    <h5>Numero de dias entre 2 datas (no formato DD/MM/AAAA)!</h5>
                    <form action="indexworksheet03_class.php" method="GET">
                        <p>Primeira data:</p>
                        <input type="text" name="data_first" class="form-control"
                               value="<?php echo isset($_GET['data_first']) ? $_GET['data_first'] : '' ?>"><br>
                        <p>Segunda data:</p>
                        <input type="text" name="data_second" class="form-control"
                               value="<?php echo isset($_GET['data_second']) ? $_GET['data_second'] : '' ?>"><br>
                        <input type="submit" name="ex7" value="GO" class="btn btn-primary">
                    </form>

                    <?php
                    if (isset($_GET['ex7'])) {

                        //print_r($_GET);
                        //echo '<br>';
                        echo "Primeira data: " . $_GET['data_first'] . " <br>";
                        echo "Segunda data: " . $_GET['data_second'] . " <br>";
                        $exercise07 = new Worksheet03();
                        $num = $exercise07->ex07($_GET['data_first'], $_GET['data_second']);
                        //$num = $exercise07->ex07_2($_GET['data_first'], $_GET['data_second']);
                        if ($num !== FALSE) {
                            echo "Numero de dias entre as datas: $num dias<br>";
                        }
                    }
                    ?>
                </div>

                <div class="col-md-6" style="background-color: gainsboro">
                    <h3>Exercise 08!</h3>
                    <h5>Converte numeração romana para decimal!</h5>
                    <form action="indexworksheet03_class.php" method="GET">
                        <input type="text" name="roman" class="form-control"
                               value="<?php echo isset($_GET['roman']) ? $_GET['roman'] : '' ?>"><br>
                        <input type="submit" name="ex8" value="GO" class="btn btn-primary">
                    </form>

                    <?php
                    if (isset($_GET['ex8'])) {
                        //print_r($_GET);
                        //echo '<br>';
                        echo "Numeração romana: " . $_GET['roman'] . " <br>";
                        $exercise08 = new Worksheet03();
                        $decimal = $exercise08->ex08($_GET['roman']);
                        echo "Decimal: $decimal <br>";
                    }
                    ?>
                </div>

            </div>

            <hr/>
            <hr/>

            <div class="row">

                <div class="col-md-6" style="background-color: gainsboro">
                    <h3>Exercise 09!</h3>
                    <h5>Dado um numero de caracteres numa palavra, vai imprimi-la multiplas vezes!</h5>
                    <form action="indexworksheet03_class.php" method="GET">
                        <p>Palavra:</p>
                        <input type="text" name="word" class="form-control"
                               value="<?php echo isset($_GET['word']) ? $_GET['word'] : '' ?>"><br>
                        <input type="submit" name="ex9" value="GO" class="btn btn-primary">
                    </form>

                    <?php
                    if (isset($_GET['ex9'])) {

                        //print_r($_GET);
                        //echo '<br>';
                        //ex09($_GET['word']);
                        $exercise09 = new Worksheet03();
                        $array_str = $exercise09->ex09_array($_GET['word']);
                        foreach ($array_str as $value) {
                            echo "$value<br>";
                        }
                    }
                    ?>
                </div>

            </div>

            <hr/>
            <hr/>


            <div class="row">
                <div class="col">

                    <!-- <p>Another row!!</p> -->

                </div>
            </div>


        </div>


        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
                integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
                integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
                integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
    </body>

</html>