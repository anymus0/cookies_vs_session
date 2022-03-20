/* create a test user */
/* password: asd */
INSERT INTO users(userName, passwordHash) VALUES ('testUser', '7815696ecbf1c96e6894b779456d330e');
INSERT INTO users(userName, passwordHash) VALUES ('asd', '7815696ecbf1c96e6894b779456d330e');

/* todo example */
INSERT INTO todos(title, createdAt, createdBy) VALUES ('Write some code', '2022-03-19', '1');
INSERT INTO todos(title, createdAt, createdBy) VALUES ('Do some stuff', '2022-03-19', '2');