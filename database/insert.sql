USE system_pagosv2;
INSERT INTO perfiles (rol) VALUES
('Admin'),
('Cliente');
INSERT INTO usuarios (id_perfil, nombre, apellidos, correo, password_user, fecha_creacion) VALUES
(1, 'Karina', 'Servan', 'karina@gmail.com', '$2y$10$VyB557axhfAKE78Sp30vGO6Gw9aXtML.7gBTGUoLt6YGcB6E3B52u','2023-12-12 20:23:00');
INSERT INTO miempresa (nombre) VALUES ('DevSND');
DESCRIBE miempresa;