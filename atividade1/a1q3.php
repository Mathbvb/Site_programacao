<section>
    <div class="container">
        <div class="row" >
            <div class="col-md-12 col-sm-12 d-flex titulo">
            <h1>Exercícios Básicos - Exercício 3</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <h5 class="enunciado">3. Construa um código php, em que seja exibida na tela o cálculo do imc de uma pessoa que tem 1,72 m de altura e o peso de 80 kg. Obs: para calcular o imc utilize a fórmula: imc=peso/altura².</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-12">
                <form method="POST">
                    Altura (em cm)<input class="form-control" placeholder="172" type="number" name="alt">
                    Peso<input class="form-control" placeholder="80" type="number" name="peso">
                    <button type="submit" name="enviar" class="botao btn btn-outline-light">Enviar</button>
                </form>
            </div>

            <main class="col-md-8 col-sm-12">

                <?php
                if(isset($_POST['enviar'])){
                    $alt = $_POST['alt'];
                    $peso = $_POST['peso'];
                    $altm = $alt/100;
                    $imc = $peso / ($altm * $altm);
                    $imc2=number_format($imc,2,'.','');
                    echo "<p>O IMC é igual a: $imc2</p>";
                }
                ?>
                
            </main>
        </div>
        <div class="row">
            <div class="col-md-12 rounded imgphp">
                <h3>Código PHP</h3>
                <img src="./img/at1/a1q3.PNG" class="img-fluid rounded">
            </div>
        </div>
    </div>
    </section>