<section>
    <div class="container">
    <div class="row">
            <div class="col-md-12 col-sm-12 d-flex titulo">
                <h1>Estruturas de repetição - Exercício 6 <span class="alert alert-primary">Desafio 1</span></h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <h5 class="enunciado">6. Construa um script que receba uma data de um formulário e exiba em uma tabela zebrada os próximos 24 meses incrementados mês a mês à partir da data recebida. Dica Manipulação de datas em php</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <form method="POST">
                    Insira a data<input class="form-control" type="date" name="data">
                    <button type="submit" name="enviar" class="botao btn btn-outline-light">Enviar</button>
                </form>
            </div>

            <main class="col-md-8">
                
                <?php
                if(isset($_POST['enviar'])){
                    $data = $_POST['data'];
                    $ndata = new Datetime($data);
                    echo "<table class='table table-striped table-dark'>";
                    echo "<thead><tr><th>N°</th><th scope='col'>Próximos 24 meses</th></tr></thead>";
                    echo "<tbody>";
                    for ($i=1;$i<25;$i++){
                        $ndata ->add(new DateInterval("P1M"));
                        echo"<tr><td>$i</td><td>".$ndata->format("d/m/Y")."</td></tr>";
                    }
                    echo "</tbody></table>";
                }
                ?>
                
            </main>
        </div>
        <div class="row">
            <div class="col-md-12 imgphp">
                <h3>Código PHP</h3>
                <img src="./img/at3/a3q6.PNG" class="img-fluid rounded">
            </div>
        </div>
    </div>
    </section>