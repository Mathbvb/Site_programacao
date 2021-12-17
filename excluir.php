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
                
                <h3 class="tc">Excluir registro <?php echo"(Código: ".$_GET['cod'].")" ?></h3>

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

                        $sql = "DELETE FROM `id17486036_bd_siteatividades`.`cliente` WHERE `cod`=$cod;";

                        if (mysqli_query($conn, $sql)) {
                        echo "<div class='alert alert-success aroldo'>Registro excluído!</div>";
                        } else {
                        echo "<div class='alert alert-danger aroldo'>Erro: " . $sql . "<br>" . mysqli_error($conn)."</div>";
                        }

                        mysqli_close($conn);
                        echo "<meta http-equiv='refresh' content='0;url=?pagina=listar'>";

                    ?>

                    <div class="col-12 imgphp">
                        <h3>Código php</h3>
                        <img src="./img/bd/excluir.png" class="img-fluid rounded">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>