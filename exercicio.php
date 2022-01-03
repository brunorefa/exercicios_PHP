<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form name="soma" action="exercicio.php" method="post">
    nome: <input name="name" type="text"><br>
    idade: <input name="valor" type="number"><br>
    <br><input type="submit">
    </form>
</body>
</html>

<?php
//---------------------------------------------------------------------------

/*1) - Crie um algoritmo que receba um número digitado pelo usuário e 
 verifique se esse valor é positivo, negativo ou igual a zero. 
A saída deve ser: "Valor Positivo", "Valor Negativo" ou "Igual a Zero".

$valor = $_POST["valor"];

if($valor > 0){
    $resultado = "Valor Positivo";
}elseif($valor < 0){
    $resultado = "Valor Negativo";
}else{
    $resultado = "Igual a Zero";
}
echo $resultado;
*/

//---------------------------------------------------------------------------

/*2) Crie um algoritmo que solicite a entrada de um número, 
e exiba a tabuada de 0 a 10 de acordo com o número solicitado:

$num = $_POST["valor"];

for ($i=0; $i <=10 ; $i++) {
    echo "{$num}x{$i}=".($num*$i)."<br>";
}

*/
//---------------------------------------------------------------------------

/*3) Crie um algoritmo que solicite um número, e faça o cálculo fatorial do mesmo, 
exiba o resultado na tela. 
Ex:
Entrada = 3
Processamento: (3 * 2) * 1
Saída: 6

$num = $_POST["valor"];

if ($num > 0) {
    $valor = $num;
    for ($i=($valor-1); $i > 0 ; $i--){
        $valor = $valor * $i;
    }
}else {
    $valor = 0;
}
echo "{$num}={$valor}"
*/

//---------------------------------------------------------------------------

/*4) Solicite a entrada de um número e descubra se um número digitado é par ou ímpar. 


$num = $_POST["valor"];

if ($num % 2 == 0) {
    echo "Par";
}else {
    echo "impar";
}
*/

//---------------------------------------------------------------------------

/*5) Faça um algoritmo PHP que receba os valores A e B,
imprima-os em ordem crescente em relação aos seus valores.
Exemplo, para A=5, B=4. Você deve imprimir na tela: "4 5".


$valor = 7;
$valor2 = 5;

if($valor < $valor2){
    echo $valor."-".$valor2;
}else{
    echo $valor2."-".$valor;
}
*/

//---------------------------------------------------------------------------

/*6) Faça um algoritmo em PHP onde verifica se o valor da variável A é maior ou menor que o valor da variável B.
A mensagem a ser impressa deve ser “A maior que B” ou “A menor que B”.


$a = 23;
$b = 352;

if($a > $b){
    echo "A maior que B";
}else {
    echo "A menor que B";
}
*/

//---------------------------------------------------------------------------

/*7) Crie um algoritmo para calcular a média final de um aluno, para isso,
solicite a entrada de três notas e as insira em um array, por fim, calcule a média geral.
Caso a média seja maior ou igual a seis, exiba aprovado, caso contrário, exiba reprovado.
Exiba também a média final calculada.
Ex: N1 = 5 | N2 = 10 | N3 = 4 | MG = 6,33 [Aprovado]


$nota = [9, 2, 7];
$somaTotal = 0;

for ($i=0; $i < count($nota); $i++) { 
    $somaTotal += $nota[$i];
}
$resultado = $somaTotal / count($nota);
if ($resultado >= 6){
    echo "Aprovado, média final {$resultado}";
}else {
    echo "Reprovado, méia final {$resultado}";
}
*/

//---------------------------------------------------------------------------

/*8) Crie um algoritmo que pergunte ao usuário seu nome e sua idade.
Em seguida verifique se a idade é maior ou menor que 18, exiba da seguinte forma:
Fulano é maior de 18 e tem XX Anos ou Fulano não é maior de 18 e tem XX Anos.


$nome = $_POST["name"];
$idade = $_POST["valor"];

if($idade >= 18){
    echo "$nome é maior de 18 anos e tem $idade anos";
}else{
    echo "$nome é menor de 18 anos e tem $idade anos";
}
*/

//---------------------------------------------------------------------------

/*10) Ler um número inteiro entre 1 e 12 e escrever o mês correspondente.
Caso o número seja fora desse intervalo, informar que não existe mês com este número.
*/

$mes = [
    "Janeiro","Fevereiro",
    "Março","Abril",
    "Maio","Julho",
    "Julho","Agosto",
    "Setembro","Outubro",
    "Novembro","Dezembro"];

$numMes = $_POST["valor"];

if($numMes >= 1 && $numMes <= 12){
  echo $mes[$numMes - 1];
}else {
    echo "Mês inválido.";
}

?>


