/* https://www.devmedia.com.br/executando-consultas-ao-mysql-com-php-e-ajax/26008 */ 

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <script type="text/javascript" src="ajax.js"></script>
        <div id="Container">
            <h1>Consultando Produto utilizando AJAX</h1>
            <hr/>
 
            <h2>Pesquisar Produto:</h2>
            <div id="Pesquisar">
                Infome o nome: 
                <input type="text" name="txtnome" id="txtnome"/> 
                <input type="button" name="btnPesquisar" value="Pesquisar" onclick="getDados();"/>
            </div>
            <hr/>
 
            <h2>Resultados da pesquisa:</h2>
            <div id="Resultado"></div>
            <hr>
 
        </div>
    </body>
</html>
