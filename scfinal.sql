CREATE DATABASE chef_cuisine;
USE chef_cuisine;

CREATE TABLE role (
    id_role INT(11) AUTO_INCREMENT PRIMARY KEY,
    nom_role VARCHAR(50) NOT NULL UNIQUE
);


CREATE TABLE user (
    id_user INT(11) AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100) NOT NULL,
    pernom VARCHAR(100) NOT NULL,
    email VARCHAR(150) NOT NULL UNIQUE,
    password VARCHAR(20) NOT NULL,
    telephone VARCHAR(150),
    adresse TEXT,
    id_role INT(11),
    FOREIGN KEY (id_role) REFERENCES role(id_role)
);


CREATE TABLE menu (
    id_menu INT(11) AUTO_INCREMENT PRIMARY KEY,
    titre VARCHAR(100) NOT NULL,
    description TEXT,
    image_path VARCHAR(255)  
);


CREATE TABLE reservation (
    id_reservation INT(11) AUTO_INCREMENT PRIMARY KEY,
    id_user INT(11),
    id_menu INT(11),
    dateReservation DATE NOT NULL,
    timeReservation TIME NOT NULL,
    nbrPersonne INT(11) NOT NULL,
    status ENUM('en attente', 'accepter', 'refuser') DEFAULT 'en attente',
    FOREIGN KEY (id_user) REFERENCES user(id_user),
    FOREIGN KEY (id_menu) REFERENCES menu(id_menu)
);


CREATE TABLE plat (
    id_plat INT(11) AUTO_INCREMENT PRIMARY KEY,
    categorie VARCHAR(50) NOT NULL,
    description TEXT,
    id_menu INT(11),
    pathImage VARCHAR(255),  
    prix DECIMAL(10,2) NOT NULL,
    FOREIGN KEY (id_menu) REFERENCES menu(id_menu)
);

CREATE TABLE menu_palt(
   id_menu INT(11),
   id_plat INT(11),
   FOREIGN KEY (id_menu) REFERENCES  MENU(id_menu),
   FOREIGN KEY (id_plat) REFERENCES  plate(id_plat),
   constraint primary key(id_menu,id_plat)
);

insert into user(nom,pernom,email,password,telephone,adresse,id_role)
values("chef","ichrak","ichrak@gmail.com","$2y$10$xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx","06123456789","youcode",1);


alter table user 
modify password VARCHAR(255);