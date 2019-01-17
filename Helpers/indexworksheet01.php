<?php
include 'worksheet01.php';
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

  <title>Worksheet01!!</title>
</head>

<body>
  <p class="text-center h1">Worksheet01!!</p>

  <div class="container">
    <div class="row"  id="exe1Button">
      <div class="col-md-5 offset-md-3">

        <h3>Exercise 01!</h3>
        <h5>Numeros pares e ímpares!</h5>
        <form action="indexworksheet01.php#exe1Button" method="GET">
          <p>Insira valor minimo!</p>
          <input type="text" name="min" class="form-control" value="<?php echo isset($_GET['min'])?$_GET['min']:'' ?>"><br>
          <p>Insira valor máximo!</p>
          <input type="text" name="max" class="form-control" value="<?php echo isset($_GET['max'])?$_GET['max']:'' ?>"><br>
          <input type="submit" name="ex1" value="GO" class="btn btn-primary">
          <input type="reset" value="Limpar" class="btn btn-primary">

        </form>

        <?php
            if (isset($_GET['ex1'])) {
                //print_r($_GET);
                //echo '<br>';
                ex01($_GET['min'], $_GET['max']);
            }
         ?>

      </div>

    </div>

    <div class="row"  id="exe2Button">
      <div class="col-md-5 offset-md-3">
        <br><br>
        <h3>Exercise 02!</h3>
        <h5>Tabuada!</h5>
        <form action="indexworksheet01.php#exe2Button" method="GET">
          <p>Que tabuada deseja ver?</p>
          <input type="text" name="tabuada" class="form-control" value="<?php echo isset($_GET['tabuada'])?$_GET['tabuada']:'' ?>"><br>
          <input type="submit" name="ex2" value="GO" class="btn btn-primary">
          <input type="reset" value="Limpar" class="btn btn-primary">
        </form>

        <?php
        if (isset($_GET['ex2'])) {
            //print_r($_GET);
            //echo '<br>';
            ex02($_GET['tabuada']);
        }
        ?>
      </div>

    </div>


    <div class="row"  id="exe3Button">

      <div class="col-md-5 offset-md-3">
        <br><br>
        <h3>Exercise 03!</h3>
        <h5>Numeros primos!</h5>
        <form action="indexworksheet01.php#exe3Button" method="GET">
          <p>Insira valor minimo!</p>
          <input type="text" name="min1" class="form-control" value="<?php echo isset($_GET['min1'])?$_GET['min1']:'' ?>"><br>
          <p>Insira valor máximo!</p>
          <input type="text" name="max1" class="form-control" value="<?php echo isset($_GET['max1'])?$_GET['max1']:'' ?>"><br>
          <input type="submit" name="ex3" value="GO" class="btn btn-primary">
          <input type="reset" value="Limpar" class="btn btn-primary">
        </form>

        <?php
        if (isset($_GET['ex3'])) {
            //print_r($_GET);
            //echo '<br>';
            ex03($_GET['min1'], $_GET['max1']);
        }
        ?>

      </div>

    </div>



    <div class="row" id="exe4Button">
      <div class="col-md-5 offset-md-3">
        <br><br>
        <h3>Exercise 04!</h3>
        <h5>Capicua!</h5>
        <form action="indexworksheet01.php#exe4Button" method="GET">
          <p>Insira um número para ver a sua capicua!</p>
          <input type="text" name="capicua" class="form-control" value="<?php echo isset($_GET['capicua'])?$_GET['capicua']:'' ?>"><br>
          <input type="submit" name="ex4" value="GO" class="btn btn-primary">
          <input type="reset" value="Limpar" class="btn btn-primary">
        </form>

        <?php
        if (isset($_GET['ex4'])) {
            //print_r($_GET);
            //echo '<br>';
            ex04($_GET['capicua']);
        }
        ?>
      </div>

    </div>



    <div class="row" id="exe5Button">
      <div class="col-md-5 offset-md-3">
        <br><br>
        <h3>Exercise 05!</h3>
        <h5>Decimal em Binário!</h5>
        <form action="indexworksheet01.php#exe5Button" method="GET">
          <p>Coverte um número décimal em binário!</p>
          <input type="text" name="decibinario" class="form-control" value="<?php echo isset($_GET['decibinario'])?$_GET['decibinario']:'' ?>"><br>
          <input type="submit" name="ex5" value="GO" class="btn btn-primary">
          <input type="reset" value="Limpar" class="btn btn-primary">
        </form>

        <?php
        if (isset($_GET['ex5'])) {
            //print_r($_GET);
            //echo '<br>';
            ex05($_GET['decibinario']);
        }
        ?>
      </div>

    </div>



    <div class="row"  id="exe6Button">
      <div class="col-md-5 offset-md-3">
        <br><br>
        <h3>Exercise 06!</h3>
        <h5>Números e produtos!</h5>
        <form action="indexworksheet01.php#exe6Button" method="GET">
          <p>Imprime de 1 até o número que indicar e seu produto!</p>
          <input type="text" name="produto" class="form-control" value="<?php echo isset($_GET['produto'])?$_GET['produto']:'' ?>"><br>
          <input type="submit" name="ex6" value="GO" class="btn btn-primary">
          <input type="reset" value="Limpar" class="btn btn-primary">
        </form>

        <?php
        if (isset($_GET['ex6'])) {
            //print_r($_GET);
            //echo '<br>';
            ex06($_GET['produto']);
        }
        ?>
      </div>

    </div>



    <div class="row" id="exe7Button">
      <div class="col-md-5 offset-md-3">
        <br><br>
        <h3>Exercise 07!</h3>
        <h5>Máquina de trocos!</h5>
        <form action="indexworksheet01.php#exe7Button" method="GET">
          <p>Calcula o menor troco da quantia que introduzir!</p>
          <p>Notas-> €500, 200, 100, 50, 10, 5</p>
          <p>Moedas-> €2, 1, 0.50, 0.20, 0.10, 0.05, 0.02, 0.01</p>
          <input type="text" name="troco" class="form-control" value="<?php echo isset($_GET['troco'])?$_GET['troco']:'' ?>"><br>
          <input type="submit" name="ex7" value="GO" class="btn btn-primary">
          <input type="reset" value="Limpar" class="btn btn-primary">
        </form>

        <?php
        if (isset($_GET['ex7'])) {
            //print_r($_GET);
            //echo '<br>';
            ex07($_GET['troco']);
        }
        ?>
      </div>

    </div>



    <div class="row">

      <div class="col-md-5 offset-md-3">
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