-- Ajout d'un client
INSERT INTO client (nom, prenom, email, mot_de_passe)
VALUES ('Nom du client', 'Prénom du client', 'email@example.com', 'password');

-- Ajout d'un transporteur
INSERT INTO transporteur (nom, prenom, email, password)
VALUES ('Nom du transporteur', 'Prénom du transporteur', 'email@example.com', 'password');

-- Ajout d'une réservation
INSERT INTO reservation (client_id, date_reservation, visite_id, moto_id)
VALUES (4, '2023-04-28 10:00:00', 1, 2);

-- Ajout d'un avis
INSERT INTO avis (client_id, transporteur_id, visite_id, note, commentaire)
VALUES (1, 2, 1, 4, 'Bienvenue a bord');

-- Ajout d'une moto
INSERT INTO moto (marque, modele, annee)
VALUES ('Yamaha', 'MT-07', 2022);

-- Ajout d'une visite
INSERT INTO visite (nom, description, duree, prix, moto_id)
VALUES ('Tour de Paris', 'Visite guidée des monuments parisiens en moto', 120, 150.00, 1);

-- Ajouter une disponibilité pour une visite et une moto spécifiques :
INSERT INTO Disponibilite (moto_id, visite_id) VALUES ('moto_id', 'visite_id');
