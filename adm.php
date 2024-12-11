
<?php
// Página de login do administrador
if (isset($_POST['login_adm'])) {
    $login = $_POST['login'];
    $senha = $_POST['senha'];

    if ($login === 'adm' && $senha === 'adm123') {
        session_start();
        $_SESSION['admin_logado'] = true;
        redirecionar('dashboard.php', 'Bem-vindo ao painel de administração!');
    } else {
        redirecionar('index.php', 'Credenciais inválidas!');
    }
}

?>

