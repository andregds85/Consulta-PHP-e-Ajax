<?php
// Verifica se existe a variável txtnome
if (isset($_GET["txtnome"])) {
    $nome = $_GET["txtnome"];
    // Conexao com o banco de dados
   
    
    /*
    

    $server = "localhost";
    $user = "root";
    $senha = "";
    $base = "produtos";
    $conexao = mysqli_connect($server, $user, $senha) or die("Erro na conexão!");
    mysqli_select_db($base);
       */
    
include("conecta.php");
     
    if (empty($nome)) {
        $sql = "SELECT * FROM produto";
    } else {
        $nome .= "%";
        $sql = "SELECT * FROM produto WHERE nome like '$nome'";
    }
    sleep(1);
    $result = mysqli_query($con,$sql);
    $cont = mysqli_affected_rows($con);
    // Verifica se a consulta retornou linhas 
    if ($cont > 0) {
        // Atribui o código HTML para montar uma tabela
        $tabela = "<table border='1'>
                    <thead>
                        <tr>
                            <th>NOME</th>
                            <th>Descricao</th>
                            <th>Preco</th>
                            <th>Quantidade</th>
                        </tr>
                    </thead>
                    <tbody>
                    <tr>";
        $return = "$tabela";
        // Captura os dados da consulta e inseri na tabela HTML
        while ($linha = mysqli_fetch_array($result)) {
            $return.= "<td>" . utf8_encode($linha["nome"]) . "</td>";
            $return.= "<td>" . utf8_encode($linha["descricao"]) . "</td>";
            $return.= "<td>" . utf8_encode($linha["quantidade"]) . "</td>";
            $return.= "<td>" . utf8_encode($linha["preco"]) . "</td>";
            $return.= "</tr>";
        }
        echo $return.="</tbody></table>";
    } else {
        // Se a consulta não retornar nenhum valor, exibi mensagem para o usuário
        echo "Não foram encontrados registros!";
    }
}
?>
