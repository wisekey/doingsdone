<?php

require "data.php";
require "helpers.php";
require "queries.php";

$conn = mysqli_connect('localhost', 'root', '', 'doingsdone');

if (!$conn) {
    die('Connection failed: ' . mysqli_connect_error());
}

$projectsQuery = mysqli_query($conn, getAllProjectsSqlQuery());
$tasksQuery = mysqli_query($conn, getAllTasksSqlQuery());

if (!$projectsQuery) {
    $error = mysqli_error($conn);
    die('Connection failed: ' . $error);
}

if (!$tasksQuery) {
    $error = mysqli_error($conn);
    die('Connection failed: ' . $error);
}

$projects = mysqli_fetch_all($projectsQuery, MYSQLI_ASSOC);
$tasks = mysqli_fetch_all($tasksQuery, MYSQLI_ASSOC);


$content_page = include_template("main.php", [
    "projects" => $projects,
    "tasks" => $tasks,
    "show_complete_tasks" => $show_complete_tasks,
]);

$layout_page = include_template("layout.php", [
    "title" => $title,
    "content" => $content_page,
    "tasks" => $tasks,
    "show_complete_tasks" => $show_complete_tasks,
]);

print($layout_page);

