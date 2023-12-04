CREATE TABLE `image` (
    `image_id` int(10) unsigned auto_increment,
    `prompt` varchar(2047) default null,
    `revised_prompt` varchar(2047) default null,
    `root_relative_url` varchar(255) default null,
    PRIMARY KEY (`image_id`),
    UNIQUE KEY `root_relative_url` (`root_relative_url`)
) CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
