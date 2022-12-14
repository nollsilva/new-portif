<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>estudos</title>
</head>

<body>
    <header>
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="operadores.php">operadores</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="variaveis.php">variaveis</a>
            </li>
        </ul>
    </header>
    <div class="container">
        <h1>Seja Bem Vindo(a)</h1>
        <div class="col-6">
            <p>Ola, esta e a pagina inicial.
                apartir daqui vc ira ter acesso a codigos de variaveis e operadores nas respequitivas abas.
                bom estudo..
            </p>
        </div>
    </div>
    <nav id="navbar-example2" class="navbar navbar-light bg-light px-3" style="width: 75%;">
        <a class="navbar-brand">Falando de programacao</a>
        <ul class="nav nav-pills">
            <li class="nav-item">
                <a class="nav-link" href="#scrollspyHeading1">Variavel</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#scrollspyHeading2">Types</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#scrollspyHeading3">Comparacao</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#scrollspyHeading4">Loop</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#scrollspyHeading5">Operadores</a>
            </li>
        </ul>
    </nav>
    <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0" class="scrollspy-example" tabindex="0" style="width: 70%;">
        <h4 id="scrollspyHeading1">Variavel</h4>
        <p>As vari??veis no PHP s??o representadas por um cifr??o ($) seguido pelo nome da vari??vel. Os nomes de vari??vel s??o case-sensitive
            (ou seja, h?? distin????o<br> entre mai??sculas e min??sculas)Nomes de vari??vel seguem as mesmas regras como outros r??tulos no PHP.
            Um nome de vari??vel v??lido inicia-se com uma letra<br> ou sublinhado, seguido de qualquer n??mero de letras, n??meros ou sublinhados.
            Em uma express??o regular, poderia ser representado<br> assim:<code> '[a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*'</code>
            or padr??o, as vari??veis s??o sempre atribu??das por valor. Isto significa que ao atribuir uma express??o a uma vari??vel,
            o valor da express??o original ?? copiado <br>integralmente para a vari??vel de destino. Isto significa tamb??m que, ap??s atribuir
            o valor de uma vari??vel a outra, a altera????o de uma destas vari??veis n??o afetar?? a outra.<br>
            Uma observa????o importante a se fazer, ?? que somente vari??veis nomeadas podem ser atribu??das por refer??ncia.
        </p>

        <h4 id="scrollspyHeading2">Types</h4>
        <p>
            PHP suporta dez tipos primitivos.<br>
            eles sao:<br>
            Quatro tipos escalares.
            <li>bool</li><br>
            <li>int</li><br>
            <li>float (n??mero de ponto flutuante)</li><br>
            <li>string</li><br>
            Quatro tipos compostos:<br>

            <br>
            <li>array</li><br>
            <li>object</li><br>
            <li>callable</li><br>
            <li>iterable</li><br>

            E finalmente dois tipos especiais:<br>

            <br>
            <li>resource</li><br>
            <li>NULL</li><br>
            O tipo de uma vari??vel geralmente n??o ?? definido pelo programador; em vez disso,
            ?? decidido em tempo de execu????o pelo PHP dependendo<br>
            do contexto em que essa vari??vel ?? usada.
            Para for??ar a convers??o de uma vari??vel para um determinado type, converta a vari??vel ou use<br> a fun????o <code>settype()</code> nela.

        </p>
        <h4 id="scrollspyHeading3">Comparacao</h4>
        <p>Operadores de compara????o, como os seus nomes implicam, permitem que voc?? compare dois valores.
            Voc?? pode se interessar em ver<br> as tabelas de compara????o de tipos, que tem exemplo das v??rias
            compara????es entre tipos relacionadas.<br>

            <br>
        <h5>Operadores de compara????o</h5><br>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">exemplo</th>
                    <th scope="col">nome</th>
                    <th scope="col">resultado</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">$a == $b</th>
                    <td>Igual</td>
                    <td>Verdadeiro (true) se $a ?? igual a $b.</td>
                </tr>
                <tr>
                    <th scope="row">$a === $b</th>
                    <td>Id??ntico</td>
                    <td>Verdadeiro (true) se $a ?? igual a $b, e eles s??o do mesmo tipo.</td>
                </tr>
                <tr>
                    <th scope="row">$a != $b</th>
                    <td>Diferente</td>
                    <td>Verdadeiro se $a n??o ?? igual a $b.</td>
                </tr>
                <tr>
                    <th scope="row">$a <> $b</th>
                    <td>Diferente</td>
                    <td>Verdadeiro se $a n??o ?? igual a $b.</td>
                </tr>
                <tr>
                    <th scope="row">$a !== $b</th>
                    <td>N??o id??ntico</td>
                    <td>Verdadeiro de $a n??o ?? igual a $b, ou eles n??o s??o do mesmo tipo (introduzido no PHP4).</td>
                </tr>
                <tr>
                    <th scope="row">$a < $b</th>
                    <td>Menor que</td>
                    <td>Verdadeiro se $a ?? estritamente menor que $b. $a> $b Maior que Verdadeiro se $a ?? estritamente maior que $b.</td>
                </tr>
                <tr>
                    <th scope="row">$a <= $b</th>
                    <td>Menor ou igual</td>
                    <td>Verdadeiro se $a ?? menor ou igual a $b. $a>= $b Maior ou igual Verdadeiro se $a ?? maior ou igual a $b.</td>
                </tr>
                <tr>
                    <th scope="row">$a <=> $b</th>
                    <td>Spaceship (nave espacial)</td>
                    <td>Um integer menor que, igual a ou maior que zero quando $a ??, respectivamente, menor que, igual a ou maior que $b. Dispon??vel a partir do PHP 7.</td>
                </tr>

            </tbody>
        </table>
        Se comparar um n??mero com uma string ou com strings num??ricas, cada string ?? convertido para um n??mero e ent??o
        a compara????o ?? realizada numericamente. Essas regras tamb??m se aplicam a instru????o switch. As convers??es de tipo n??o
        s??o realizadas quando a compara????o<br> utilizada ?? === ou !== por esse tipo de compara????o envolver valores e tipos.
        </p>
        <h4 id="scrollspyHeading4">Loop</h4>
        <p>Um loop nada mais ?? que um recurso que permite executar mais de uma vez trechos de c??digo de acordo
            com uma condi????o. O PHP possui<br> quatro estruturas de la??os de repeti????o: for, foreach, while e do-while.<br> Tamb??m
            ?? poss??vel criar la??os de repeti????o com as estruturas do condicional if.
            Os la??os de repeti????o tamb??m s??o comumente conhecidos<br> como Loop, ou Looping. Tamb??m s??o considerados estruturas de controle.<br>

        </p>
        <h4 id="scrollspyHeading5">Operadores</h4>
        <p>
            Os operadores nos permitem modificar ou obter novos valores a partir de uma ou mais vari??veis. S??o agrupados segundo o n??mero
            de valores que aceitam, um ??nico valor, dois valores e tr??s valores, conhecidos como Un??rios, Bin??rios e Tern??rios respectivamente.<br>
        <h5>Operadores de String</h5><br>
        S??o utilizados para concatenar argumentos, tendo 2 tipos:<br>
        <br><li>Ponto(.) - realiza a concatena????o dos argumentos presentes nos lados direito e esquerdo.</li>
        <li> Ponto e igual(.=) - realiza a concatena????o utilizando uma vari??vel declarada anteriormente com o argumento desejado, vari??vel ou n??o.</li><br>
    
        <h5>Operadores Aritm??ticos</h5><br>

    S??o aqueles que estudamos na escola, aquelas fun????es b??sicas de somar, subtrair, multiplicar, dividir, etc. Neste caso se os operandos
    s??o <br>n??meros(INTEGER e FLOAT) podem ser usados normalmente, se forem de outro tipo, seus valores ser??o convertidos antes da realiza????o
    da opera????o.<br> Com estes operadores podemos fazer qualquer opera????o matem??tica com tipo de dados num??ricos, veja
    abaixo<br> os operadores aritm??ticos no PHP:  
    <li>Adi????o: (+)</li>
    <li>Subtra????o: (-)</li>
    <li>Multiplica????o: (*)</li>
    <li>Divis??o: (/)</li>
    <li>M??dulo - resto da divis??o: (%)</li><br>
    O PHP tamb??m possui outros operadores aritm??ticos que trabalham apenas com um operando, s??o os chamados operadores un??rios e que servem 
    para: trocar sinais, incrementar ou decrementar valor.
    </p>
    </div>
</body>
<footer>
    <div class="footer">
        <p>Feito por NOLLSILVA</p>
    </div>
</footer>

</html>