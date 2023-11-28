<html>
<head>
    <title></title>
</head>
<link rel="stylesheet" type="text/css" href="style.form.css">
<body>

<div class='container'>
    <form action="#" method='post'>
          <h2 style=font-size:30px;>Preencha com seus dados</h2>
              <divclass class='card'>

                <div class="forms">
                    <label for=forms>Nome:
                    <input style=width:90% type="text" name="nome" required="" placeholder="Digite seu nome"> 
                    </label>
                </div>

                <div class="forms">
                    <label for="forms">Nascimento:
                    <input style=width:90% name=nascimento type="date" required="" size="3" maxlength="2"><br>
                    </label>
                </div>   
                
                <div class="forms">
                    <label for="forms">Email: 
                    <input style=width:90% type=email name="email" required="" placeholder=JoaoSilva@gmail.com>
                    </label>
                </div>  

                <div class="forms">
                    <label for="forms">Cidade:
                        <input style=width:90% name=cidade type="text" required="" placeholder="Digite sua Cidade"> <br>
                    </label>
                </div> 

                <div class="forms">
                    <label for="forms">Senha:<br>
                        <input style=width:90% name=IP type="password" required="" placeholder="8 dígitos"> <br>
                    </label>
                </div>    

                <div class="sexo">
                    <label for="forms"> Sexo:
                      <input type="radio" name="sexo" required="" value="Homem"> Masc
                      <input type="radio" name="sexo" required="" value="Mulher"> Fem
                      <input type="radio" name="sexo" required="" value="Não Binário"> Nao bin<br>
                    </label> <br>
                </div>   
                
                <div class="forms">
                 <textarea name="contrato" cols="30" rows="10" readonly="">
1. OBJETO DO CONTRATO 
1.1 A empresa não se responsabiliza por danos e perdas ao Cliente de acordo com os termos e condições estabelecidos neste Contrato. 

2. HONORÁRIOS E PAGAMENTO
2.1 O Cliente concorda em pagar à Empresa de os honorários acordados conforme detalhado no Anexo A deste Contrato. 
2.2 Os pagamentos serão feitos no caixa ou via pix e devem ser recebidos pela Empresa.
3. CONFIDENCIALIDADE 
3.1 Ambas as partes concordam em manter a confidencialidade de todas as informações comerciais e financeiras do Cliente reveladas durante a prestação dos serviços contábeis.
4.	DURAÇÃO E RESCISÃO
4.2 Qualquer das partes pode rescindir este Contrato imediatamente em caso de violação significativa de seus termos pela outra parte.
5.	LEI APLICÁVEL E JURISDIÇÃO
Este Contrato será regido e interpretado de acordo com as leis do Brasil. As partes concordam que qualquer litígio decorrente deste Contrato será submetido à jurisdição exclusiva dos tribunais de [nome da cidade/estado].
IN WITNESS WHEREOF, as partes assinaram este Contrato na data mencionada 


                 </textarea> 
                 <br>
                     <input type="checkbox" required>
                    <label for="forms">Concordo com os termos</label><br>
                </div>

                <div class="forms">
                <select  name="contato">
                  <option value=>    
                      selecione
                  </option> 
                  <option value="Email"> Email</option>
                  <option value="Número"> Celular</option>
                  <option value="Whats"> Whatapp</option>
              </select>
              </div>

              
              <input  type="reset" value="apagar"> 
              

              <div class=buttom>
              <input name=botao type="submit" value="enviar">

              </div>
    </form>
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

   <div class=ficha>

        <?php  
        @$nome= $_POST ["nome"];
        @$nasc= $_POST ["nascimento"];
        @$email= $_POST ["email"];
        @$cidade= $_POST ["cidade"];
        @$senha= $_POST ["IP"];
        @$sexo= $_POST ["sexo"];
        @$contato= $_POST ["contato"];
        ?>

<b> Meu nome é : </b><?php echo $nome; ?> <br> <br>
<b> Nasci em   : </b><?php echo $nasc; ?> <br> <br>
<b> Meu email é:</b> <?php echo $email;?> <br>  <br>
<b> Moro em: </b>    <?php echo $cidade;?> <br>  <br>
<b> Minha senha é :</b> <?php echo $senha; ?> <br> <br>
<b> Eu sou :  </b>   <?php echo $sexo; ?>   <br>  <br>
<b> Entre em contato pelo meu: </b> <?php echo $contato; ?> <br> <br>

              
    </div>

    <div class="ass">
            <p>Criado por:<br>Gabriel Dos Santos<br> & <br>Gabriel Nardin</p>
         </div>

</body>
</html>