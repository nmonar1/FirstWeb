DROP DATABASE IF EXISTS essence;
CREATE DATABASE IF NOT EXISTS essence;

USE essence;

CREATE TABLE IF NOT EXISTS users (
    userId BIGINT(11) NOT NULL AUTO_INCREMENT,
    fullname VARCHAR(50) NOT NULL DEFAULT "",
    email VARCHAR(50) NOT NULL DEFAULT "",
    username VARCHAR(50) NOT NULL DEFAULT "",
    password VARCHAR(60) NOT NULL DEFAULT "",
    dateCreated DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP(),
    dateUpdated DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP(),
    PRIMARY KEY (userId),
    UNIQUE KEY (email),
    UNIQUE KEY (username)
);


CREATE TABLE IF NOT EXISTS products (
    product_id BIGINT(11) NOT NULL AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    price DECIMAL(10, 2) NOT NULL,
    dateCreated DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP(),
    dateUpdated DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP(),
    PRIMARY KEY (product_id)
);
