<?php

$smarty = new Template();
$smarty->assign('_GET_TEMA', Rotas::get_SiteTEMA());

$smarty->assign('loginRegistro', "Login e Registro");
$smarty->assign('login', "Login");
$smarty->assign('registro', "Registro");
$smarty->assign('usuario', "Usuário");
$smarty->assign('senha', "Senha");
$smarty->assign('email', "Email");
$smarty->assign('enderecoEmail', "Seu endereço de email");
$smarty->assign('seuUsuario', "Seu usuário");
$smarty->assign('suaSenha', "Sua Senha");
$smarty->assign('seuEmail', "Seu Email");
$smarty->assign('lembrarDoSeu', "Lembrar dos eu");
$smarty->assign('emailOuSenha', "usuário ou senha");
$smarty->assign('criarSuaConta', "Criar sua conta");
$smarty->assign('entrarConta', "Entrar na sua conta");


$smarty->display('login.tpl');