CREATE TABLE `image` (
    `image_id` int(10) unsigned auto_increment,
    `root_relative_url` varchar(255) default null,
    PRIMARY KEY (`image_id`),
    UNIQUE KEY `root_relative_url` (`root_relative_url`)
) CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
