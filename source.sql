CREATE DATABASE blog;
USE blog;

CREATE TABLE categories (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    category_name VARCHAR(25) NOT NULL
);

INSERT INTO categories
(category_name)
VALUES
("Svētki"),
("Mūzika"),
("Sports");