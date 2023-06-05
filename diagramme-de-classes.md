# Diagramme de Classes

```
+---------------+             +-------------+
|     Client    |             |  Transport  |
+---------------+             +-------------+
|  id           |             |  id         |
|  nom          |             |  nom        |
|  prenom       |             |  prenom     |
|  email        |             |  email      |
|  mot_de_passe |             |  mot_de_passe |
+---------------+             +-------------+

       ^                          ^
       |                          |
 1     |                          |     1
+---------------+             +-------------+
|   Reservation |             |   Moto      |
+---------------+             +-------------+
|  id           |             |  id         |
|  date         |             |  modele     |
|  heure        |             |  marque     |
|  nb_personnes |             |  annee      |
|  client_id    |             |  couleur    |
|  transporteur_id |          +-------------+
|  moto_id      |
|  avis_id      |
+---------------+

       ^
       |
 1     |
+---------------+
|      Avis     |
+---------------+
|  id           |
|  note         |
|  commentaire  |
|  client_id    |
|  reservation_id |
+---------------+

       ^
       |
n     |
+---------------+
|     Visite    |
+---------------+
|  id           |
|  date         |
|  heure        |
+---------------+

       ^
       |
n     |
+---------------+
|  Disponibilite|
+---------------+
|  id           |
|  moto_id      |
|  visite_id    |
+---------------+


```

Ce diagramme de classes représente les différentes entités du système et les relations entre elles. Les principales classes sont :

- Client : représente un utilisateur qui peut réserver une visite en moto.
- Transporteur : représente un utilisateur qui peut accepter ou refuser une réservation.
- Reservation : représente une réservation effectuée par un client pour une visite en moto.
- Avis : représente l'avis laissé par un client sur une visite en moto.
- Moto : représente une moto disponible pour une visite.
- Visite : représente une visite disponible pour une réservation.
