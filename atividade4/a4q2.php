<section>
    <div class="container">
    <div class="row">
            <div class="col-md-12 col-sm-12 d-flex titulo">
                <h1>Arrays - Exercício 2</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <h5 class="enunciado">2. Considerando as diversas funções para tratamento de arrays disponíveis no site oficial da linguagem (https://www.php.net/manual/pt_BR/book.array.php). Selecione 4 funções e elabore uma explicação do seu funcionamento e construa um exemplo prático (funcional) do uso de cada uma das opções escolhidas. Pode incluir entrada por formulário e exibição dos resultados. Incluir prints de código.</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <h5>Selecione uma função</h5>
                <form method="POST">
                    Número<input class="form-control" placeholder="6" type="number" name="num">
                    Função<select class="form-select form-select-sm" name="fun">
                        <option style="color:black" value="1">in_array</option>
                        <option style="color:black" value="2">array_unique</option>
                        <option style="color:black" value="3">rsort</option>
                        <option style="color:black" value="4">array_unshift</option>
                    </select>
                        <button type="submit" name="enviar" class="botao btn btn-outline-light">Enviar</button>
                </form>
            </div>
        <main class="col-md-8">
            <?php
                $array = [5, 22, 22, 9, 9, 7, 13, 13, 17, 4, 26, 2, 1, 5, 46, 16, 15];
                echo "<h5>Array para os exemplos:</h5>";
                print_r($array);
                if (isset($_POST['enviar'] )){
                $fun = $_POST['fun'];

                switch($fun){
                    case 1:
                        echo "<h5 class='soo'>In_array (checa se um valor existe em uma array)</h5>";
                        $num = $_POST['num'];
                        var_dump(in_array($num, $array));
                        break;

                    case 2:
                        echo "<h5 class='soo'>Array_unique (Remove todos os valores duplicados de uma array)</h5>";
                        $un = array_unique($array);
                        print_r($un);
                        break;

                    case 3:
                        echo "<h5 class='soo'>rsort (orena um array em ordem decrescente)</h5>";
                        rsort($array);
                        foreach ($array as $k => $v){
                            echo "$v; ";
                        }
                        break;

                    case 4:
                        echo "<h5 class='soo'>array_unshift (adiciona elementos no início da array)</h5>";
                    $num = $_POST['num'];
                    array_unshift($array, $num);
                    print_r($array);
                        break;
                    }
                }
            ?>
        </main>
        </div>
        <div class="row">
            <div class="col-md-12 imgphp">
                <h3>Código PHP</h3>
                <img src="./img/at4/a4q2.png" class="img-fluid rounded">
            </div>
        </div>
    </div>
    </section>