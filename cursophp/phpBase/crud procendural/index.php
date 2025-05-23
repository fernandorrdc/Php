<?php

//conexão
include_once 'phpAction/connect.php';

//Header
include_once 'includes/header.php';

//menssagens
include_once 'includes/menssagens.php';

?>
<div class="row">
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
        $consulta = mysqli_query($connect, $sql);

        if (mysqli_num_rows($consulta) > 0 ) {
        while ($dados = mysqli_fetch_array($consulta)) {

        ?>
          <tr>
            <td><?php echo $dados['nome']; ?></td>
            <td><?php echo $dados['sobrenome']; ?></td>
            <td><?php echo $dados['email']; ?></td>
            <td><?php echo $dados['idade']; ?></td>

            <td><a href="editar.php?id=<?php echo $dados['id']; ?>" class="btn-floating orange"><i class="material-icons">edit</i></a></td>

            <td><a href="#modal<?php echo $dados['id']; ?>" class="btn-floating red modal-trigger"><i class="material-icons">delete</i></a></td>

            <!-- Modal Structure -->
            <div id="modal<?php echo $dados['id']; ?>" class="modal">
              <div class="modal-content">
                <h4>EXCLUSÃO !</h4>
                <p>tem certeza que deseja excluir esse registro!</p>
              </div>
              <div class="modal-footer">

                <form action="phpAction/delete.php" method="POST">
                  <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">

                  <button type="submit" name="btnDeletar" class="btn red">Sim , DELETAR!</button>

                  <a href="#!" class="modal-close waves-effect waves-teal btn-flat" >Cancelar</a>
                  
                </form>
              </div>
            </div>

          </tr>
        <?php }}; ?>
      </tbody>
    </table>
    <br>
    <a href="add.php" class="btn">Adicionar Cliente</a>
  </div>

</div>

<?php

include_once 'includes/footer.php';

?>