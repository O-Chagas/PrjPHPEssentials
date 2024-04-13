<?php
$user = "juquinha@jspizzas.com.br";
$pwd = "1234";
$perfil = "CLI";

//ADM acesso a todas as 9 funções do menu
//VEN acesso a 3 funções do menu
//CLI acesso a 2 funções do menu

/*$variavel = 140;
$variavel = "false";

echo"Bem vindo, <b>" . $user . PHP_EOL . "</b> <br> O valor da variável é " . $variavel . "<br>";
*/

if ($user == "juquinha@jspizzas.com.br" && $pwd == "1234") {
    echo "<span> Bem vindo,  " . $user . "! </span>";
    carregarOpcoes($perfil);
} else {
    echo "<span> Login ou senha inválidos!!! </span>";
}

function carregarOpcoes(string $opcapPerfil)
{
    if ($opcapPerfil == "ADM") {
        echo "<ul>";
        for ($i = 1; $i <= 6; $i++) {
            echo "<li><a href=\"\">Opção " . $i . "</a></li>";
        }
        echo "</ul>";
    } else if ($opcapPerfil == "VEN") {
        $i = 1;
        do {
            echo "<li><a href=\"\">Opção " . $i . "</a></li>";
            $i++;
        } while ($i <= 3);
    } else if ($opcapPerfil == "CLI") {
        $i = 1;
        while ($i <= 2) {
            echo "<li><a href=\"\">Opção " . $i . "</a></li>";
            $i++;
        }
    }
}
