<section>
    <div class="container">
        <div class="row" >
            <div class="col-md-12 col-sm-12 d-flex titulo">
            <h1>Exercícios Básicos - Exercício 1</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <h5 class="enunciado">1. Faça um código php, onde sejam criadas duas variáveis inteiras. Imprima seus valores na tela e em seguida imprima o resultado das quatro operações básicas.</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-12">
                <form method="POST">
                    Número 1<input class="form-control" placeholder="15" type="number" name="num1">
                    Número 2<input class="form-control" placeholder="15" type="number" name="num2">
                    <button type="submit" name="enviar" class="botao btn btn-outline-light">Enviar</button>
                </form>
            </div>

            <main class="col-md-8 col-sm-12">
                <?php
                if(isset($_POST['enviar'])){
                    $num1 = $_POST['num1'];
                    $num2 = $_POST['num2'];
                    $soma = $num1 + $num2; 
                    echo "<p>Soma: $soma</p>";
                    $sub = $num1 - $num2;
                    echo "<p>Subtração: $sub</p>";
                    $mul = $num1 * $num2;
                    echo "<p>Multiplicação: $mul</p>";
                    $div = $num1 / $num2;
                    echo "<p>Divisão: $div</p>";
                }
                ?>
                
            </main>
        </div>
        <div class="row">
            <div class="col-md-12 rounded imgphp">
                <h3>Código PHP</h3>
                <img src="./img/at1/a1q1.PNG" class="img-fluid rounded">
            </div>
        </div>
    </div>
    </section>