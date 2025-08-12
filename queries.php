<?php

function getAllProjectsSqlQuery(): string
{
    return "SELECT p.name FROM `users_projects` up
            JOIN projects p ON up.project_id = p.id
            WHERE up.user_id = 1";
}

function getAllTasksSqlQuery(): string
{
    return "SELECT t.name AS task, p.name AS project, is_done, finished_at  FROM tasks t
            JOIN projects p ON p.id = t.project_id
            WHERE t.user_id = 1";
}