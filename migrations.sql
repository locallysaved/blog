CREATE DATABASE blog;
USE blog;

CREATE TABLE posts (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    content VARCHAR(5200) NOT NULL
);

INSERT INTO posts
(content)
VALUES
("Lieldienas nāk!"),
("Lieldienas nav pat tuvu!"),
("zZzZzZzZzZzZzZzZzZzZ....z.. z.."),
("As a digital assistant, I am unable to answer the question");