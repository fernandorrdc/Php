
<?php

//conexão
include_once 'phpAction/connect.php';

include_once 'includes/header.php';

//select -filtro
if (isset($_GET['id'])) {
    
    $id = mysqli_escape_string($connect , $_GET['id']);

    $sql = "SELECT * FROM clientes WHERE id = '$id'";
    $consulta = mysqli_query($connect , $sql);
    $dados = mysqli_fetch_array($consulta);
}

?>
   <div class = "row">
    <div class="col s12 m6 push-m3 ">

      <h3 class="light">editar CLIENTE</h3>
      
      <form action="phpAction/update.php" method="POST">

      <input type ="hidden" name = "id" value="<?php echo $dados['id'] ;?> " >

            <div class="input-field col s12">

                <input type="text" name="nome" id="nome" value="<?php echo $dados['nome'] ;?> ">
                <label for="nome">Nome:</label>

            </div>

            <div class="input-field col s12">
                
                <input type="text" name="sobrenome" id="sobrenome" value="<?php echo $dados['sobrenome'] ;?>">
                <label for="sobrenome">SobreNome:</label>

            </div>

            <div class="input-field col s12">
                
                <input type="text" name="email" id="email" value="<?php echo $dados['email'] ;?>">
                <label for="imail">Email:</label>

            </div>

            <div class="input-field col s12">
                
                <input type="text" name="idade" id="idade" value="<?php echo $dados['idade'] ;?>">
                <label for="idade">idade:</label>

            </div>

            <button type="submit" class="btn" name="btnEditar"> ATUALIZAR </button>
            <a href="index.php"  class="btn purple"> Lista de CLIENTES </a>

      </form>
    </div>

   </div>   

<?php

include_once 'includes/footer.php';

?>