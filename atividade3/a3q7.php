<section>
    <div class="container">
    <div class="row">
            <div class="col-md-12 col-sm-12 d-flex titulo">
                <h1>Estruturas de repetição - Exercício 7 <span class="alert alert-primary">Desafio 2</span></h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <h5 class="enunciado">7. Construa um formulário de solicitação de empréstimos conforme imagens abaixo: </h5><div class="d-flex q7d">
                <img src="./img/a3q7.PNG"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <form method="POST">
                    Valor do empréstimo<input class="form-control" placeholder="50000" type="number" name="num">
                    Parcelas<select class="form-select form-select-sm" name="par">
                    <option style="color:black" value="6">6 meses - taxa 1,2%/m</option><option style="color:black" value="12">12 meses - 1,8%/m</option>
                    <option style="color:black" value="24">24 meses - 2,0%/m</option><option style="color:black" value="36">36 meses - 2,5%/m</option>
                    <option style="color:black" value="48">48 meses - 2,8%/m</option></select>
                    <button type="submit" name="enviar" class="botao btn btn-outline-light">Solicitar</button>
                </form>
            </div>

            <main class="col-md-8">
                
                <?php
                if(isset($_POST['enviar'])){
                    $num = $_POST['num'];
                    $par = $_POST['par'];
                    if ($par == 6){
                        $taxa = 0.012;
                    }
                    else if ($par == 12){
                        $taxa = 0.018;
                    }
                    else if ($par == 24){
                        $taxa = 0.02;
                    }
                    else if ($par == 36){
                        $taxa = 0.025;
                    }
                    else if ($par == 48){
                        $taxa = 0.028;
                    }
                    $coefin = ($taxa/(1-(1/pow(1+$taxa, $par))));
                    $vpar = $num * $coefin;
                    $data = new Datetime();
                    echo "<table class='table table-sm table-dark'>";
                    echo "<thead><tr><th>Parcela</th><th>Data</th><th>Valor da parcela</th></thead><tbody>";
                    for ($i=1;$i<=$par;$i++){
                        $data->add(new DateInterval("P1M"));
                        echo "<tr><td>$i</td>";
                        echo "<td>". $data->format("d/m/Y"). "</td>";
                        printf ("<td>R$ %.2f</td></tr>", $vpar);
                    }
                    echo "</tbody></table>";
                    $vt = $vpar * $par;
                    $juros = $vt - $num;
                    printf ("<div class='alert alert-success'> Valor dos juros: %.2f, Valor total do emppréstimo: %.2f</div>", $juros, $vt);
                }
                ?>
                
            </main>
        </div>
        <div class="row">
            <div class="col-md-12 imgphp">
                <h3>Código PHP</h3>
                <img src="./img/at3/a3q7.PNG" class="img-fluid rounded">
            </div>
        </div>
    </div>
    </section>