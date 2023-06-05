-- Client : Vérification des informations de connexion
SELECT id, nom, prenom, email FROM Client WHERE email = ? AND mot_de_passe = ?

-- Transporteur : Vérification des informations de connexion
SELECT id, nom, prenom, email FROM Transporteur WHERE email = ? AND mot_de_passe = ?

-- Reservation : Vérification de l'existence d'une réservation pour un client :
SELECT id, date_debut, date_fin, client_id, transporteur_id FROM Reservation WHERE id = ? AND client_id = ?

-- Reservation : Vérification de l'existence d'une réservation pour un transporteur :
SELECT id, date_debut, date_fin, client_id, transporteur_id FROM Reservation WHERE id = ? AND transporteur_id = ?

-- Avis : Vérification de l'existence d'un avis pour un client :
SELECT id, client_id, transporteur_id, reservation_id, note FROM Avis WHERE id = ? AND client_id = ?

-- Avis : Vérification de l'existence d'un avis pour un transporteur :
SELECT id, client_id, transporteur_id, reservation_id, note FROM Avis WHERE id = ? AND transporteur_id = ?

-- Moto : Vérification de la disponibilité d'une moto :
SELECT COUNT(*) FROM Disponibilite WHERE moto_id = :moto_id AND visite_id = :visite_id;

-- Visite : Vérification de la disponibilité d'une visite :
SELECT id, nom, description, duree, prix FROM Visite WHERE id = ? AND NOT EXISTS (SELECT * FROM Reservation WHERE visite_id = Visite.id AND ((date_debut <= ? AND date_fin >= ?) OR (date_debut >= ? AND date_fin <= ?) OR (date_debut <= ? AND date_fin >= ?)))

-- Disponibilité : Obtenir toutes les disponibilités pour une visite donnée :
SELECT * FROM Disponibilite WHERE visite_id = :visite_id;

-- Disponibilité : Obtenir toutes les disponibilités pour une moto donnée :
SELECT * FROM Disponibilite WHERE moto_id = :moto_id;
