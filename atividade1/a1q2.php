<section>
    <div class="container">
        <div class="row" >
            <div class="col-md-12 col-sm-12 d-flex titulo">
            <h1>Exercícios Básicos - Exercício 2</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
            <h5 class="enunciado">2. Faça um código php, onde sejam criadas duas variáveis String, armazene os valores de nome e sobrenome. Concatene seus valores em uma outra chamada nomecompleto. Imprima seus valores na tela.</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-12">
                <form method="POST">
                    Nome<input class="form-control" placeholder="João" type="text" name="nome">
                    Sobrenome<input class="form-control" placeholder="Carvalho" type="text" name="snome">
                    <button type="submit" name="enviar" class="botao btn btn-outline-light">Enviar</button>
                </form>
            </div>

            <main class="col-md-8 col-sm-12">

                <?php
                if(isset($_POST['enviar'])){
                    $nome = $_POST['nome'];
                    $snome = $_POST['snome'];
                    $nomecom = "$nome $snome";
                    echo "<p>Nome completo: $nomecom</p>";
                }
                ?>
                
            </main>
        </div>
        <div class="row">
            <div class="col-md-12 rounded imgphp">
                <h3>Código PHP</h3>
                <img src="./img/at1/a1q2.PNG" class="img-fluid rounded">
            </div>
        </div>
    </div>
    </section>