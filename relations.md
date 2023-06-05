# Relations

1. La table "Client" possède une relation 1-n avec la table "Reservation" (un client peut avoir plusieurs réservations, mais une réservation ne peut être associée qu'à un seul client)

1. La table "Transporteur" possède une relation 1-n avec la table "Reservation" (un transporteur peut avoir plusieurs réservations, mais une réservation ne peut être associée qu'à un seul transporteur)

1. La table "Visite" possède une relation n-m avec la table "Moto" via la table de liaison "Disponibilité" (une visite peut être associée à plusieurs motos, et une moto peut être utilisée pour plusieurs visites)

1. La table "Reservation" possède une relation 1-1 avec la table "Avis" (une réservation peut avoir un seul avis associé, et un avis est lié à une seule réservation)

1. La table "Client" possède une relation 1-n avec la table "Avis" (un client peut laisser plusieurs avis, mais un avis ne peut être associé qu'à un seul client)

```
+--------+      +--------------+      +-----------+
| Client |------| Reservation  |------| Transport |
+--------+      +--------------+      +-----------+
                             |
                             |
                     +-------+--------+
                     |      Avis      |
                     +----------------+
                             |
                             |
                     +-------+--------+
                     |      Moto      |
                     +----------------+
                             |
                             |
                     +-------+--------+
                     |     Visite     |
                     +----------------+

```
