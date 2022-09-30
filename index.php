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
        <p>As variáveis no PHP são representadas por um cifrão ($) seguido pelo nome da variável. Os nomes de variável são case-sensitive
            (ou seja, há distinção<br> entre maiúsculas e minúsculas)Nomes de variável seguem as mesmas regras como outros rótulos no PHP.
            Um nome de variável válido inicia-se com uma letra<br> ou sublinhado, seguido de qualquer número de letras, números ou sublinhados.
            Em uma expressão regular, poderia ser representado<br> assim:<code> '[a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*'</code>
            or padrão, as variáveis são sempre atribuídas por valor. Isto significa que ao atribuir uma expressão a uma variável,
            o valor da expressão original é copiado <br>integralmente para a variável de destino. Isto significa também que, após atribuir
            o valor de uma variável a outra, a alteração de uma destas variáveis não afetará a outra.<br>
            Uma observação importante a se fazer, é que somente variáveis nomeadas podem ser atribuídas por referência.
        </p>

        <h4 id="scrollspyHeading2">Types</h4>
        <p>
            PHP suporta dez tipos primitivos.<br>
            eles sao:<br>
            Quatro tipos escalares.
            <li>bool</li><br>
            <li>int</li><br>
            <li>float (número de ponto flutuante)</li><br>
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
            O tipo de uma variável geralmente não é definido pelo programador; em vez disso,
            é decidido em tempo de execução pelo PHP dependendo<br>
            do contexto em que essa variável é usada.
            Para forçar a conversão de uma variável para um determinado type, converta a variável ou use<br> a função <code>settype()</code> nela.

        </p>
        <h4 id="scrollspyHeading3">Comparacao</h4>
        <p>Operadores de comparação, como os seus nomes implicam, permitem que você compare dois valores.
            Você pode se interessar em ver<br> as tabelas de comparação de tipos, que tem exemplo das várias
            comparações entre tipos relacionadas.<br>

            <br>
        <h5>Operadores de comparação</h5><br>
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
                    <td>Verdadeiro (true) se $a é igual a $b.</td>
                </tr>
                <tr>
                    <th scope="row">$a === $b</th>
                    <td>Idêntico</td>
                    <td>Verdadeiro (true) se $a é igual a $b, e eles são do mesmo tipo.</td>
                </tr>
                <tr>
                    <th scope="row">$a != $b</th>
                    <td>Diferente</td>
                    <td>Verdadeiro se $a não é igual a $b.</td>
                </tr>
                <tr>
                    <th scope="row">$a <> $b</th>
                    <td>Diferente</td>
                    <td>Verdadeiro se $a não é igual a $b.</td>
                </tr>
                <tr>
                    <th scope="row">$a !== $b</th>
                    <td>Não idêntico</td>
                    <td>Verdadeiro de $a não é igual a $b, ou eles não são do mesmo tipo (introduzido no PHP4).</td>
                </tr>
                <tr>
                    <th scope="row">$a < $b</th>
                    <td>Menor que</td>
                    <td>Verdadeiro se $a é estritamente menor que $b. $a> $b Maior que Verdadeiro se $a é estritamente maior que $b.</td>
                </tr>
                <tr>
                    <th scope="row">$a <= $b</th>
                    <td>Menor ou igual</td>
                    <td>Verdadeiro se $a é menor ou igual a $b. $a>= $b Maior ou igual Verdadeiro se $a é maior ou igual a $b.</td>
                </tr>
                <tr>
                    <th scope="row">$a <=> $b</th>
                    <td>Spaceship (nave espacial)</td>
                    <td>Um integer menor que, igual a ou maior que zero quando $a é, respectivamente, menor que, igual a ou maior que $b. Disponível a partir do PHP 7.</td>
                </tr>

            </tbody>
        </table>
        Se comparar um número com uma string ou com strings numéricas, cada string é convertido para um número e então
        a comparação é realizada numericamente. Essas regras também se aplicam a instrução switch. As conversões de tipo não
        são realizadas quando a comparação<br> utilizada é === ou !== por esse tipo de comparação envolver valores e tipos.
        </p>
        <h4 id="scrollspyHeading4">Loop</h4>
        <p>Um loop nada mais é que um recurso que permite executar mais de uma vez trechos de código de acordo
            com uma condição. O PHP possui<br> quatro estruturas de laços de repetição: for, foreach, while e do-while.<br> Também
            é possível criar laços de repetição com as estruturas do condicional if.
            Os laços de repetição também são comumente conhecidos<br> como Loop, ou Looping. Também são considerados estruturas de controle.<br>

        </p>
        <h4 id="scrollspyHeading5">Operadores</h4>
        <p>
            Os operadores nos permitem modificar ou obter novos valores a partir de uma ou mais variáveis. São agrupados segundo o número
            de valores que aceitam, um único valor, dois valores e três valores, conhecidos como Unários, Binários e Ternários respectivamente.<br>
        <h5>Operadores de String</h5><br>
        São utilizados para concatenar argumentos, tendo 2 tipos:<br>
        <br><li>Ponto(.) - realiza a concatenação dos argumentos presentes nos lados direito e esquerdo.</li>
        <li> Ponto e igual(.=) - realiza a concatenação utilizando uma variável declarada anteriormente com o argumento desejado, variável ou não.</li><br>
    
        <h5>Operadores Aritméticos</h5><br>

    São aqueles que estudamos na escola, aquelas funções básicas de somar, subtrair, multiplicar, dividir, etc. Neste caso se os operandos
    são <br>números(INTEGER e FLOAT) podem ser usados normalmente, se forem de outro tipo, seus valores serão convertidos antes da realização
    da operação.<br> Com estes operadores podemos fazer qualquer operação matemática com tipo de dados numéricos, veja
    abaixo<br> os operadores aritméticos no PHP:  
    <li>Adição: (+)</li>
    <li>Subtração: (-)</li>
    <li>Multiplicação: (*)</li>
    <li>Divisão: (/)</li>
    <li>Módulo - resto da divisão: (%)</li><br>
    O PHP também possui outros operadores aritméticos que trabalham apenas com um operando, são os chamados operadores unários e que servem 
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