  CREATE DATABASE parking;
  USE parking;
  DROP TABLE parkings;
  CREATE TABLE parkings (
    id_parking INT AUTO_INCREMENT,
    CONSTRAINT parkings_pk PRIMARY KEY (id_parking),
    nombre VARCHAR(20),
    direccion VARCHAR(50)
  );

  CREATE TABLE plazas(
    id_plaza INT AUTO_INCREMENT,
    modo_plaza BOOLEAN,
    id_parking INT,
    CONSTRAINT plazas_pk1 PRIMARY KEY (id_plaza,id_parking)

  );

  CREATE USER 'parking'@'localhost' IDENTIFIED by 'parking';
  GRANT SELECT,UPDATE ON parking.* TO parking@localhost;

  INSERT INTO parkings VALUES (NULL ,'ejemplo','ejemplo');
  INSERT INTO plazas VALUES (NULL ,0,1);
  INSERT INTO plazas VALUES (NULL ,0,1);
  INSERT INTO plazas VALUES (NULL ,0,1);
  INSERT INTO plazas VALUES (NULL ,0,1);
  INSERT INTO plazas VALUES (NULL ,0,1);
  INSERT INTO plazas VALUES (NULL ,0,1);
  INSERT INTO plazas VALUES (NULL ,0,1);
  INSERT INTO plazas VALUES (NULL ,0,1);

COMMIT ;