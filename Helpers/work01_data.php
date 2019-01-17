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
        <p class="text-center h1">DATABASE ENTRIES!</p>
        <div class="container">

            <div class="row">

                <!--<div class="col-md-10 offset-md-1 table-responsive" style="background-color: lightblue">-->
                <div class="table-responsive" style="background-color: lightblue">

                    <?php
                    try {
                        $host_append = "pgsql:host=" . $_SERVER['REMOTE_ADDR'] . ";port=5432;dbname=sorteio";
                        $sorteio_db = new PDO($host_append, "myuser", "class");
                        //echo "PDO connection object created";
                    } catch (PDOException $e) {
                        echo "PDO CONNECTION ERROR -> " . $e->getMessage();
                    }
                    $db_dump = $sorteio_db->prepare('SELECT * from registo ORDER BY name ASC');
                    $db_dump->execute();
                    echo '<br>';
                    echo '<table class="table table-bordered table-striped">';
                    echo '<thead><tr>';
                    echo '<th scope = "col">ID</th>';
                    echo '<th scope = "col">Password</th>';
                    echo '<th scope = "col">Name</th>';
                    echo '<th scope = "col">Birthday</th>';
                    echo '<th scope = "col">Sex</th>';
                    echo '<th scope = "col">Email</th>';
                    echo '<th scope = "col">Modify</th>';
                    echo '<th scope = "col">Erase</th>';
                    echo '</tr></thead>';
                    echo '<tbody>';
                    while ($row = $db_dump->fetch(PDO::FETCH_ASSOC)) {
                        echo '<tr>';

                        echo '<td class="text-center">' . $row['id'] . '</td>';
                        echo '<td class="text-center">' . $row['password'] . '</td>';
                        echo '<td class="text-center">' . $row['name'] . '</td>';
                        echo '<td class="text-center">' . $row['birthday'] . '</td>';
                        if ($row['sex'] == 'M') {
                            echo '<td class="text-center">Male</td>';
                        } else {
                            echo '<td class="text-center">Female</td>';
                        }
                        echo '<td class="text-center">' . $row['email'] . '</td>';
                        if ($row['modify'] == 1) {
                            echo '<td class="text-center"><a href="">Edit</a></td>';
                        } else {
                            echo '<td class="text-center">Edit</td>';
                        }
                        if ($row['erase'] == 1) {
                            echo '<td class="text-center"><a href="">DELETE</a></td>';
                        } else {
                            echo '<td class="text-center">DELETE</td>';
                        }

                        echo '</tr>';
                    }
                    echo '</tbody></table>';
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