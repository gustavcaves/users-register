DROP TABLE IF EXISTS users;
CREATE TABLE users(
    user_id INT PRIMARY KEY AUTO_INCREMENT,
    user_name VARCHAR(99) NOT NULL,
    user_email VARCHAR(99) NOT NULL,
    user_password VARCHAR(99) NOT NULL,
    user_stage INT(1) DEFAULT 1,
    user_time_created DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    user_time_updated DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);