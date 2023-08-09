ALTER TABLE persona_telefono ADD FOREIGN KEY (id_persona) REFERENCES persona (id_persona);
ALTER TABLE cliente ADD FOREIGN KEY (id_persona) REFERENCES persona (id_persona);
ALTER TABLE ventas ADD FOREIGN KEY (id_persona) REFERENCES persona (id_persona);
ALTER TABLE ventas ADD FOREIGN KEY (id_mochila) REFERENCES mochila (id_mochila);
ALTER TABLE carrito ADD FOREIGN KEY (id_mochila) REFERENCES mochila (id_mochila);

CREATE USER 'user1'@'localhost' IDENTIFIED BY '123456';
GRANT ALL PRIVILEGES ON mochilas.* TO 'user1'@'localhost';
FLUSH PRIVILEGES;
SELECT * FROM mysql.user;

INSERT INTO ciudades(id_ciudad, ciudad) VALUES (1, 'Lima');
INSERT INTO ciudades(id_ciudad, ciudad) VALUES (2, 'Arequipa');
INSERT INTO ciudades(id_ciudad, ciudad) VALUES (3, 'Trujillo');
INSERT INTO ciudades(id_ciudad, ciudad) VALUES (4, 'Chiclayo');
INSERT INTO ciudades(id_ciudad, ciudad) VALUES (5, 'Cusco');
INSERT INTO ciudades(id_ciudad, ciudad) VALUES (6, 'Piura');
INSERT INTO ciudades(id_ciudad, ciudad) VALUES (7, 'Iquitos');
INSERT INTO ciudades(id_ciudad, ciudad) VALUES (8, 'Huancayo');
INSERT INTO ciudades(id_ciudad, ciudad) VALUES (9, 'Tacna');
INSERT INTO ciudades(id_ciudad, ciudad) VALUES (10, 'Pucallpa');
INSERT INTO ciudades(id_ciudad, ciudad) VALUES (11, 'Chimbote');
INSERT INTO ciudades(id_ciudad, ciudad) VALUES (12, 'Juliaca');
INSERT INTO ciudades(id_ciudad, ciudad) VALUES (13, 'Ica');
INSERT INTO ciudades(id_ciudad, ciudad) VALUES (14, 'Cajamarca');
INSERT INTO ciudades(id_ciudad, ciudad) VALUES (15, 'Sullana');
INSERT INTO ciudades(id_ciudad, ciudad) VALUES (16, 'Ayacucho');
INSERT INTO ciudades(id_ciudad, ciudad) VALUES (17, 'Chincha Alta');
INSERT INTO ciudades(id_ciudad, ciudad) VALUES (18, 'Huaraz');
INSERT INTO ciudades(id_ciudad, ciudad) VALUES (19, 'Tarapoto');
INSERT INTO ciudades(id_ciudad, ciudad) VALUES (20, 'Puno');
INSERT INTO ciudades(id_ciudad, ciudad) VALUES (21, 'Tumbes');
INSERT INTO ciudades(id_ciudad, ciudad) VALUES (22, 'Cerro de Pasco');
INSERT INTO ciudades(id_ciudad, ciudad) VALUES (23, 'Huaral');
INSERT INTO ciudades(id_ciudad, ciudad) VALUES (24, 'Pisco');
INSERT INTO ciudades(id_ciudad, ciudad) VALUES (25, 'Talara');
INSERT INTO ciudades(id_ciudad, ciudad) VALUES (26, 'Chosica');
INSERT INTO ciudades(id_ciudad, ciudad) VALUES (27, 'Huanuco');
INSERT INTO ciudades(id_ciudad, ciudad) VALUES (28, 'Catacaos');
INSERT INTO ciudades(id_ciudad, ciudad) VALUES (29, 'Paita');
INSERT INTO ciudades(id_ciudad, ciudad) VALUES (30, 'Sechura');
INSERT INTO ciudades(id_ciudad, ciudad) VALUES (31, 'Julian');

INSERT INTO mochilas.mochila (id_mochila,nombre_modelo,marca,stock,precio,f_ingreso,nombre_img,ruta_img)
VALUES (1,"Eleganchi","PORTA",20,120,'2023-08-07',"Porta_model1","Porta_model1.jpg");

INSERT INTO mochilas.mochila (id_mochila,nombre_modelo,marca,stock,precio,f_ingreso,nombre_img,ruta_img)
VALUES (2,"Red Wing","PORTA",20,110,'2023-08-07',"Porta_model2","Porta_model2.jpg");



