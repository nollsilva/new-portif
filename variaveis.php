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
    <title>variaveis</title>
</head>

<body>
    <header>
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="index.php">inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="operadores.php">operadores</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="variaveis.php">variaveis</a>
            </li>
        </ul>
    </header>
    <div class="geral">
        <div class="container text">
            <h2>Operadores de distincao de types</h2>
            <p>
                esses sao exemplos de variaveis no php.
                se voce ja vem de outra linguagem de programacao possivelmente percebeu que as variaveis nao sofrem muita mudanca de uma linguagem pra outra.
                nesse exemplo a seguir vemos alguns exemplos de types .
                entre eles <code>int</code>, ,<code>float</code>, <code>string</code>, <code>bool</code>.
            </p>
        </div>
        <div class="card text-center" style="width: 80%;">
            <div class="card-header">
                Exemplo de variaveis Types
            </div>
            <div class="card-body">

                <div class="container">
                    <div class="row">
                        <div class="col">
                            <pre>
                        $a_float = "1.5";
                        $a_int = 22;
                        $a_string = 'noll';
                        $a_bool = 'true';
                        $b = 'joao';
                        $a = 'lucas';
                        d=5;
                        $c=3;</pre>
                        </div>
                        <div class="col">
                            <pre>
                        echo $a_float ;
                        echo $a_int ;
                        echo $a_str ;
                        echo $a_bool ;
                        echo "$b, $a" ;
                        function soma(){
                        $GLOBALS['d'] = $GLOBALS['d'] + $GLOBALS['c'];
                        }
                        soma();
                        echo $d;</pre>
                        </div>
                    </div>

                </div>


                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                Este e o resultado do codigo acima
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p> <?php
                                    $a_float = "1.5";
                                    $a_int = 22;
                                    $a_str = 'noll';
                                    $a_bool = 'true';
                                    $b = 'joao';
                                    $a = 'lucas';
                                    $d = 5;
                                    $c = 3;


                                    echo $a_float . "<br>";
                                    echo $a_int . "<br>";
                                    echo $a_str . "<br>";
                                    echo $a_bool . "<br>";
                                    echo "$b, $a" . "<br>";
                                    function soma()
                                    {

                                        $GLOBALS['d'] = $GLOBALS['d'] + $GLOBALS['c'];
                                    }
                                    soma();
                                    echo $d;
                                    ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-muted">
                    2 days ago
                </div>
            </div>
        </div>
        <h2>Operadores de Comparação</h2>
        <div class="card text-center" style="width: 80%;">
            <div class="card-header">
                <ul class="nav nav-pills card-header-pills">
                    <li class="nav-item">
                        <a class="nav-link active">Igual</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">Identico</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">Diferent</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">Nao identico</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">Maior que</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">Maior e igual</a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <p class="card-text">
                <pre>

                            $idade = '26';
                                if ($idade == 26){
                                    echo 'verdadeiro';
                    } else {
                                echo 'false';
                }

                </pre>

                </p>
                <p>Esse e um exemplo de boolean. <br>
                    Onde deve retornar uma resposta <code>Verdadeira</code> ou <code>Falsa</code>.<br>
                    Nesse caso o resultado sera <code>Verdadeiro</code> pos a igualdade nao liga se o Type e <code>Int</code> ou <code>String</code>.
                </p>

            </div>
            <div class="card-footer text-muted">
                2 days ago
            </div>
        </div>

        <div class="card text-center" style="width: 80%;">
            <div class="card-header">
                <ul class="nav nav-pills card-header-pills">
                    <li class="nav-item">
                        <a class="nav-link">Igual</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active">Identico</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">Diferent</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">Nao identico</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">Maior que</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">Maior e igual</a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <p class="card-text">
                <pre>

                            $idade = '26';
                            if($idade ===26){
                                echo 'verdadeiro';
                        } else {
                                echo 'false';
                }
                    </pre>
                </pre>
                <p>
                    E posssivel visualizar que a funcao esta definindo uma <code>estring</code><br>
                    Porem mais a baixo e passado um numero inteiro.
                    Entao o resultado deste sera <code>false</code>
                </p>
            </div>
            <div class="card-footer text-muted">
                2 days ago
            </div>
        </div>
        <div class="card text-center" style="width: 80%;">
            <div class="card-header">
                <ul class="nav nav-pills card-header-pills">
                    <li class="nav-item">
                        <a class="nav-link">igual</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">identico</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active">Diferent</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">Nao identico</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">Maior que</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">Maior e igual</a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <p class="card-text">
                <pre>
                            $idade = '26';
                            if($idade !=26){
                                echo 'verdadeiro';
                        } else {
                                    echo 'false';
                }

                        </pre>
                </p>
                <p>
                    Agora temos uma <code>string</code> e um <code>int</code> passados<br> como parametro.
                    neste caso o codigo precisa <br>saber se os parametros sao diferente.
                    e a resposta e sim.
                    o echo ira imprimir <code>true</code> ou "vedadeiro" .
                </p>
            </div>
            <div class="card-footer text-muted">
                2 days ago
            </div>
        </div>
        <div class="card text-center" style="width: 80%;">
            <div class="card-header">
                <ul class="nav nav-pills card-header-pills">
                    <li class="nav-item">
                        <a class="nav-link">igual</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">identico</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">Diferent</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active">Nao identico</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">Maior que</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">Maior e igual</a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <p class="card-text">
                <pre>
                            $idade = '26';
                            if($idade !==26){
                                echo 'verdadeiro';
                        } else {
                                    echo 'false';
                }

                </pre>
                </p>
                <p>
                    Agora temos uma <code>string</code> e um <code>int</code> passados<br> como parametro.
                    neste caso o codigo precisa <br>saber se os parametros sao diferente.
                    e a resposta e sim.
                    o echo ira imprimir <code>true</code> ou "vedadeiro" .
                </p>
            </div>
            <div class="card-footer text-muted">
                2 days ago
            </div>
        </div>

        <div class="card text-center" style="width: 80%;">
            <div class="card-header">
                <ul class="nav nav-pills card-header-pills">
                    <li class="nav-item">
                        <a class="nav-link">igual</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">identico</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">Diferent</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">Nao identico</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active">Maior que</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">Maior e igual</a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <p class="card-text">
                <pre>
                            $idadePaulo = 20;
                            if($idadePaulo > 18){
                                echo 'verdadeiro';
                        } else {
                                    echo 'false';
                }

                </pre>
                </p>
                <p>
                    Esse e um exemplo onde o <CODE>Parametro</CODE> inicial e Maior que a secundaria.<br>
                    o codigo precisa receber o parametro <code>idadePaulo</code> para definir se tem mais ou menos que 18 anos.<br>
                    O resultado e <code>True</code>.
                </p>
            </div>
            <div class="card-footer text-muted">
                2 days ago
            </div>
        </div>

        <div class="card text-center" style="width: 80%;">
            <div class="card-header">
                <ul class="nav nav-pills card-header-pills">
                    <li class="nav-item">
                        <a class="nav-link">igual</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">identico</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">Diferent</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">Nao identico</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">Maior que</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active">Maior e igual</a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <p class="card-text">
                <pre>
                            $idadePaulo = 20;
                            if($idadePaulo > 18){
                                echo 'verdadeiro';
                        } else {
                                    echo 'false';
                }

                </pre>
                </p>
                <p>
                    Esse e um exemplo onde o <CODE>Parametro</CODE> inicial e Maior que a secundaria.<br>
                    o codigo precisa receber o parametro <code>idadePaulo</code> para definir se tem mais ou menos que 18 anos.<br>
                    O resultado e <code>True</code>.
                </p>
            </div>
            <div class="card-footer text-muted">
                2 days ago
            </div>
        </div>
        <h5>Tambem temos <code>Menor que</code> e <code>Menor e igual</code><br>
        mais sao iguais aos codigos acima
    </h5>
    </div>
    <div class="loop">
        <h2>Loop</h2>
        <div class="card text-center" style="width: 80%;">
            <div class="card-header">
                <ul class="nav nav-pills card-header-pills">
                    <li class="nav-item">
                        <a class="nav-link active">For</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">While</a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <p class="card-text">
                <pre>
                $i = 0;
                            for($i = 0; $i <=10; $i ++)        
                echo $i;
                </pre>
                </p>
                <p>
                    Existe duas formas de criar um loop.
                    Uma dessas formas e usando o <code>for</code>. <br>
                    Primeiro voce define um parametro depois constroi o loop usando o for.<br>
                    Depois e so chamar usando <code>echo</code> e o nome da funcao.
                </p>
            </div>
            <div class="card-footer text-muted">
                2 days ago
            </div>
        </div>
        <div class="card text-center" style="width: 80%;">
            <div class="card-header">
                <ul class="nav nav-pills card-header-pills">
                    <li class="nav-item">
                        <a class="nav-link ">For</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active">While</a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <p class="card-text">
                <pre>
                $i = 0;
                            while($i <=10;)        
                echo $i;
                $i++;
                </pre>
                </p>
                <p>
                    A outra forma de criar um loop e usando.
                    <code>while</code>. <br>
                    Seguindo basicamente os mesmos parametros, Voce define uma variavel depois constroi o loop usando o <code>while</code>.<br>
                    Depois e so chamar usando <code>echo</code> e o nome da funcao.<br>
                    o <code>$i++</code> diz que ira somar um numero cada vez que o loop completar um ciclo. 
                </p>
            </div>
            <div class="card-footer text-muted">
                2 days ago
            </div>
        </div>
    </div>
