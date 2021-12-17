<section class="d-flex">

<script type="text/javascript">
    function conexclusao(cod){
        var res = confirm("Deseja remover este registro?");
        if (res == true){
            window.location.href = "?pagina=excluir&cod="+cod;
        }
    }
</script>

<?php
if(!isset($_SESSION['user'])){
    echo "<meta http-equiv='refresh' content='0;url=?pagina=login'>";
}
?>
    <div class="container">
        <div class="row antonio">

            <div class="col-12">
                <div class="marcio titulo">
                
                <h3 class="tc">Lista de clientes</h3>

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

                        $sql = "SELECT * FROM cliente;";

                        $result = mysqli_query($conn, $sql);

                        if (mysqli_num_rows($result) > 0){
                            echo "<table class='table table-striped table-dark lar'><thead><tr>
                            <th scope='col'>Código</th>
                            <th scope='col'>Nome</th>
                            <th scope='col'>RG</th>
                            <th scope='col'>CPF</th>
                            <th scope='col'>E-mail</th>
                            <th>Ações</th></tr></thead><tbody>";
                            while ($row = mysqli_fetch_assoc($result)){
                                echo "<tr>
                                <td>".$row["cod"]."</td>
                                <td>".$row["nome"]."</td>
                                <td>".$row["rg"]."</td>
                                <td>".$row["cpf"]."</td>
                                <td>".$row["email"]."</td>
                                <td><a href=index.php?pagina=editar&&cod=".$row["cod"]."><ion-icon name='create-outline' class='iconlistar'></ion-icon></a>
                                <a href=\"javascript:func()\" onclick=\"conexclusao('".$row["cod"]."')\"><ion-icon name='trash-outline' class='iconlistar'></ion-icon></a></td></tr>";
                            }
                            echo "</tbody></table>";
                        }
                        else{
                            echo "<div class='alert alert-warning'>Não há nenhum dado para listar.</div>";
                        }

                        mysqli_close($conn);       
                    ?>

                    </div>
                </div>

                    <div class="col-12 imgphp">
                        <h3>Código php</h3>
                        <img src="./img/bd/listar.png" class="img-fluid rounded">
                    </div>
        </div>
    </div>
</section>