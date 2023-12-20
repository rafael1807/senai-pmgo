<?php 
session_start();
require_once "../config/header.inc.html" 
?>

<div class="row container">
    <div class="col s12"><p>&nbsp;</p>
        <h5 class light> Cadastro de Clientes</h5><hr>
        <?php 
        if (isset($_SESSION['sucesso'])):
            echo"<p class='center green lighten-2 white-text' padding:10px>";
            echo $_SESSION['sucesso'];
            unset($_SESSION['sucesso']);
            echo"</p>";

        elseif(isset($_SESSION['erro'])):
            echo"<p class='center green lighten-2 white-text' padding:10px>";
            echo $_SESSION['erro'];
            unset($_SESSION['erro']);
            echo"</p>";
        endif;

        require_once "../forms/form-add-clientes.php" 
        ?>
    </div>
</div>

<?php require_once "../config/footer.inc.html" ?>