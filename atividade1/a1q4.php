<section>
    <div class="container">
        <div class="row" >
            <div class="col-md-12 col-sm-12 d-flex titulo">
            <h1>Exercícios Básicos - Exercício 4</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
            <h5 class="enunciado">4. Faça um script php em que sejam declaradas quatro variáveis (n1, n2, n3 e n4), atribua valores a essa variável, calcule a média aritmética e imprima na tela.</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-12">
                <form method="POST">
                    Número 1<input class="form-control" placeholder="10" type="number" name="num1">
                    Número 2<input class="form-control" placeholder="10" type="number" name="num2">
                    Número 3<input class="form-control" placeholder="10" type="number" name="num3">
                    Número 4<input class="form-control" placeholder="10" type="number" name="num4">
                    <button type="submit" name="enviar" class="botao btn btn-outline-light">Enviar</button>
                </form>
            </div>

            <main class="col-md-8 col-sm-12">

                <?php
                if(isset($_POST['enviar'])){
                    $n1 = $_POST['num1'];
                    $n2 = $_POST['num2'];
                    $n3 = $_POST['num3'];
                    $n4 = $_POST['num4'];
                    $med = ($n1+$n2+$n3+$n4)/4;
                    echo "<p>A média artimética desses números é: $med</p>";
                }
                ?>
                
            </main>
        </div>
        <div class="row">
            <div class="col-md-12 rounded imgphp">
                <h3>Código PHP</h3>
                <img src="./img/at1/a1q4.PNG" class="img-fluid rounded">
            </div>
        </div>
    </div>
    </section>