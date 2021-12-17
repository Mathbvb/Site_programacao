    <section>
    <div class="container">
    <div class="row">
            <div class="col-md-12 col-sm-12 d-flex" style="justify-content:center; padding-bottom: 40px; padding-top: 56px">
                <h1>If Else - Exercício 2</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <h5 class="enunciado">2. Ler 3 números, os possíveis lados de um triângulo, e imprimir a classificação de acordo com tamanho dos lados: equilátero, escaleno ou isósceles. (mostrar figura correspondente).</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <form method="POST">
                    Lado A<input class="form-control" placeholder="5" type="number" name="la">
                    Lado B<input class="form-control" placeholder="5" type="number" name="lb">
                    Lado C<input class="form-control" placeholder="5" type="number" name="lc">
                    <button type="submit" name="enviar" class="botao btn btn-outline-light">Enviar</button>
                </form>
            </div>

            <main class="col-md-8">
                
                <div style="text-align:center">
                <?php
                if(isset($_POST['enviar'])){
                    $la = $_POST['la'];
                    $lb = $_POST['lb'];
                    $lc = $_POST['lc'];
                    if (($la == $lb) && ($la == $lc) && ($lb == $lc)){
                        echo "<img src='./img/triangulos/equi.PNG'>";
                    }
                    else if (($la == $lb) || ($la == $lc) || ($lb == $lc)){
                        echo "<img src='./img/triangulos/iso.PNG'>";
                    }
                    else{
                        echo "<img src='./img/triangulos/esca.PNG'>";
                    }
                }
                ?>
                </div>
                
            </main>
        </div>
        <div class="row">
            <div class="col-md-12 imgphp">
                <h3>Código PHP</h3>
                <img src="./img/at2/a2q2.PNG" class="img-fluid rounded">
            </div>
        </div>
    </div>
    </section>