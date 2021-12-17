<section>
    <div class="container">
    <div class="row">
            <div class="col-md-12 col-sm-12 d-flex titulo">
                <h1>Arrays - Exercício 1</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <h5 class="enunciado">1. Faça um script em php que sorteie 15 dezenas para um jogo da Loteria (intervalo de 1 a 25) e armazene em um array. Exiba as dezenas sorteadas em ordem crescente e não permita que se repitam. Cada dezena sorteada deve ser exibida dento de uma div de 100px X 100px, com cantos arredondados com cor a escolher. As divs devem flutuar à esquerda e ter um espaçamento de 5px entre elas. Dica, para o sorteio das dezenas utilizar a função "rand" http://php.net/manual/pt-BR/function.rand.php</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <p class="alert alert-info">Sem uso de formulário</p>
            </div>

            <main class="col-md-9">
                <?php
                $array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25];

                $random_keys=array_rand($array, 15);
                foreach($random_keys as $i){
                    echo "<div class='lote rounded'><p>".$array[$i]."</p></div>";}
                ?>
            </main>
        </div>
        <div class="row">
            <div class="col-md-12 imgphp">
                <h3>Código PHP</h3>
                <img src="./img/at4/a4q1.png" class="img-fluid rounded">
            </div>
        </div>
    </div>
    </section>