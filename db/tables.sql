CREATE TABLE users (
	id int PRIMARY KEY AUTO_INCREMENT NOT NULL,
    userName varchar(255) NOT NULL,
    passwordHash varchar(255) NOT NULL
);

CREATE TABLE todos (
	id int PRIMARY KEY AUTO_INCREMENT NOT NULL,
    title varchar(255) NOT NULL,
    completed BOOLEAN NOT NULL,
    createdAt DATE NOT NULL,
    createdBy int,
    FOREIGN KEY (createdBy) REFERENCES users(id)
);