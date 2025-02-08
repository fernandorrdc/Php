<?php

//Section
session_start();
if (isset($_SESSION['msg'])) { ?>

<script>
  //menssagem

  window.onload = function () {
    M.toast({html: '<?php echo $_SESSION['msg']; ?>'});
  };
  
</script>

<?php
}
session_unset();

?>