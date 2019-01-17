<?php
include 'worksheet02.php';
?>

<!doctype html>
<html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
              crossorigin="anonymous">

        <title>Worksheet02!!</title>
    </head>

    <body>
        <p class="text-center h1">Worksheet02!!</p>

        <div class="container">

            <div class="row">

                <div class="col-md-4" style="background-color: gainsboro">
                    <h3>Exercise 01!</h3>
                    <h5>Imprime vetor de 20 elementos aleatórios!</h5>
                    <h5>Imprime a soma dos elementos positivos e quantidade de numeros negativos!</h5>
                    <form action="indexworksheet02.php" method="GET">
                        <input type="submit" name="ex1" value="GO" class="btn btn-primary">
                    </form>

                    <?php
                    if (isset($_GET['ex1'])) {
                        //print_r($_GET);
                        //echo '<br>';
                        $array = ex01();
                        if (is_array($array)) {
                            echo " Array ->";
                            for ($i = 0; $i < 20; $i++) {
                                echo " $array[$i]";
                            }
                        }
                    }
                    ?>
                </div>

                <div class="col-md-4">
                    <h3>Exercise 02!</h3>
                    <h5>Recebe 2 vetores aleatórios!</h5>
                    <h5>Imprime números comuns, não comuns e inexistentes!</h5>
                    <form action="indexworksheet02.php" method="GET">
                        <input type="submit" name="ex2" value="GO" class="btn btn-primary">
                    </form>

                    <?php
                    if (isset($_GET['ex2'])) {
                        //print_r($_GET);
                        //echo '<br>';
                        ex02();
                    }
                    ?>
                </div>

                <div class="col-md-4" style="background-color: gainsboro">
                    <h3>Exercise 03!</h3>
                    <h5>Recebe 1 argumento e gera uma tabela quadrada!</h5>
                    <form action="indexworksheet02.php" method="GET">
                        <input type="text" name="col" class="form-control" value="<?php echo isset($_GET['col']) ? $_GET['col'] : '' ?>"><br>
                        <input type="submit" name="ex3" value="GO" class="btn btn-primary">
                    </form>

                    <?php
                    if (isset($_GET['ex3'])) {
                        //print_r($_GET);
                        //echo '<br>';
                        ex03($_GET['col']);
                    }
                    ?>
                </div>

            </div>


            <hr/><hr/>


            <div class="row">

                <div class="col-md-4">
                    <h3>Exercise 04!</h3>
                    <h5>Recebe nº linhas, nº colunas e gera uma tabela!</h5>
                    <form action="indexworksheet02.php" method="GET">
                        <p>Linhas!</p>
                        <input type="text" name="linhas" class="form-control" value="<?php echo isset($_GET['linhas']) ? $_GET['linhas'] : '' ?>"><br>
                        <p>Colunas!</p>
                        <input type="text" name="colunas" class="form-control" value="<?php echo isset($_GET['colunas']) ? $_GET['colunas'] : '' ?>"><br>
                        <input type="submit" name="ex4" value="GO" class="btn btn-primary">
                    </form>

                    <?php
                    if (isset($_GET['ex4'])) {
                        //print_r($_GET);
                        //echo '<br>';
                        ex03($_GET['linhas'], $_GET['colunas']);
                    }
                    ?>
                </div>

                <div class="col-md-4" style="background-color: gainsboro">
                    <h3>Exercise 05!</h3>
                    <h5>Chave do Euromilhões!</h5>
                    <form action="indexworksheet02.php" method="GET">
                        <input type="submit" name="ex5" value="GO" class="btn btn-primary">
                    </form>

                    <?php
                    if (isset($_GET['ex5'])) {
                        //print_r($_GET);
                        //echo '<br>';
                        $array = ex05();
                        echo "Chave Euromilhões:<br>";
                        echo "Números-> ";
                        foreach ($array[0] as $value) {
                            echo "$value ";
                        }
                        echo "<br>Estrelas-> ";
                        foreach ($array[1] as $value) {
                            echo "$value ";
                        }
                    }
                    ?>
                </div>

                <div class="col-md-4">
                    <h3>Exercise 06!</h3>
                    <h5>Gera chave do Euromilhões, gera chave do sorteio e valida os números acertados!</h5>
                    <form action="indexworksheet02.php" method="GET">
                        <input type="submit" name="ex6" value="GO" class="btn btn-primary">
                    </form>

                    <?php
                    if (isset($_GET['ex6'])) {
                        //print_r($_GET);
                        //echo '<br>';
                        $array = ex06();
                        echo "Chave Euromilhões:<br>";
                        echo "Números-> ";
                        foreach ($array[0][0] as $value) {
                            echo "$value ";
                        }
                        echo "<br>Estrelas-> ";
                        foreach ($array[0][1] as $value) {
                            echo "$value ";
                        }
                        echo "<br>Sorteio Euromilhões:<br>";
                        echo "Números-> ";
                        foreach ($array[1][0] as $value) {
                            echo "$value ";
                        }
                        echo "<br>Estrelas-> ";
                        foreach ($array[1][1] as $value) {
                            echo "$value ";
                        }
                        echo "<br>Números acertados:<br>";
                        echo "Números-> ";
                        foreach ($array[2][0] as $value) {
                            echo "$value ";
                        }
                        echo "<br>Estrelas-> ";
                        foreach ($array[2][1] as $value) {
                            echo "$value ";
                        }
                    }
                    ?>
                </div>

            </div>

            <hr/><hr/>

            <div class="row">

                <div class="col-md-4" style="background-color: gainsboro">
                    <h3>Exercise 07!</h3>
                    <h5>Realiza as operações com matrizes!</h5>
                    <p>Utilize a <i>Matriz 1</i> para realizar a transposta</p>

                    <form action="indexworksheet02.php" method="GET">
                        <div class="row">
                            <div class="col-md-6">
                                <p class="text-center">MATRIZ 1</p>
                                <p>Linhas:</p>
                                <input type="text" name="li1" class="form-control" value="<?php echo isset($_GET['li1']) ? $_GET['li1'] : '' ?>"><br>
                                <p>Colunas:</p>
                                <input type="text" name="col1" class="form-control" value="<?php echo isset($_GET['col1']) ? $_GET['col1'] : '' ?>"><br>
                            </div>
                            <div class="col-md-6">
                                <p class="text-center">MATRIZ 2</p>
                                <p>Linhas:</p>
                                <input type="text" name="li2" class="form-control" value="<?php echo isset($_GET['li2']) ? $_GET['li2'] : '' ?>"><br>
                                <p>Colunas:</p>
                                <input type="text" name="col2" class="form-control" value="<?php echo isset($_GET['col2']) ? $_GET['col2'] : '' ?>"><br>
                            </div>
                        </div>

                        <input type="submit" name="ex7prod" value="PRODUTO" class="btn btn-primary">
                        <input type="submit" name="ex7soma" value="SOMA" class="btn btn-primary">
                        <input type="submit" name="ex7trans" value="TRANSPOSIÇÃO" class="btn btn-primary">
                    </form>

                    <?php
                    if (isset($_GET['ex7prod'])) {
                        //print_r($_GET);
                        //echo '<br>';
                        $array = produto_matrizes($_GET['li1'], $_GET['col1'], $_GET['li2'], $_GET['col2']);
                        echo "Matriz 1:<br>";
                        print_matrix($array[0]);
                        echo "Matriz 2:<br>";
                        print_matrix($array[1]);
                        echo "Matriz Produto:<br>";
                        print_matrix($array[2]);
                    } elseif (isset($_GET['ex7soma'])) {
                        //print_r($_GET);
                        //echo '<br>';
                        $array = soma_matrizes($_GET['li1'], $_GET['col1'], $_GET['li2'], $_GET['col2']);
                        echo "Matriz 1:<br>";
                        print_matrix($array[0]);
                        echo "Matriz 2:<br>";
                        print_matrix($array[1]);
                        echo "Matriz Soma:<br>";
                        print_matrix($array[2]);
                    } elseif (isset($_GET['ex7trans'])) {
                        //print_r($_GET);
                        //echo '<br>';
                        $array = matriz_transposta($_GET['li1'], $_GET['col1']);
                        echo "Matriz:<br>";
                        print_matrix($array[0]);
                        echo "Transposta:<br>";
                        print_matrix($array[1]);
                    }
                    ?>
                </div>

                <div class="col-md-4">
                    <h3>Exercise 08!</h3>
                    <h5>Factorial de um número!</h5>
                    <form action="indexworksheet02.php" method="GET">
                        <input type="text" name="factorial" class="form-control" value="<?php echo isset($_GET['factorial']) ? $_GET['factorial'] : '' ?>"><br>
                        <input type="submit" name="ex8" value="ITERATIVA" class="btn btn-primary">
                        <input type="submit" name="ex8rec" value="RECURSIVA" class="btn btn-primary">
                    </form>

                    <?php
                    if (isset($_GET['ex8'])) {
                        //print_r($_GET);
                        //echo '<br>';
                        $num = ex08($_GET['factorial']);
                        echo "O Factorial de ".$_GET['factorial']." é $num - Versão Iterativa";
                    } elseif (isset($_GET['ex8rec'])) {
                        //print_r($_GET);
                        //echo '<br>';
                        $num = ex08_rec($_GET['factorial']);
                        echo "O Factorial de ".$_GET['factorial']." é $num - Versão Recursiva";
                    }
                    ?>
                </div>
                
                <div class="col-md-4" style="background-color: gainsboro">
                    <h3>Exercise 09!</h3>
                    <h5>Lê 2 vetores e junta-os, eliminando números repetidos!</h5>
                    <form action="indexworksheet02.php" method="GET">
                        <input type="submit" name="ex9" value="GO" class="btn btn-primary">
                    </form>

                    <?php
                    if (isset($_GET['ex9'])) {
                        //print_r($_GET);
                        //echo '<br>';
                        $array = ex09();
                        echo "Vector 1:<br>";
                        foreach ($array[0] as $value) {
                            echo "$value ";
                        }
                        echo "<br>Vector 2:<br>";
                        foreach ($array[1] as $value) {
                            echo "$value ";
                        }
                        echo "<br>Fusão:<br>";
                        foreach ($array[2] as $value) {
                            echo "$value ";
                        }
                    }
                    ?>
                </div>

            </div>

            <hr/><hr/>

            
            <div class="row">
                
                <div class="col-md-4">
                    <h3>Exercise 10!</h3>
                    <h5>Cálculo da potência de um número!</h5>
                    <form action="indexworksheet02.php" method="GET">
                        <p>Base</p>
                        <input type="text" name="base" class="form-control" value="<?php echo isset($_GET['base']) ? $_GET['base'] : '' ?>"><br>
                        <p>Expoente</p>
                        <input type="text" name="expoente" class="form-control" value="<?php echo isset($_GET['expoente']) ? $_GET['expoente'] : '' ?>"><br>
                        <input type="submit" name="ex10" value="ITERATIVA" class="btn btn-primary">
                        <input type="submit" name="ex10rec" value="RECURSIVA" class="btn btn-primary">
                    </form>

                    <?php
                    if (isset($_GET['ex10'])) {
                        //print_r($_GET);
                        //echo '<br>';
                        $res = ex10($_GET['base'], $_GET['expoente']);
                        echo $_GET['base']."<sup>".$_GET['expoente']."</sup> = $res - Versão Iterativa";
                    } elseif (isset($_GET['ex10rec'])) {
                        //print_r($_GET);
                        //echo '<br>';
                        $res = ex10_rec($_GET['base'], $_GET['expoente']);
                        echo $_GET['base']."<sup>".$_GET['expoente']."</sup> = $res - Versão Recursiva";
                    }
                    ?>
                </div>
                
                <div class="col-md-4">
                    <h3>Exercise 11!</h3>
                    <h5>Soma da diagonal principal de uma matriz quadrada!</h5>
                    <form action="indexworksheet02.php" method="GET">
                        <p>Linhas / Colunas</p>
                        <input type="text" name="licol" class="form-control" value="<?php echo isset($_GET['licol']) ? $_GET['licol'] : '' ?>"><br>
                        <input type="submit" name="ex11" value="GO" class="btn btn-primary">
                    </form>

                    <?php
                    if (isset($_GET['ex11'])) {
                        //print_r($_GET);
                        //echo '<br>';
                        $array = ex11($_GET['licol']);
                        echo "Matriz:";
                        print_matrix($array[0]);
                        echo "Soma da diagonal -> $array[1]<br>";
                    }
                    ?>
                </div>
                
                
                
                
                
                
                
                
            </div>
            
            <hr/><hr/>



            
            
            


            <div class="row">
                <div class="col">

                <!-- <p>Another row!!</p> -->

                </div>
            </div>




        </div>





        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
    </body>

</html>