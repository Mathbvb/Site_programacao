    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 pt">
                    <p class="sitede">SITE DE ATIVIDADES</p>
                </div>
            </div>
        </div>
    </header>    
    <section>
    <div class="container">
        <div class="row">
            <div class="col-12 marcio">
            <?php
                if(isset($_GET['login'])){
                echo "<div class='alert alert-success' role='alert'>Login realizado com sucesso! Bem vindo ".$_SESSION['user']."!</div>";
                }
            ?>
            </div>
            <main class="col-md-12 col-sm-12">
                <div class="d-flex sbs">
                <h1>Por que criei este site?</h1>
                </div>
                <p>Esse site foi criado com o objetivo de ser hospedado e usado para armazenar minhas tarefas que realizarei ao longo desse segundo semestre de 2021. Estarei constantemente atualizando o site a medida que receberei e realizarei novas tarefas.</p>
                <div class="d-flex sbs">
                <h1>Como relatar possíveis problemas?</h1>
                </div>
                <p>Caso esteja encontrando problemas em meu site pode relata-los diretamente a mim por meio de minhas redes sociais, você pode encontrar elas na página sobre mim, ou enviando um email para mathias.2020301453@aluno.iffar.edu.br</p>
            </main>
        </div>
    </div>
    </section>