<?php

//conexão
include_once 'phpAction/connect.php';

//Header
include_once 'includes/header.php';

//menssagens
include_once 'includes/menssagens.php'; 

?>
   <div class = "row">
    <div class="col s12 m6 push-m3 ">

      <h3 class="light">CLIENTES</h3>
      <table class="striped">

        <thead>

          <tr>
            <th>Nome</th>
            <th>SobreNome</th>
            <th>emil</th>
            <th>idade</th>
          </tr>

        </thead>
        <tbody>

        <?php

          $sql = "SELECT * FROM clientes";
          $consulta = mysqli_query($connect,$sql);
          while ($dados = mysqli_fetch_array($consulta)) {

        ?>
        <tr>
            <td><?php echo $dados['nome']; ?></td>
            <td><?php echo $dados['sobrenome']; ?></td>
            <td><?php echo $dados['email']; ?></td>
            <td><?php echo $dados['idade']; ?></td>

            <td><a href="" class="btn-floating orange"><i class="material-icons">edit</i></a></td>
            <td><a href="" class="btn-floating red"><i class="material-icons">delete</i></a></td>
        </tr>
        <?php }; ?>    
        </tbody>
      </table>
      <br>
      <a href="add.php" class="btn">Adicionar Cliente</a>
    </div>

   </div>   

<?php

include_once 'includes/footer.php';

?>