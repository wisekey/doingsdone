<?php
$show_complete_tasks = rand(1, 0);
$projects = [
    "Входящие",
    "Учеба",
    "Работа",
    "Домашние дела",
    "Авто"
];
$tasks = [
    [
        "name" => "Собеседование в IT компании",
        "finished_date" => "	01.12.2019",
        "project" => $projects[2],
        "is_done" => false
    ],
    [
        "name" => "Выполнить тестовое задание",
        "finished_date" => "25.12.2019",
        "project" => $projects[2],
        "is_done" => false
    ],
    [
        "name" => "Встреча с другом",
        "finished_date" => "22.12.2019",
        "project" => $projects[0],
        "is_done" => false
    ],
    [
        "name" => "Сделать задание первого раздела",
        "finished_date" => "21.12.2019",
        "project" => $projects[1],
        "is_done" => true
    ],
    [
        "name" => "Купить корм для кота",
        "finished_date" => null,
        "project" => $projects[3],
        "is_done" => false
    ],
    [
        "name" => "Заказать пиццу",
        "finished_date" => null,
        "project" => $projects[3],
        "is_done" => false
    ],
];
$title = "Задачи";

