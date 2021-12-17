<section>
    <div class="container">
    <div class="row">
            <div class="col-md-12 col-sm-12 d-flex titulo">
                <h1>Estruturas de repetição - Exercício 1</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <h5 class="enunciado">1. Criar um script em PHP capaz de verificar se um número lido (GET) é primo ou não. Caso seja primo, mostrar a informação em um alert-success do bootstrap e caso contrário, o resultado a ser exibido deverá ser em uma alert-warning.</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <form method="POST">
                    Número<input class="form-control" placeholder="8" type="number" name="num">
                    <button type="submit" name="enviar" class="botao btn btn-outline-light">Enviar</button>
                </form>
            </div>

            <main class="col-md-8">
                
                <?php
                if(isset($_POST['enviar'])){
                    $num = $_POST['num'];
                    $contador=0;
                    for ($i = $num; $i > 0; $i--){
                        if ($num % $i == 0){
                            $contador++;
                        }
                    }
                    if ($contador <= 2){
                        echo "<div class='alert-success rounded'><p class='pr'>$num é primo!</p></div>";
                    }   
                    else{
                        echo "<div class='alert-warning rounded'><p class='pr'>$num não é primo!</p></div>";    
                    }      
                }

                ?>
                
            </main>
        </div>
        <div class="row">
            <div class="col-md-12 imgphp">
                <h3>Código PHP</h3>
                <img src="./img/at3/a3q1.PNG" class="img-fluid rounded">
            </div>
        </div>
    </div>
    </section>