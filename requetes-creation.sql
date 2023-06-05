-- Table "Client"
CREATE TABLE IF NOT EXISTS Client (
  id INT(11) NOT NULL AUTO_INCREMENT,
  nom VARCHAR(255) NOT NULL,
  prenom VARCHAR(255) NOT NULL,
  email VARCHAR(255) NOT NULL,
  password VARCHAR(255) NOT NULL,
  PRIMARY KEY (id)
);

-- Table "Transporteur"
CREATE TABLE IF NOT EXISTS Transporteur (
  id INT(11) NOT NULL AUTO_INCREMENT,
  nom VARCHAR(255) NOT NULL,
  prenom VARCHAR(255) NOT NULL,
  email VARCHAR(255) NOT NULL,
  password VARCHAR(255) NOT NULL,
  PRIMARY KEY (id)
);


-- Table "Reservation"
CREATE TABLE IF NOT EXISTS Reservation (
  id INT(11) NOT NULL AUTO_INCREMENT,
  client_id INT(11) NOT NULL,
  visite_id INT(11) NOT NULL,
  moto_id INT(11) NOT NULL,
  date_reservation DATE NOT NULL,
  PRIMARY KEY (id),
  FOREIGN KEY (client_id) REFERENCES Client(id),
  FOREIGN KEY (visite_id) REFERENCES Visite(id),
  FOREIGN KEY (moto_id) REFERENCES Moto(id)
);


-- Table "Avis"
CREATE TABLE IF NOT EXISTS Avis (
  id INT(11) NOT NULL AUTO_INCREMENT,
  client_id INT(11) NOT NULL,
  visite_id INT(11) NOT NULL,
  transporteur_id INT(11) NOT NULL,
  note INT(11),
  commentaire TEXT,
  PRIMARY KEY (id),
  FOREIGN KEY (client_id) REFERENCES Client(id),
  FOREIGN KEY (visite_id) REFERENCES Visite(id),
  FOREIGN KEY (transporteur_id) REFERENCES Transporteur(id)
);


-- Table "Moto"
CREATE TABLE IF NOT EXISTS Moto (
  id INT(11) NOT NULL AUTO_INCREMENT,
  marque VARCHAR(255) NOT NULL,
  modele VARCHAR(255) NOT NULL,
  annee INT(11),
  couleur VARCHAR(255),
  PRIMARY KEY (id)
);


-- Table "Visite"
CREATE TABLE IF NOT EXISTS Visite (
  id INT(11) NOT NULL AUTO_INCREMENT,
  nom VARCHAR(255) NOT NULL,
  description TEXT,
  duree INT(11),
  prix DECIMAL(10,2),
  PRIMARY KEY (id)
);


-- Table "Disponibilité"
CREATE TABLE IF NOT EXISTS Disponibilite (
  id INT(11) NOT NULL AUTO_INCREMENT,
  moto_id INT(11) NOT NULL,
  visite_id INT(11) NOT NULL,
  PRIMARY KEY (id),
  FOREIGN KEY (moto_id) REFERENCES Moto(id),
  FOREIGN KEY (visite_id) REFERENCES Visite(id)
);
