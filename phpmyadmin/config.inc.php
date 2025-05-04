<?php
//Chiffrer les cookies de connexion dans phpmyadmin
$cfg['blowfish_secret'] = 'motdepasse';

$i = 0;

$i++;

//la methode d'authentification sera via cookie
//l'utilisateur devra s'authentifier manuellement(login/mot de passe)
$cfg['Servers'][$i]['auth_type'] = 'cookie';

//Sécifie l'adresse du serveur mysql auquel phpMyAdmin va se connecter
//Ici, db est le nom du conteneur docker (defini dans le docker-compose.yml)
$cfg['Servers'][$i]['host'] = 'mysql__db';

//compression des communication avec le serveur MySQL
$cfg['Servers'][$i]['compress'] = false;

//Permet aux utulisateurs de se connecter meme sans mot de passe
$cfg['Servers'][$i]['AllowNoPassword'] = true;

//durée de validite du cookie de connexion
$cfg['LoginCookieValidity'] = 3600;
