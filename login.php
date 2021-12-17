<section class="d-flex">
    <div class="container">
        <div class="row antonio">

            <div class="col-12">
                <div class="marcio titulo">
                
                <h3 class="tc">Login</h3>

                <?php
                    if(isset($_POST["logar"])){
                        $servername = "localhost";
                        $username = "id17486036_user_siteati";
                        $password = "Omaks156!asnfk";
                        $dbname = "id17486036_bd_siteatividades";

                        $email = $_POST['email'];
                        $senha = $_POST['senha'];

                        $conn = mysqli_connect($servername, $username, $password, $dbname);
                        // Check connection
                        if (!$conn) {
                        die("Connection failed: " . mysqli_connect_error());
                        }
                        else{
                            $sql = "SELECT * FROM user;";
                            $result = mysqli_query($conn, $sql);
                            if (mysqli_num_rows($result) > 0){
                                while($row = mysqli_fetch_assoc($result)){
                                    if ($row['email']==$email && $row['senha']==$senha){
                                        $_SESSION['user'] = $row['nome'];
                                        $logado = true;
                                        break;
                                    }
                                }
                            }
                            else {
                                echo "<div class='alert alert-danger' role='alert'>Sem dados para exibir!</div>";
                            }
                            mysqli_close($conn);
                        }

                        if (@$logado==true){
                            echo "<meta http-equiv='refresh' content='0;url=?pagina=home&login=true'>";
                        }
                        else{
                            echo "<div class='alert alert-danger aroldo' role='alert'>Essa conta não existe!</div>";
                        }
                    }
                    ?>
                    <form method="POST">
                        <input type="hidden" name="pagina" value="bd_cad">
                        <div class="form-group aroldo">
                        <input type="text" name="email" class="form-control" placeholder="Email"></div>
                        <div class="form-group aroldo">
                        <input type="password" name="senha" class="form-control" placeholder="Senha"></div>
                        <button type="submit" name="logar" class="botao btn btn-outline-light">Fazer login</button>
                    </form>



                    <div class="col-12 imgphp">
                        <h3>Código php</h3>
                        <img src="./img/bd/login.png" class="img-fluid rounded">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>