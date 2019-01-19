<?php

$recepient = "mailmail89@mail.ru";
$sitename = "Логист48";

$frplace = trim($_GET["frplace"]);
$tplace = trim($_GET["tplace"]);
$vol = trim($_GET["vol"]);
$comment = trim($_GET["comment"]);
$phone = trim($_GET["phone"]);
$email = trim($_GET["email"]);
$calendar =trim($_GET["calendar"]);

$pagetitle = "Новая заявка на расчет цены с сайта \"$sitename\"";
$message = "Отправка из: $frplace \nМесто доставки:$tplace\nОбъём перевоздки: $vol\nДата: $calendar \nТелефон: $phone \nemail: $email \nКомментарий: $comment";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");
