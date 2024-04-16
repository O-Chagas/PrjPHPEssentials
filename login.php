<?php


renderizarMensagem($_POST["senha"], $_POST["senha"]);
//Rotina ou função ou método para pegar o perfil do usuario
$perfil = "ADM";
carregarOpcoes($perfil);

//ADM acesso a todas as 9 funções do menu
//VEN acesso a 3 funções do menu
//CLI acesso a 2 funções do menu

/*$variavel = 140;
$variavel = "false";

echo"Bem vindo, <b>" . $user . PHP_EOL . "</b> <br> O valor da variável é " . $variavel . "<br>";
*/

//OPERADOR TERNÁRIO - o famoso if de uma linha
//Exemplo 1
// condição ? resultado se for true : resultado se for false;
//echo ($user == "juquinha@jspizzas.com.br" && $pwd == "1234") ? "<span> Bem vindo,  " . $user . "! </span>" : "<span> Login ou senha inválidos!!! </span>";

//Exemplo 2
// $clienteAtivo = true;
// echo ($clienteAtivo) ? "Cliente Ativo" : "Cliente Inativo";


function carregarOpcoes(string $opcaoPerfil)
{
    if ($opcaoPerfil == "ADM") {
        renderizarMenu(6);
        // echo "<ul>";
        // for ($i = 1; $i <= 6; $i++) {
        //     echo "<li><a href=\"\">Opção " . $i . "</a></li>";
        // }
        //echo "</ul>";
    } else if ($opcaoPerfil == "VEN") {
        renderizarMenu(3);
        // $i = 1;
        // do {
        //     echo "<li><a href=\"\">Opção " . $i . "</a></li>";
        //     $i++;
        // } while ($i <= 3);
    } else if ($opcaoPerfil == "CLI") {
        renderizarMenu(2);
        // $i = 1;
        // while ($i <= 2) {
        //     echo "<li><a href=\"\">Opção " . $i . "</a></li>";
        //     $i++;
        // }
    }
}

function renderizarMenu(int $numeroPerfil) {
    echo "<ul>";
    for ($i = 1; $i <= $numeroPerfil; $i++) {
        echo "<li><a href=\"\">Opção " . $i . "</a></li>";        
    }
    echo "</ul>";    
}

function renderizarMensagem(string $login, string $senha) {
    if (validarUsuario($login, $senha)) {
        echo "<span> Bem vindo,  " . $login . "! </span>";
    } else {
        echo "<span> Login ou senha inválidos!!! </span>";
    }
}

function validarUsuario(string $login, string $senha) {    
        return ($login == "juquinha@jspizzas.com.br" && $senha == "1234") ? true : false;
}