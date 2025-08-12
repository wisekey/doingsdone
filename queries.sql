CREATE TABLE users
(
    ID       INT AUTO_INCREMENT PRIMARY_KEY,
    username VARCHAR(128) NOT NULL UNIQUE,
    password VARCHAR(128),
    email    VARCHAR(128) NOT NULL UNIQUE
)

CREATE TABLE projects
(
    id   INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(128) UNIQUE NOT NULL
);

CREATE TABLE tasks
(
    id          INT AUTO_INCREMENT PRIMARY KEY,
    name        VARCHAR(128) UNIQUE NOT NULL,
    is_done     BOOLEAN,
    finished_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    project_id  INT REFERENCES projects (id),
    user_id     INT REFERENCES users(id)
)