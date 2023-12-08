CREATE TABLE `image` (
    `image_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
    `prompt` varchar(2047) DEFAULT NULL,
    `revised_prompt` varchar(2047) DEFAULT NULL,
    `directory` varchar(255) DEFAULT NULL,
    `root_relative_url` varchar(255) DEFAULT NULL,
    PRIMARY KEY (`image_id`),
    UNIQUE KEY `root_relative_url` (`root_relative_url`)
) CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
