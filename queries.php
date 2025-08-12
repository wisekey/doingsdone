<?php

function getAllProjectsSqlQuery(): string
{
    return "SELECT p.name FROM users_projects up
            JOIN projects p ON up.project_id = p.id
            WHERE user_id = 1";
}

function getAllTasksSqlQuery(): string
{
    return "SELECT FROM tasks
            WHERE tasks.user_id = 1";
}