<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>operadores</title>
</head>

<body>
    <header>
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="index.php">inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="operadores.php">operadores</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="variaveis.php">variaveis</a>
            </li>
        </ul>
    </header>
    <div class="container text">
        <h2>Operadores do PHP</h2>
        <p>
            Bem vindo a explicacao sobre oque sao os operadores.
            Os operadores existem nao so no PHP mais tambem e encontrado em outras linguagens
            Os operadores sao usados no codigo para que voce possa <code>Concatenar</code>, <code>Somar</code>, <code>Divider</code> ou ate mesmo descobrir o resto de uma <code>Divisao</code>.
            Ai abaixo vao alguns exemplos.
        </p>
    </div>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card" style="width: 20rem;">
                    <div class="card-body">
                        <h5 class="card-title">Operador de Soma</h5>
                        <p class="card-text">
                        <ul>
                            <?php

                            $a = 5;
                            $b = 3;
                            $s = $a + $b;
                            echo 'A soma entre ' . $a . ' e ' . $b . ' e igual a : ' . $s;

                            ?>
                        </ul>
                        </p>
                        <a href="./operadores/soma.php" class="btn btn-primary">Veja o Codigo</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 20rem;">
                    <div class="card-body">
                        <h5 class="card-title">Operador de Divisao</h5>
                        <p class="card-text">
                        <ul>
                            <?php

                            $c = 10;
                            $d = 2;
                            $so = $c / $d;
                            echo 'A divisao de ' . $c . ' por ' . $d . ' e = ' . $so;

                            ?>
                        </ul>
                        </p>
                        <a href="./operadores/divisao.php" class="btn btn-primary">Veja o Codigo</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 20rem;">
                    <div class="card-body">
                        <h5 class="card-title">Operador de Multiplicacao</h5>
                        <p class="card-text">
                        <ul>
                            <?php

                            $e = 2;
                            $f = 7;
                            $con = $e * $f;
                            echo 'A multiplicacao de ' . $e . ' e ' . $f . ' e = ' . $con;

                            ?>
                        </ul>
                        </p>
                        <a href="./operadores/multiplicacao.php" class="btn btn-primary">Veja o Codigo</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card" style="width: 20rem;">
                    <div class="card-body">
                        <h5 class="card-title">Operador de Subtracao</h5>
                        <p class="card-text">
                        <ul>
                            <?php

                            $a = 5;
                            $b = 3;
                            $s = $a - $b;
                            echo 'A subtracao entre ' . $a . ' e ' . $b . ' e igual a : ' . $s;

                            ?>
                        </ul>
                        </p>
                        <a href="./operadores/subtracao.php" class="btn btn-primary">Veja o Codigo</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 20rem;">
                    <div class="card-body">
                        <h5 class="card-title">Operador de Resto</h5>
                        <p class="card-text">
                        <ul>
                            <?php

                            $c = 10;
                            $d = 2;
                            $so = $c % $d;
                            echo 'O modulo de ' . $c . ' por ' . $d . ' e = ' . $so ;

                            ?>
                        </ul>
                        </p>
                        <a href="./operadores/modulo.php" class="btn btn-primary">Veja o Codigo</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 20rem;">
                    <div class="card-body">
                        <h5 class="card-title">Operador de Exponenciacao</h5>
                        <p class="card-text">
                        <ul>
                            <?php

                            $e = 2;
                            $f = 7;
                            $con = $e ** $f;
                            echo 'O exponencial de ' . $e . ' e ' . $f . ' e = ' . $con;

                            ?>
                        </ul>
                        </p>
                        <a href="./operadores/exponente.php" class="btn btn-primary">Veja o Codigo</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col">

            </div>
            <div class="col">
                <div class="card" style="width: 20rem;">
                    <div class="card-body">
                        <h5 class="card-title">Operador de Boolean</h5>
                        <p class="card-text">
                        <ul>
                            <?php

                            $g = 8;
                            if ($g <= 8) {
                                echo 'verdadeiro' ;
                            } else {
                                echo 'false' ;
                            }

                            ?>
                        </ul>
                        </p>
                        <a href="./operadores/boolean.php" class="btn btn-primary">Veja o Codigo</a>
                    </div>
                </div>
            </div>
            <div class="col">

            </div>
        </div>
    </div>




</body>

</html>