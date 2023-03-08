<?php

 $nome_vendedor = $_POST["nome_vendedor"];
 $salario_fixo = $_POST["salario_fixo"];
 $total_vendas = $_POST["total_vendas"];

 $comissao=$total_vendas*0.15;
 $salario_final=$salario_fixo+$comissao;

 echo "<p> Nome do Vendedor: $nome_vendedor </p>"; 
 echo "<p> Salário Fixo: R$" . number_format($salario_fixo,2,',','.') . "</p>";
 echo "<p> Valor da Comissão: R$" . number_format($comissao,2,',','.') . "</p>";
 echo "<p> Salário Final: R$" . number_format($salario_final,2,',','.') . "<p/>";

?>