    <section>
    <div class="container">
    <div class="row">
            <div class="col-md-12 col-sm-12 d-flex titulo">
                <h1>If Else - Exercício 4</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <h5 class="enunciado">4. Faça um script que leia 3 notas e uma letra (‘A’ ou ‘P’). A partir disso, caso a letra escolhida seja ‘A’, calcule e mostre a média aritmética das notas lidas, caso seja ´P’ calcule a média ponderada. Exibir o resultado dentro de uma div de 150x150, com cantos arredondados – caso a nota seja maior ou igual a 7,0 o fundo da div deve ser verde (Aprovado); Se a média estiver entre 5,0 e 6,9 a div deve ter o fundo amarelo (Exame); caso a nota seja menor que 5,0 div vermelha (Reprovado).</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <form method="POST">
                    Nota 1<input class="form-control" placeholder="9" type="number" name="n1">
                    Nota 2<input class="form-control" placeholder="9" type="number" name="n2">
                    Nota 3<input class="form-control" placeholder="9" type="number" name="n3">
                    Média<select class="form-select form-select-sm" name="med">
                    <option style="color:black" value="A">Aritmética</option><option style="color:black" value="P">Ponderada</option></select>
                    <button type="submit" name="enviar" class="botao btn btn-outline-light">Enviar</button>
                </form>
            </div>

            <main class="col-md-8">

                <div class="d-flex" style="justify-content:center">
                <?php
                if(isset($_POST['enviar'])){
                    $n1 = $_POST['n1'];
                    $n2 = $_POST['n2'];
                    $n3 = $_POST['n3'];
                    $med = $_POST['med'];
                    if ($med == 'A'){
                        $arit = ($n1+$n2+$n3)/3;
                        if ($arit >= 7){
                            echo "<div class='rounded apro'><p class='meio'>Sua nota média é $arit, Aprovado</p></div>";
                            }
                            else if (($arit >=5) && ($arit < 7)){
                                echo "<div class='rounded recu'><p class='meio' style='color: black'>Sua nota média é $arit, Exame</p></div>";
                            }
                            else if ($arit < 5){
                                echo "<div class='rounded repro'><p class='meio'>Sua nota média é $arit, Reprovado</p></div>";
                            }
                        }
                    else if ($med == 'P'){
                        $pond = (($n1*2)+($n2*3)+($n3*5))/10;
                        if ($pond >= 7){
                            echo "<div class='rounded apro'><p class='meio'>Sua nota média é $pond, Aprovado</p></div>";
                            }
                            else if (($pond >=5) && ($pond < 7)){
                                echo "<div class='rounded recu'><p class='meio' style='color: black'>Sua nota média é $pond, Exame</p></div>";
                            }
                            else if ($pond < 5){
                                echo "<div class='rounded repro'><p class='meio'>Sua nota média é $pond, Reprovado</p></div>";
                            }
                        }
                    }
                ?>
                </div>
            </main>
        </div>
        <div class="row">
            <div class="col-md-12 imgphp">
                <h3>Código PHP</h3>
                <img src="./img/at2/a2q4.PNG" class="img-fluid rounded">
            </div>
        </div>
    </div>
    </section>