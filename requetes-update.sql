-- Client : mettre à jour les informations d'un client
UPDATE Client SET nom = 'nouveau_nom', prenom = 'nouveau_prenom', email = 'nouveau_email', mot_de_passe = 'nouveau_mot_de_passe' WHERE id = 1;

-- Transporteur : mettre à jour les informations d'un transporteur
UPDATE Transporteur SET nom = 'nouveau_nom', prenom = 'nouveau_prenom', email = 'nouveau_email', mot_de_passe = 'nouveau_mot_de_passe' WHERE id = 1;

-- Reservation : modifier les dates d'une réservation existante
UPDATE Reservation SET date_debut = '2023-05-01 09:00:00', date_fin = '2023-05-01 12:00:00' WHERE id = 1;

-- Avis : modifier la note et/ou le commentaire d'un avis existant
UPDATE Avis SET note = 4, commentaire = 'Très bonne visite en moto, je recommande !' WHERE id = 1;

-- Moto : modifier les informations d'une moto existante
UPDATE Moto SET marque = 'nouvelle_marque', modele = 'nouveau_modele', annee = 2023 WHERE id = 1;

-- Visite : modifier les informations d'une visite existante
UPDATE Visite SET nom = 'nouveau_nom', description = 'nouvelle_description', duree = 180, prix = 100.00 WHERE id = 1;
