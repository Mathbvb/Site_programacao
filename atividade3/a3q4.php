<section>
    <div class="container">
    <div class="row">
            <div class="col-md-12 col-sm-12 d-flex titulo">
                <h1>Estruturas de repetição - Exercício 4</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <h5 class="enunciado">4. Criar um script em PHP para mostrar o fatorial de um número informado pelo usuário. O cálculo do fatorial é feito da seguinte forma: n! = 1 x ... x n-1 x n Exemplo: 5! = 1 x 2 x 3 x 4 x 5 = 120 O fatorial de 0 é 1. Mostrar mensagem de erro (alert-danger) para números lidos que sejam menores que 0. O fatorial deve ser exibido em um alert-info.</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <form method="POST">
                    Número<input class="form-control" placeholder="5" type="number" name="num">
                    <button type="submit" name="enviar" class="botao btn btn-outline-light">Enviar</button>
                </form>
            </div>

            <main class="col-md-8">
                <div class="mario">
                <?php
                if(isset($_POST['enviar'])){
                    $num = $_POST['num'];
                    $nume = $num;
                    if ($num >= 0){
                        for ($f = 1; $num>1; $num--)
                    {
                        $f = $f * $num;
                    }
                        echo "<div class='alert-info rounded'><p class='pr'>$nume! = $f</p></div>";
                    }
                    else if ($num < 0){
                        echo "<div class='alert-danger rounded'><p class='pr' style='color: red'>Só aceitamos valores maiores que zero!</p></div>";
                    }
                }
                ?>
                </div>
            </main>
        </div>
        <div class="row">
            <div class="col-md-12 imgphp">
                <h3>Código PHP</h3>
                <img src="./img/at3/a3q4.PNG" class="img-fluid rounded">
            </div>
        </div>
    </div>
    </section>