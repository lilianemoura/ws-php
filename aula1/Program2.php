<?php
//criação de um array
$produtos =[
    "maça" =>1.99,
    "uva" =>7.99,
    "laranja" =>2.49];
 //Exibir os preços da lista
    echo "lista dos preços: ";

 foreach ($produtos as $produto =>$preco){
    echo "$produto: R$ $preco", "<br>";
 }
 
 //Calculando o total
 $total=0;
 foreach ($produtos as $preco){
    $total += $preco;
 }
 echo "Soma total dos preços: $total" 
?>