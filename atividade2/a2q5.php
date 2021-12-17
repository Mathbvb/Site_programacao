    <section>
    <div class="container">
    <div class="row">
            <div class="col-md-12 col-sm-12 d-flex titulo">
                <h1>If Else - Exercício 5</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <h5 class="enunciado">5. Faça um formulário HTML que receba o preço à vista de um determinado produto e a quantidade de parcelas, calcule o preço total a pagar e o valor da prestação mensal, referentes ao pagamento parcelado. Se o pagamento for em duas vezes, acréscimo de 2%; Se parcelado em 3 ou 4 vezes deve ser dado um acréscimo de 5% no total a ser pago. Se o parcelamento for em 5 vezes ou mais, o acréscimo será de 8%.</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <form method="POST">
                    Valor a vista<input class="form-control" placeholder="1200" type="number" name="va">
                    Número de parcelas<input class="form-control" placeholder="8" type="number" name="np">
                    <button type="submit" name="enviar" class="botao btn btn-outline-light">Enviar</button>
                </form>
            </div>

            <main class="col-md-8">
                
                <?php
                if(isset($_POST['enviar'])){
                    $va = $_POST['va'];
                    $np = $_POST['np'];
                    if ($np == 2){
                        $vp = $va * 1.02;
                        $vpar = $vp / $np;
                        echo "<p>Para o pagamento em $np vezes o valor total será de R$ $vp e o valor de cada parcela será R$ $vpar.</p>";
                    }
                    else if (($np == 3) || ($np == 4)){
                        $vp = $va * 1.05;
                        $vpar = $vp / $np;
                        echo "<p>Para o pagamento em $np vezes o valor total será de R$ $vp e o valor de cada parcela será R$ $vpar.</p>";
                    }
                    else if ($np >= 5 ){
                        $vp = $va * 1.08;
                        $vpar = $vp / $np;
                        echo "<p>Para o pagamento em $np vezes o valor total será de R$ $vp e o valor de cada parcela será R$ $vpar.</p>";
                    }
                }
                ?>
                
            </main>
        </div>
        <div class="row">
            <div class="col-md-12 imgphp">
                <h3>Código PHP</h3>
                <img src="./img/at2/a2q5.PNG" class="img-fluid rounded">
            </div>
        </div>
    </div>
    </section>