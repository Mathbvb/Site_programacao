    <section>
    <div class="container">
        <div class="row" >
            <div class="col-md-12 col-sm-12 d-flex titulo">
            <h1>If Else - Exercício 1</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <h5 class="enunciado">1. Entrar com um número e informar se ele é divisível por 3, por 5, por 10 ou se não é divisível por nenhum destes.</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-12">
                <form method="POST">
                    Número<input class="form-control" placeholder="15" type="number" name="numero">
                    <button type="submit" name="enviar" class="botao btn btn-outline-light">Enviar</button>
                </form>
            </div>

            <main class="col-md-8 col-sm-12">
                
                <?php
                if(isset($_POST['enviar'])){
                    $num = $_POST['numero'];
                    $r3 = $num % 3;
                    $r5 = $num % 5;
                    $r10 = $num % 10; 
                    if (($r3 == 0) && ($r5 == 0) && ($r10 == 0)){
                        echo "<p>O número $num é divisível por 3, 5 e 10.</p>";
                    }
                    else{
                        echo "<p>O número $num não é divisível por 3, 5 e 10.</p>";
                    }
                }
                ?>
                
            </main>
        </div>
        <div class="row">
            <div class="col-md-12 rounded imgphp">
                <h3>Código PHP</h3>
                <img src="./img/at2/a2q1.PNG" class="img-fluid rounded">
            </div>
        </div>
    </div>
    </section>