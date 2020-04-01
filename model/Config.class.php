<?php
define("ENVIRONMENT", "development"); //versão para maquina local
#define("ENVIRONMENT", "production"); //versão para hospedar


if(ENVIRONMENT == 'development'){
    define('BD_HOST', "localhost");
    define('BD_USER', "root");
    define('BD_SENHA', "");
    define('BD_BANCO', "japa_hortifruti");
    define('BD_PREFIX', "gm_");
}else{
    define('BD_HOST', "localhost");
    define('BD_USER', "u349811508_sale");
    define('BD_SENHA', "]jiF@4EY*j|");
    define('BD_BANCO', "u349811508_japa");
    define('BD_PREFIX', "gm_");
}


class Config{
    //INFORMAÇÕES BÁSICAS DO SITE
    const SITE_URL = "http://localhost";
    const SITE_PASTA = "japahortifruti";
    const SITE_NOME = "Japa Hortifruti";
    const SITE_EMAIL_ADMIN = "contato@gabymodas.com";
    const SITE_EMAIL_SENHA = "Gabymodas$123#";
    const DB_LIMIT_POR_PG = 12;
    const SITE_CEP = '11669309';


    //INFORMAÇÕES PARA PHP MAILLER
    const EMAIL_HOST = "smtp.hostinger.com.br";
    const EMAIL_USER = "contato@gabymodas.com";
    const EMAIL_NOME = "Contato Loja Gaby Modas";
    const EMAIL_SENHA = "Gabymodas$123#";
    const EMAIL_PORTA = 587;
    const EMAIL_SMTPAUTH = true;
    const EMAIL_SMTPSECURE = "false";
    const EMAIL_COPIA = "lojavirtualgabymodas@gmail.com";
}