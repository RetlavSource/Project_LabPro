<?php
session_start();
?>

<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <title>Work 1!</title>
    </head>

    <body style="background-color: lightcyan">
        <p class="text-center h1">Register!</p>
        <div class="container">

            <div class="row">

                <div class="col-md-4 offset-md-4" style="background-color: lightblue">
                    <form action="work01.php" method="POST">
                        <p>Name:</p>
                        <input type="text" name="name" class="form-control" value="<?php echo isset($_POST['name']) ? $_POST['name'] : '' ?>"><br>
                        <p>Email:</p>
                        <input type="email" name="mail" class="form-control" value="<?php echo isset($_POST['mail']) ? $_POST['mail'] : '' ?>"><br>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="M" checked>
                            <label class="form-check-label" for="inlineRadio1">M</label>
                        </div>
                        <div class="form-check form-check-inline p-4">
                            <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="F">
                            <label class="form-check-label" for="inlineRadio2">F</label>
                        </div>

                        <br>

                        Birthday Year:
                        <div class="form-check-inline p-3">
                            <select name="year">
                                <?php
                                $years = range(1920, (int) date("Y"));
                                foreach ($years as $value) {
                                    echo "<option value = \"$value\">$value</option>";
                                }
                                //<option value = "1980">1980</option>
                                //<option value = "2018">2018</option>
                                ?>
                            </select>
                        </div>

                        <p>Password:</p>
                        <input type="password" name="pass" class="form-control" value=""><br>

                        <br>

                        <input type="submit" name="go" value="REGISTER" class="btn btn-primary">
                        <input type="submit" name="size" value="DB Size" class="btn btn-primary">
                    </form>

                    <?php
                    if (isset($_POST['go'])) {

                        try {
                            //PDO MySQL
                            //$sorteio_db = new PDO('mysql:host=localhost;dbname=sorteio', "root", "root");
                            //PDO PostgreSQL - Constructs the string if the host changes (from Vagrant to php server and vice-versa)
                            $host_append = "pgsql:host=" . $_SERVER['REMOTE_ADDR'] . ";port=5432;dbname=sorteio";
                            $sorteio_db = new PDO($host_append, "myuser", "class");
                            //echo "PDO connection object created";
                        } catch (PDOException $e) {
                            echo "PDO CONNECTION ERROR -> " . $e->getMessage();
                        }


                        $db_dump = $sorteio_db->prepare('INSERT INTO registo (password, name, birthday, sex, email, modify, erase) VALUES (? ,? ,? ,? ,? ,? ,? )');
                        $search_data = array();
                        $search_data[0] = crypt($_POST['pass'], '$6$rounds=2222$valtersecurity79$');
                        $search_data[1] = $_POST['name'];
                        $search_data[2] = $_POST['year'];
                        $search_data[3] = $_POST['gender'];
                        $search_data[4] = $_POST['mail'];
                        $search_data[5] = 1;
                        $search_data[6] = 1;

                        //echo '<br>';
                        //print_r($_POST);
                        //echo '<br>';
                        //print_r($search_data);
                        //echo '<br>';

                        if ($db_dump->execute($search_data)) {
                            echo "<br>Data insert: CORRECT!!<br>";
                        } else {
                            echo "<br>Data insert: FAILLURE!!<br>";
                        }

                        //echo '<br>Hash pass with salt parameter ($6$rounds=2222$valtersecurity79$):<br>';
                        //echo crypt($_POST['pass'], '$6$rounds=2222$valtersecurity79$');
                        //echo '<br>Hash pass with password_hash and PASSWORD_DEFAULT:<br>';
                        //echo password_hash($_POST['pass'], PASSWORD_DEFAULT);
                        //echo "<br>Testing -- PASSED!";
                    }

                    if (isset($_POST['size'])) {
                        try {
                            $host_append = "pgsql:host=" . $_SERVER['REMOTE_ADDR'] . ";port=5432;dbname=sorteio";
                            $sorteio_db = new PDO($host_append, "myuser", "class");
                            //echo "PDO connection object created";
                        } catch (PDOException $e) {
                            echo "PDO CONNECTION ERROR -> " . $e->getMessage();
                        }
                        $db_dump = $sorteio_db->prepare('SELECT * from registo');
                        $db_dump->execute();
                        echo "There are " . $db_dump->rowCount() . " entries in database!";
                    }
                    ?>
                </div>



            </div>

        </div>





        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>