<section class="d-flex">
    <div class="container">
        <div class="row antonio">

            <div class="col-12">
                <div class="marcio titulo">
                
                <h3 class="tc">Criar conta</h3>

                <?php
                    if(isset($_POST["enviar"])){
                        $nome = $_POST["nome"];
                        $cpf = $_POST["cpf"];
                        $rg = $_POST["rg"];
                        $email = $_POST["email"];
                        $senha = $_POST["senha"];

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

                        $sql = "INSERT INTO `id17486036_bd_siteatividades`.`user` (`nome`, `rg`, `cpf`, `email`, `senha`) VALUES ('$nome', '$rg', '$cpf', '$email', '$senha');";

                        if (mysqli_query($conn, $sql)) {
                        echo "<div class='alert alert-success aroldo'>Sua conta foi criada com sucesso!</div>";
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
                        <div class="form-group aroldo">
                        <input type="password" name="senha" class="form-control" placeholder="Senha"></div>
                        <button type="submit" name="enviar" class="botao btn btn-outline-light">Enviar</button>
                    </form>



                    <div class="col-12 imgphp">
                        <h3>Código php</h3>
                        <img src="./img/bd/criar.png" class="img-fluid rounded">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>