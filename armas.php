<?php

    header('Content-Type: text/html; charset=utf-8');

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $arma = $_POST['arma'];
    $tier = $_POST['tier'];

        $armas = array(
            "Adaga" => array(
                "T1" => array(
                    "Ferro" => 3,
                    "Aço" => 10
                ),
                "T2" => array(
                    "Ferro" => 3,
                    "Aço" => 10
                ),
                "T3" => array(
                    "Ferro" => 3,
                    "Aço" => 10
                ),
                "T4" => array(
                    "Ferro" => 3,
                    "Aço" => 10
                ),
                "T5" => array(
                    "Ferro" => 3,
                    "Aço" => 10
                ),
                "A1" => array(
                    "Ferro" => 3,
                    "Aço" => 10
                ),
                "T6" => array(
                    "Ferro" => 3,
                    "Aço" => 10
                ),
                "T7" => array(
                    "Ferro" => 3,
                    "Aço" => 10
                ),
            ),
            "Espada" => array(
                "T1" => array(
                    "Ferro" => 3,
                    "Aço" => 10
                ),
                "T2" => array(
                    "Ferro" => 3,
                    "Aço" => 10
                ),
                "T3" => array(
                    "Ferro" => 3,
                    "Aço" => 10
                ),
                "T4" => array(
                    "Ferro" => 3,
                    "Aço" => 10
                ),
                "T5" => array(
                    "Ferro" => 3,
                    "Aço" => 10
                ),
                "A1" => array(
                    "Ferro" => 3,
                    "Aço" => 10
                ),
                "T6" => array(
                    "Ferro" => 3,
                    "Aço" => 10
                ),
                "T7" => array(
                    "Ferro" => 3,
                    "Aço" => 10
                ),
            ),
            "Montante" => array(
                "T1" => array(
                    "Ferro" => 3,
                    "Aço" => 10
                ),
                "T2" => array(
                    "Ferro" => 3,
                    "Aço" => 10
                ),
                "T3" => array(
                    "Ferro" => 3,
                    "Aço" => 10
                ),
                "T4" => array(
                    "Ferro" => 3,
                    "Aço" => 10
                ),
                "T5" => array(
                    "Ferro" => 3,
                    "Aço" => 10
                ),
                "A1" => array(
                    "Ferro" => 3,
                    "Aço" => 10
                ),
                "T6" => array(
                    "Ferro" => 3,
                    "Aço" => 10
                ),
                "T7" => array(
                    "Ferro" => 3,
                    "Aço" => 10
                ),
            ),
            "Machado" => array(
                "T1" => array(
                    "Ferro" => 3,
                    "Aço" => 10
                ),
                "T2" => array(
                    "Ferro" => 3,
                    "Aço" => 10
                ),
                "T3" => array(
                    "Ferro" => 3,
                    "Aço" => 10
                ),
                "T4" => array(
                    "Ferro" => 3,
                    "Aço" => 10
                ),
                "T5" => array(
                    "Ferro" => 3,
                    "Aço" => 10
                ),
                "A1" => array(
                    "Ferro" => 3,
                    "Aço" => 10
                ),
                "T6" => array(
                    "Ferro" => 3,
                    "Aço" => 10
                ),
                "T7" => array(
                    "Ferro" => 3,
                    "Aço" => 10
                ),
            ),
            "Maça" => array(
                "T1" => array(
                    "Ferro" => 3,
                    "Aço" => 10
                ),
                "T2" => array(
                    "Ferro" => 3,
                    "Aço" => 10
                ),
                "T3" => array(
                    "Ferro" => 3,
                    "Aço" => 10
                ),
                "T4" => array(
                    "Ferro" => 3,
                    "Aço" => 10
                ),
                "T5" => array(
                    "Ferro" => 3,
                    "Aço" => 10
                ),
                "A1" => array(
                    "Ferro" => 3,
                    "Aço" => 10
                ),
                "T6" => array(
                    "Ferro" => 3,
                    "Aço" => 10
                ),
                "T7" => array(
                    "Ferro" => 3,
                    "Aço" => 10
                ),
            ),
            "Lança" => array(
                "T1" => array(
                    "Ferro" => 3,
                    "Aço" => 10
                ),
                "T2" => array(
                    "Ferro" => 3,
                    "Aço" => 10
                ),
                "T3" => array(
                    "Ferro" => 3,
                    "Aço" => 10
                ),
                "T4" => array(
                    "Ferro" => 3,
                    "Aço" => 10
                ),
                "T5" => array(
                    "Ferro" => 3,
                    "Aço" => 10
                ),
                "A1" => array(
                    "Ferro" => 3,
                    "Aço" => 10
                ),
                "T6" => array(
                    "Ferro" => 3,
                    "Aço" => 10
                ),
                "T7" => array(
                    "Ferro" => 3,
                    "Aço" => 10
                ),
            ),
            "Katar" => array(
               "T1" => array(
                    "Ferro" => 3,
                    "Aço" => 10
                ),
                "T2" => array(
                    "Ferro" => 3,
                    "Aço" => 10
                ),
                "T3" => array(
                    "Ferro" => 3,
                    "Aço" => 10
                ),
                "T4" => array(
                    "Ferro" => 3,
                    "Aço" => 10
                ),
                "T5" => array(
                    "Ferro" => 3,
                    "Aço" => 10
                ),
                "A1" => array(
                    "Ferro" => 3,
                    "Aço" => 10
                ),
                "T6" => array(
                    "Ferro" => 3,
                    "Aço" => 10
                ),
                "T7" => array(
                    "Ferro" => 3,
                    "Aço" => 10
                ),
            ),
            "Soqueira" => array(
                "T1" => array(
                    "Ferro" => 3,
                    "Aço" => 10
                ),
                "T2" => array(
                    "Ferro" => 3,
                    "Aço" => 10
                ),
                "T3" => array(
                    "Ferro" => 3,
                    "Aço" => 10
                ),
                "T4" => array(
                    "Ferro" => 3,
                    "Aço" => 10
                ),
                "T5" => array(
                    "Ferro" => 3,
                    "Aço" => 10
                ),
                "A1" => array(
                    "Ferro" => 3,
                    "Aço" => 10
                ),
                "T6" => array(
                    "Ferro" => 3,
                    "Aço" => 10
                ),
                "T7" => array(
                    "Ferro" => 3,
                    "Aço" => 10
                ),
            ),
            "Escudo" => array(
               "T1" => array(
                    "Ferro" => 3,
                    "Aço" => 10
                ),
                "T2" => array(
                    "Ferro" => 3,
                    "Aço" => 10
                ),
                "T3" => array(
                    "Ferro" => 3,
                    "Aço" => 10
                ),
                "T4" => array(
                    "Ferro" => 3,
                    "Aço" => 10
                ),
                "T5" => array(
                    "Ferro" => 3,
                    "Aço" => 10
                ),
                "A1" => array(
                    "Ferro" => 3,
                    "Aço" => 10
                ),
                "T6" => array(
                    "Ferro" => 3,
                    "Aço" => 10
                ),
                "T7" => array(
                    "Ferro" => 3,
                    "Aço" => 10
                ),
            ),
        );

        if (isset($armas[$arma]) && isset($armas[$arma][$tier])) {
            echo $arma . "<br>";
            echo $tier . "<br>";
            echo "Materiais:";
            $numMateriais = count($armas[$arma][$tier]);
            $i = 1;
            foreach ($armas[$arma][$tier] as $materiais => $valor) {
                echo $materiais . ': ' . $valor;
                if ($i < $numMateriais) {
                   echo " / ";
                } else {
                    echo ".<br>";
                }
                $i++;
            }
        } else {
            echo "Dados informados incorreto.";
        }
    }
?>