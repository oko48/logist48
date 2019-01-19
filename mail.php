<?php

$recepient = "mailmail89@mail.ru";
$sitename = "Логист48";

$name = trim($_GET["name"]);
$phone = trim($_GET["phone"]);
$hours = trim($_GET["hours"]);
$calendar =trim($_GET["calendar"]);

$pagetitle = "Новая заявка с сайта \"$sitename\"";
$message = "Имя: $name \nТелефон: $phone \nНа время: $hours \nДата: $calendar";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");
