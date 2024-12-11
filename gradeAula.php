<?php

function exibirGradeDeAulas() {
    // Exemplo de dados fixos para grade de aulas
    $aulas = [
        ["Segunda-feira", "08:00 - 09:00", "Yoga"],
        ["Terça-feira", "18:00 - 19:00", "Pilates"],
        ["Quarta-feira", "20:00 - 21:00", "HIIT"],
    ];

    foreach ($aulas as $aula) {
        echo "<tr>
                <td>{$aula[0]}</td>
                <td>{$aula[1]}</td>
                <td>{$aula[2]}</td>
              </tr>";
    }
}
?>
