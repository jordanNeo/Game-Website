CREATE TABLE IF NOT EXISTS  `CreditHistory`
(
    `id`         int auto_increment PRIMARY KEY,
    `user_id`    int,
    `diff` int,
    `reason` varchar(15) not null COMMENT 'The type of transaction that occurred',
    `created`    timestamp default current_timestamp,
    `modified`   timestamp default current_timestamp on update current_timestamp,
    FOREIGN KEY (`user_id`) REFERENCES Users(`id`),
    constraint ZeroTransferNotAllowed CHECK(diff != 0)
)