</body>

</html>

<?php
// PHP siguinifica personal home page

//variaveis
//variasveis de variaveis
//concatenacao
//comparar valores
//>= <= == !=
//=== !==
//looping
//funcoes
//classes

//$nome = 'nollsilva';
//echo "O meu nome e " . $nome; // concatenacao e feita com ponto

//$nome = "nollsilva";    // essa e uma variavel de variavel
//$nollsilva = 'paulo';
//echo ' e meu amigo e ' . $nollsilva;

//$idade = '26';
//if ($idade == 26) //nesse caso ainda sera verdade pois o ==  leva em consideracao apenas o valor da variavel nao o tipo 
// if($idade ===26)aq e false === quer dizer identico. mais o valor da variavel e string e o valor do if e int
// if($idade !==26)nesse caso o resultado e verdadeiro pois ele quer um resuldado diferente em tipo e valor 
// if($idade !=26)aq e verdadeiro pois ele tem a typagem diferente mais o valor e igual 
//{
//   echo 'verdadeiro';
//} else {
//    echo 'false';
//}

// looping

// for($i = 0; $i <=10; $i ++)
// echo $i.'<br>'.'<hr>';

// $i = 0;
// while($i <10) {
//     echo $i. '<hr>'.'<br>';
//     $i++;
// }

//funcao

// number(3);
// echo '<br>';
// function number($n){
//     echo $n;
// }

//classes

// class pessoa{
//     public $nome;
//     public $idade;

//     public function __construct($nome, $idade){
//         $this->nome = $nome;
//         $this->idade = $idade;
//     }
//     public function printNomeIdade(){
//         echo$this->nome;
//         echo '<br>';
//         echo$this->idade;
//     }
// }

// $pessoa = new pessoa('joao',55);
// $pessoa->printNomeIdade();


// 
?>