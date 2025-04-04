
<?php

include_once 'includes/header.php';

?>
   <div class = "row">
    <div class="col s12 m6 push-m3 ">

      <h3 class="light">Novo CLIENTE</h3>
      
      <form action="phpAction/create.php" method="POST">

            <div class="input-field col s12">

                <input type="text" name="nome" id="nome">
                ,<label for="nome">Nome:</label>

            </div>

            <div class="input-field col s12">
                
                <input type="text" name="sobrenome" id="sobrenome">
                <label for="sobrenome">SobreNome:</label>

            </div>

            <div class="input-field col s12">
                
                <input type="text" name="email" id="email">
                <label for="imail">Email:</label>

            </div>

            <div class="input-field col s12">
                
                <input type="text" name="idade" id="idade">
                <label for="idade">idade:</label>

            </div>

            <button type="submit" class="btn" name="btnCadastrar"> CADASTRAR </button>
            <a href="index.php"  class="btn purple"> Lista de CLIENTES </a>

      </form>
    </div>

   </div>   

<?php

include_once 'includes/footer.php';

?>