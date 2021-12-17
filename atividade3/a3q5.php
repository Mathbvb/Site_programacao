<section>
    <div class="container">
    <div class="row">
            <div class="col-md-12 col-sm-12 d-flex titulo">
                <h1>Estruturas de repetição - Exercício 5</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <h5 class="enunciado">5. Dado um número digitado pelo usuário(formulário), apresentar os resultados da tabuada desse numero em uma tabela. Conforme exemplo ao lado (Usar Bootstrap).</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <form method="POST">
                    Número<input class="form-control" placeholder="7" type="number" name="num">
                    <button type="submit" name="enviar" class="botao btn btn-outline-light">Enviar</button>
                </form>
            </div>

            <main class="col-md-8">
                
                <?php
                if(isset($_POST['enviar'])){
                    $num = $_POST['num'];
                    echo "<table class='table table-striped table-dark'>";
                    echo "<thead><tr><th scope='col'>Tabuada do $num</th></tr></thead>";
                    echo "<tbody>";
                    for ($i=1;$i<=10;$i++){
                        $tabu = $num * $i;
                        echo"<tr><td>$num X $i = $tabu</td></tr>";
                    }
                    echo "</tbody></table>";
                }
                ?>
                
            </main>
        </div>
        <div class="row">
            <div class="col-md-12 imgphp">
                <h3>Código PHP</h3>
                <img src="./img/at3/a3q5.PNG" class="img-fluid rounded">
            </div>
        </div>
    </div>
    </section>