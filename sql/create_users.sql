USE register;
TRUNCATE TABLE users;
INSERT INTO users (user_name, user_email, user_password, user_stage)
VALUES ('admin', 'admin@correo.es', md5('cuenca123'), 3),
('autor', 'autor@correo.es', md5('cuenca123'), 2),
('invitado', 'invitado@correo.es', md5('cuenca123'), 1);