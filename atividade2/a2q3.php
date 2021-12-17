  <section>
    <div class="container">
        <div class="row">
                <div class="col-md-12 col-sm-12 d-flex titulo">
                <h1>If Else - Exercício 3</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <h5 class="enunciado">3. Ler um número inteiro entre 1 e 12 e escrever o mês correspondente. Caso o número seja fora desse intervalo, informar que não existe mês com este número</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <form method="POST">
                    Número<input class="form-control" placeholder="6" type="number" name="num">
                    <button type="submit" name="enviar" class="botao btn btn-outline-light">Enviar</button>
                </form>
            </div>

            <main class="col-md-8">
                
                <?php
                if(isset($_POST['enviar'])){
                    $num = $_POST['num'];
                    if ($num == 1){
                        echo "<p>O mês correspondente a $num é Janeiro</p>";
                    }
                    else if ($num == 2){
                        echo "<p>O mês correspondente a $num é Fevereiro</p>";
                    }
                    else if ($num == 3){
                        echo "<p>O mês correspondente a $num é Março</p>";
                    }
                    else if ($num == 4){
                        echo "<p>O mês correspondente a $num é Abril</p>";
                    }
                    else if ($num == 5){
                        echo "<p>O mês correspondente a $num é Maio</p>";
                    }
                    else if ($num == 6){
                        echo "<p>O mês correspondente a $num é Junho</p>";
                    }
                    else if ($num == 7){
                        echo "<p>O mês correspondente a $num é Julho</p>";
                    }
                    else if ($num == 8){
                        echo "<p>O mês correspondente a $num é Agosto</p>";
                    }
                    else if ($num == 9){
                        echo "<p>O mês correspondente a $num é Setembro</p>";
                    }
                    else if ($num == 10){
                        echo "<p>O mês correspondente a $num é Outubro</p>";
                    }
                    else if ($num == 11){
                        echo "<p>O mês correspondente a $num é Novembro</p>";
                    }
                    else if ($num == 12){
                        echo "<p>O mês correspondente a $num é Dezembro</p>";
                    }
                    else{
                        echo "<p>Não há um mês correspondente ao número $num.</p>";
                    }
                }
                ?>
                
            </main>
        </div>
        <div class="row">
            <div class="col-md-12 imgphp">
                <h3>Código PHP</h3>
                <img src="./img/at2/a2q3.PNG" class="img-fluid rounded">
            </div>
        </div>
    </div>
    </section>