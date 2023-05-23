# pretooty
Projet transversal pour la formation Développement Web et Web Mobile de l'École Atypique (86360 Chasseneuil-du-Poitou).


## Équipe de développement :
  - Élodie Angenard
  - Madeline Morisset


## Description du projet : 
  ### Demande client (projet) : 
      Créer une plateforme d'échanges d'outils (outilthèque)

  ### Demande client :  
     
        - les "Utilisateurs" y proposent des outils à prêter
        - pour pouvoir utiliser la plateforme, une personne doit s’inscrire (pseudonyme et adresse mail)
          et est appellé ensuite "Utilisateur"
        - un "Utilisateur" peut accéder à son espace personnel (après inscription), où il peut voir et modifier ses informations :
              ● il peut voir les outils qu’il a proposés en tant que Prêteur, et ceux qu'il a emprunté en tant qu’Emprunteur
              ● il peut voir les avis qu’on a laissé sur lui (en tant que Prêteur ou Emprunteur)
              ● il peut voir les avis qu’il a laissé sur les autres Utilisateurs (Prêteurs ou Emprunteurs)
        - la personne qui prête un outil est appelée "Prêteur"
        - la personne qui emprunte un ou plusieurs outils est appelée "Emprunteur"
        - chaque outil appartient à une catégorie
        - lorsqu’un "Prêteur" propose un nouvel outil, il en indique les détails :
              ● nom
              ● catégorie
              ● calendrier de disponibilité
              ● description (consignes, accessoires, etc.))
         - lorsqu'un "Emprunteur" emprunte un outil, il indique les dates de début et de fin d’emprunt
         - le gestionnaire du site peut nommer certains "Utilisateurs" comme "Administrateur", afin de leur permettre d’administrer 
           les "Utilisateurs"; ils peuvent : 
              ●	désactiver un compte Utilisateur
              ●	modifier des informations d’un Utilisateur (pour réinitialiser son mot de passe par exemple, ou lui donner 
                le rôle Administrateur)
              ●	modifier/supprimer un outil d’un Prêteur
              ●	créer, modifier et supprimer une catégorie d’outils, et lister les catégories existantes
         - un "Utilisateur" peut être "Prêteur", "Emprunteur" et parfois même "Administrateur" à la fois
         - la plateforme propose un moteur de recherche permettant de trouver des outils en fonction de différents critères :
               ● catégorie
               ● date de disponibilité
               ● nom
               ● etc.
          - un "Utilisateur" peut réserver un outil déjà en cours d’emprunt (il sera notifié dans son espace personnel 
            dès que l’outil sera disponible et l’outil lui sera automatiquement affecté en prêt)
          - à l'issue d’un prêt, le "Prêteur" peut laisser une évaluation (1 à 5 étoiles) et un commentaire sur l’"Emprunteur"
          - à l'issue d’un prêt, le "Emprunteur" peut laisser une évaluation (1 à 5 étoiles) et un commentaire sur le "Prêteur"
                      
  ### Fonctionnalités : 
          
          - Inscription au site :	
               En tant qu'Utilisateur (Prêteur et Emprunteur), je peux créer mon espace personnel
          - Authentification : 
               En tant qu'Utilisateur (Prêteur et Emprunteur), je peux me connecter à mon espace personnel 
               (login et mot de passe)
          - Panorama des utilisateurs	: 
               En tant qu'Administrateur, je peux voir la liste de tous les Utilisateurs, et en sélectionner 
               un pour afficher les informations de cet Utilisateur
          - Gestion des utilisateurs : 
               En tant qu'Administrateur, je peux modifier les informations d'un compte Utilisateur 
               (mot de passe, actif/intactif, role, etc.)
          - Proposer un outil	: 
               En tant qu'Utilisateur (Prêteur), je peux ajouter, modifier, supprimer un outil en prêt
          - Calendrier de disponibilité (Preteur)	: 
               En tant qu'Utilisateur (Prêteur), je peux indiquer le calendrier de disponibilité d'un des mes outils
           - Liste de mes outils :	
               En tant qu'Utilisateur (Prêteur), je peux voir la liste des mes outils disponibles, et des outils en cours de prêt
           - Emprunt	: 
               En tant qu'Utilisateur (Emprunteur), je peux emprunter un outil. J'indique les dates de début 
               et de fin d'emprunt envisagées
           - Gestion des catégories : 
               En tant qu'Administrateur, je peux créer, modifier et suppirmer des catégories d'outils
           - Rendu	: 
               En tant qu'Utilisateur (Emprunteur), je peux rendre un outil que j'ai emprunté
           - Réservation :	
               En tant qu'Utilisateur (Emprunteur), je peux réserver un outil. Quand il sera rendu à son propriétaire, 
               il me sera preté et j'en serai notifié sur mon espace personnel
           - Alerte de disponibilité	: 
               En tant qu'Utilisateur (Emprunteur), je peux être alerté dès qu'un outil est de nouveau disponible 
               (peu importe son propriétaire)
           - Mes emprunts : 
               En tant qu'Utilisateur (Emprunteur), je peux voir l'historique de mes emprunts (rendus ou en cours d'emprunt)
           - Calendrier de disponibilité (Emprunteur) : 
               En tant qu'Utilisateur (Emprunteur), je peux voir le calendrier de disponibilité d'un outil
           - Evaluation (Emprunteur) :	
               En tant qu'Utilisateur (Emprunteur) d'un outil, je peux laisser une évaluation sur le preteur 
               (1-5 étoiles, commentaire)
           - Evaluation (Prêteur) : 
               En tant qu'Utilisateur (Prêteur) d'un outil qui m'a été emprunté, je peux laisser une évaluation sur l'Emprunteur 
               (1-5 étoiles, commentaire)
           - Recherche d'outil (Nom) :	
               En tant qu'Utilisateur (Prêteur et Emprunteur), je peux effectuer une recherche d'outils basée sur son nom
           - Recherche d'outil (Propriétaire) : 
               En tant qu'Utilisateur (Prêteur et Emprunteur), je peux effectuer une recherche d'outils basée sur son propriétaire
           - Recherche d'outil (Dates) :	
               En tant qu'Utilisateur (Prêteur et Emprunteur), je peux effectuer une recherche d'outils basée sur sa date 
               de disponibilité
           - Recherche d'outil (Catégorie) :	
               En tant qu'Utilisateur (Prêteur et Emprunteur), je peux effectuer une recherche d'outils basée sur sa catégorie
           - Thématisation :	
               En tant qu'Utilisateur (Prêteur et Emprunteur), je peux modifier l'aspect de l'interface 
               (couleur de fond, taille de police de caractères, etc.)
                      
  ### Fonctionnalités ajoutées par les développeurs :
 
            - Recherche d'outil (Emprunteur) : 
                En tant qu'Utilisateur (Prêteur et Emprunteur), je peux effectuer une recherche d'outils basée sur son emprunteur
            - Localisation géographique de l'outils :	
                En tant qu'Utilisateur (Prêteur), je peux indiquer sur la fiche de l'outil où l'emprunteur peut le trouver
            - Évaluation de l'outil :	
                En tant qu'Utilisateur (Prêteur et Emprunteur), je peux évaluer l'état de l'outil
            - Rappel retour de l'outil : 
                En tant qu'Utilisateur (Prêteur), je peux cocher la case "Rappel automatique" afin de rappeler à l'emprunteur 
                que l'on arrive à la date limite pour rendre l'outil
      
