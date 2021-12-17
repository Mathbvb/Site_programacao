<section>
    <div class="container">
    <div class="row">
            <div class="col-md-12 col-sm-12 d-flex titulo">
                <h1>Estruturas de repetição - Exercício 3</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <h5 class="enunciado">3. Elabore um programa em PHP que permita mostrar os valores ímpares entre o cubo de um número digitado pelo usuário até o próprio número (ordem decrescente). </h5>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <form method="POST">
                    Número<input class="form-control" placeholder="11" type="number" name="num">
                    <button type="submit" name="enviar" class="botao btn btn-outline-light">Enviar</button>
                </form>
            </div>

            <main class="col-md-8">
                
                <?php
                if(isset($_POST['enviar'])){
                    $num = $_POST['num'];
                    $cubo = $num * $num * $num;
                    $resto = $cubo % 2;
                    echo "<p>Os números ímpares entre $cubo e $num são:</p>";
                    echo "<p class='teto'>";
                    if ($resto == 0){
                    $cubo = $cubo - 1;
                        while ($num <= $cubo){
                            echo "$cubo; ";
                            $cubo = $cubo - 2;
                        }
                    }
                    else if ($resto == 1){
                        $cubo = $cubo - 2;
                        while ($num < $cubo){
                            echo "$cubo; ";
                            $cubo = $cubo - 2;
                        }
                    }
                    echo "</p>";
                }
                ?>
                
            </main>
        </div>
        <div class="row">
            <div class="col-md-12 imgphp">
                <h3>Código PHP</h3>
                <img src="./img/at3/a3q3.PNG" class="img-fluid rounded">
            </div>
        </div>
    </div>
    </section>