<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vetores em PHP</title>

</head>
<link rel="stylesheet" type="text/css" href="style.pesquisa.css">
<body>

<div class="titulo1">
      <h3 class=titulo > PHP <br>&<br> Vetores</h3>
   </div>  
    
      <div class='container'>
         <divclass class='card'>
            
            <h2>Entendendo Vetores em PHP</h2>
            <p>Em PHP, "vetor" é usado como sinônimo de "array", uma estrutura que armazena múltiplos valores sob um único nome de variável. Essa construção é eficiente para organizar e acessar dados relacionados por meio de índices, sendo útil para manipular conjuntos de dados de maneira organizada. </p>
            <h2>Execicio com uso de vetor</h2>

        <form action="#" method="POST">

        <input type="radio" id="banco" name="banco" value="0">
        <label for="banco">Nubank</label>
        <input type="radio" id="banco" name="banco" value="1">
        <label for="banco">PicPay</label>
        <input type="radio" id="banco" name="banco" value="2">
        <label for="banco">Inter</label>
        <br>
        <br>
        <input type="submit" name="botao" align=center>
        </form>

    <?php 

    @$banco1 = $_POST["banco"];

    $bancos = array("Nubank","PicPay","Inter");

    if(@$_REQUEST["botao"]){

        echo $bancos["$banco1"];

    } ?>
              

                  <h2> Explicação do uso do vetor no exemplo</h2>

                  <p>O array no código armazena os nomes dos bancos e atraves da input "radio" ela nos retorna o valor de posicionamento de cada item dentro da array . Exemplo: Se solicionarmos o Nubank o valor a ser retornado será 0 que dentro da array corresponde ao Nubank</p>


      </div>        

         <div  class=tabela>
            <h2 id="menu">👇Menu </h2>
               <div class="target">
                  <div class="target" id="pg1">
                     <label>
                        <a href="ApresentaçaoSite.html">Página Inicial</a>
                     </label>
                  </div>

                  <div class="target" id="formulario">
                     <label for="Menu">
                     <a href="Formulario.php">Formulario PHP</a>
                     </label>
                  </div>

                  <div class="target" id="pesquisa">
                     <label>
                     <a href="Pesquisa.php">Pesquisa Vetores</a>
                     </label>
                  </div>
            </div>
               
         </div>
   
         <div class="ass">
            <p>Criado por:<br>Gabriel Dos Santos<br> & <br>Gabriel Nardin</p>
         </div>


        
</body>        

    
</html>
