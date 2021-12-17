<section>
    <div class="container">
    <div class="row">
            <div class="col-md-12 col-sm-12 d-flex titulo">
                <h1>Estruturas de repetição - Exercício 2</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <h5 class="enunciado">2. Elabore um programa em PHP que permita mostrar os números entre o intervalo do número digitado pelo usuário até o cubo desse número.</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <form method="POST">
                    Número<input class="form-control" placeholder="8" type="number" name="num">
                    <button type="submit" name="enviar" class="botao btn btn-outline-light">Enviar</button>
                </form>
            </div>

            <main class="col-md-8">
                
                <?php
                if(isset($_POST['enviar'])){
                    $num = $_POST['num'];
                    $cubo = $num * $num * $num;
                    echo "<p>Os número no intervalo entre $num e $cubo são:</p>";
                    $num++;
                    echo "<p class='teto'>";
                    do{
                        echo "$num; ";
                        $num++;
                    } while ($num < $cubo);
                    echo "</p>";
                }
                ?>
                
            </main>
        </div>
        <div class="row">
            <div class="col-md-12 imgphp">
                <h3>Código PHP</h3>
                <img src="./img/at3/a3q2.PNG" class="img-fluid rounded">
            </div>
        </div>
    </div>
    </section>