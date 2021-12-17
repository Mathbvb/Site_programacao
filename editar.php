<section class="d-flex">
<?php
$cod = $_GET['cod'];
if(!isset($_SESSION['user'])){
    echo "<meta http-equiv='refresh' content='0;url=?pagina=login'>";
}
?>
    <div class="container">
        <div class="row antonio">

            <div class="col-12">
                <div class="marcio titulo">
                
                <h3 class="tc">Editar cadastro de cliente <?php echo"(Código: ".$_GET['cod'].")" ?></h3>

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

                        $sql = "UPDATE `id17486036_bd_siteatividades`.`cliente` SET nome='$nome', rg='$rg', cpf='$cpf', email='$email' WHERE cod=$cod;";

                        if (mysqli_query($conn, $sql)) {
                        echo "<div class='alert alert-success aroldo'>Os dados do cliente foram atualizados com sucesso!</div>";
                        } else {
                        echo "<div class='alert alert-danger aroldo'>Erro: " . $sql . "<br>" . mysqli_error($conn)."</div>";
                        }

                        mysqli_close($conn);
                        echo "<meta http-equiv='refresh' content='0;url=?pagina=listar'>";

                    }
                    ?>

                    <?php

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

                    $sql = "SELECT * FROM cliente WHERE cod=$cod;";

                        $result = mysqli_query($conn, $sql);

                        if (mysqli_num_rows($result) > 0){

                            while ($row = mysqli_fetch_assoc($result)){
                                $nome = $row["nome"];
                                $rg = $row["rg"];
                                $cpf = $row["cpf"];
                                $email = $row["email"];

                            echo "
                            <form method='POST'>
                                <input type='hidden' name='pagina' value='bd_cad'>
                                <div class='form-group aroldo'>
                                <input type='text' name='nome' class='form-control' value='$nome'></div>
                                <div class='form-group aroldo'>
                                <input type='text' name='rg' class='form-control' value='$rg'></div>
                                <div class='form-group aroldo'>
                                <input type='text' name='cpf' class='form-control' value='$cpf'></div>
                                <div class='form-group aroldo'>
                                <input type='text' name='email' class='form-control' value='$email'></div>
                                <button type='submit' name='enviar' class='botao btn btn-outline-light'>Salvar alterações</button>
                            </form>";
                            break;
                            }
                            mysqli_close($conn);
                        }
                    ?>



                    <div class="col-12 imgphp">
                        <h3>Código php</h3>
                        <img src="./img/bd/editar.png" class="img-fluid rounded">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>