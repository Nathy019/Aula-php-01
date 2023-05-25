<?php 
// Sintaxe de Variáveis
# comentario uma linha
/* comentario de varias linhas*/




//php case sensitive, faz o erro de maiuscula com minuscula ?TOMAR CUIDADO?
echo "olá"; # Imprime na Tela, Comando cru
echo "<h1>PHP - ESTUDANDO</H1>"; #PODEMOS USAR HTML DENTRO DE PHP
print("<h2>AULA 02</h2>");#mostrar na tela
print_r ("Vamos estudar");# serve para debugar a linha de codigo, usado para localizar erros

echo "<h3>Menssagem</h3>";
echo 9.99;

echo "<br>";

//variaveis, criar uma variavel com '$' e valor sempre a esquerda
$nome = "nathy"; #texto = string   //não necessariamente precisa de um valor
$idade = 36;#numérico inteiro = integer
$altura = 1.58; #numérico decimal = double
$fumante = false;#booleano = boolean

//gettype mostra o tipo de variavel
echo gettype($nome) . "<br>";
echo gettype($idade) . "<br>";
echo gettype($altura) . "<br>";
echo gettype($fumante) . "<br>";

echo $nome;
echo "br>";
echo $nome . $idade;
echo "<br>";
echo $nome . "-" . $idade . "<br>";
echo "nome: $nome <br>";//aspas sinples '' não coloca o valor dado a varial
echo 'nome: $nome <br>';//aspas dupla "" coloca o valor da variavel

echo "<h1>Operação</h1>";
$n1 = 10;
$n2 = 2;
echo $n1+$n2;
echo "<br>";
echo "n1 + n2 = " . $n1+$n2 . "<br>";#mas usando "" pode se usar o concatenar 
echo $n1 - $n2 . "<br>"; 
echo $n1 * $n2 . "<br>"; 
echo $n1 / $n2 . "<br>"; 
echo $n1 % $n2 . "<br>"; #resto de divisão
echo $n1 ** $n2 . "<br>"; #potencia
?> 

