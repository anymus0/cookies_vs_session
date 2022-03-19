/* create a test user */
/* password: asd */
INSERT INTO users(userName, passwordHash) VALUES ('test user', '7815696ecbf1c96e6894b779456d330e');

/* todo example */
INSERT INTO todos(title, completed, createdAt, createdBy) VALUES ('Write some code', '0', '2022-03-19', '1');