CREATE TABLE IF NOT EXISTS  `Scores`
(
    `id`         int auto_increment PRIMARY KEY,
    `user_id`    int,
    `score`  int DEFAULT 0,
    `created`    timestamp default current_timestamp,
    `modified`   timestamp default current_timestamp on update current_timestamp,
    FOREIGN KEY (`user_id`) REFERENCES Users(`id`),
    check (score > 0)
)