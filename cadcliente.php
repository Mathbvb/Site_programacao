<section class="d-flex">
<?php
if(!isset($_SESSION['user'])){
    echo "<meta http-equiv='refresh' content='0;url=?pagina=login'>";
}
?>
    <div class="container">
        <div class="row antonio">

            <div class="col-12">
                <div class="marcio titulo">
                
                <h3 class="tc">Cadastrar cliente</h3>

                <?php
                    if(isset($_POST["enviar"])){
                        $nome = $_POST["nome"];
                        $cpf = $_POST["cpf"];
                        $rg = $_POST["rg"];
                        $email = $_POST["email"];

                        $servername = "localhost";
                        $username = "id17486036_user_siteati";
                        $password = "Omaks156!asnfk";
                        $dbname = "id17486036_bd_siteatividades";

                        // Create connection
                        $conn = mysqli_connect($servername, $username, $password, $dbname);
                        // Check connection
                        if (!$conn) {
                        die("Connection failed: " . mysqli_connect_error());
                        }

                        $sql = "INSERT INTO `id17486036_bd_siteatividades`.`cliente` (`nome`, `rg`, `cpf`, `email`) VALUES ('$nome', '$rg', '$cpf', '$email');";

                        if (mysqli_query($conn, $sql)) {
                        echo "<div class='alert alert-success aroldo'>O cliente foi cadastrado com sucesso!</div>";
                        } else {
                        echo "<div class='alert alert-danger aroldo'>Erro: " . $sql . "<br>" . mysqli_error($conn)."</div>";
                        }

                        mysqli_close($conn);

                    }
                    ?>
                    <form method="POST">
                        <input type="hidden" name="pagina" value="bd_cad">
                        <div class="form-group aroldo">
                        <input type="text" name="nome" class="form-control" placeholder="Nome"></div>
                        <div class="form-group aroldo">
                        <input type="text" name="rg" class="form-control" placeholder="RG" onkeypress="$(this).mask('00.000.000.00');"></div>
                        <div class="form-group aroldo">
                        <input type="text" name="cpf" class="form-control" placeholder="CPF" onkeypress="$(this).mask('000.000.000-00');"></div>
                        <div class="form-group aroldo">
                        <input type="text" name="email" class="form-control" placeholder="Email"></div>
                        <button type="submit" name="enviar" class="botao btn btn-outline-light">Enviar</button>
                    </form>



                    <div class="col-12 imgphp">
                        <h3>Código php</h3>
                        <img src="./img/bd/cadcliente.png" class="img-fluid rounded">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>