# Dictionnaire des données : ébauche

## Entité : Utilisateur

| Attribut       | Type  | Description                               |
|----------------|------------------|-------------------------------------------|
| Id_Utilisateur | INT, PK          | Identifiant unique de l’utilisateur.      |
| nom            | VARCHAR(100)     | Nom de famille de l’utilisateur.          |
| prenom         | VARCHAR(100)     | Prénom de l’utilisateur.                  |
| email          | VARCHAR(255)     | Adresse email de connexion (unique).      |
| mdpHash        | VARCHAR(255)     | Empreinte du mot de passe.                |

## Entité : Role

| Attribut | Type  | Description                                              |
|----------|------------------|----------------------------------------------------------|
| Id_Role  | INT, PK          | Identifiant unique du rôle.                              |
| type     | VARCHAR(50)      | Intitulé du rôle (auditeur, examinateur, admin, etc.).  |
| permission | VARCHAR(50)           | Description synthétique des permissions associées.       |

## Entité : Client

| Attribut      | Type  | Description                                            |
|---------------|------------------|--------------------------------------------------------|
| Id_Client     | INT, PK          | Identifiant unique du client.                         |
| raison_sociale| VARCHAR(255)     | Raison sociale ou nom du client.                      |
| type_client   | VARCHAR(50)      | Type de client (entreprise, collectivité, association, particulier…). |

## Entité : Mission_audit

| Attribut        | Type  | Description                               |
|-----------------|------------------|-------------------------------------------|
| Id_Mission_audit| INT, PK          | Identifiant de la mission d’audit.        |
| date_debut      | DATE             | Date de début de la mission.              |
| date_fin        | DATE             | Date de fin effective de la mission.      |

## Entité : Document_juridique

| Attribut              | Type  | Description                                         |
|-----------------------|------------------|-----------------------------------------------------|
| Id_Document_juridique | INT, PK          | Identifiant du document juridique.                  |
| type_document         | VARCHAR(50)      | Type (lettre de mission, mandat, NDA, etc.).        |

## Entité : Observation_audit

| Attribut             | Type  | Description                               |
|----------------------|------------------|-------------------------------------------|
| Id_Observation_audit | INT, PK          | Identifiant de l’observation.             |
| date_saisie          | DATETIME         | Date et heure de saisie.                  |
| contenu              | TEXT             | Description détaillée de l’observation.   |

## Entité : Rapport_audit

| Attribut         | Type  | Description                               |
|------------------|------------------|-------------------------------------------|
| Id_Rapport_audit | INT, PK          | Identifiant du rapport d’audit.           |
| date_validation  | DATE             | Date de validation du rapport.            |

## Entité : Commande

| Attribut      | Type  | Description                               |
|---------------|------------------|-------------------------------------------|
| Id_Commande   | INT, PK          | Identifiant de la commande.              |
| date_commande | DATE             | Date de création de la commande.         |

## Entité : Facture

| Attribut      | Type  | Description                               |
|---------------|------------------|-------------------------------------------|
| Id_facture    | INT, PK          | Identifiant de la facture.                |
| date_emission | DATE             | Date d’émission de la facture.            |
| montant       | DECIMAL          | Montant total de la facture.              |

## Entité : Certification

| Attribut         | Type  | Description                               |
|------------------|------------------|-------------------------------------------|
| Id_Certification | INT, PK          | Identifiant de la certification.          |
| libelle          | VARCHAR(255)     | Nom de la certification.                  |
| montant          | DECIMAL          | Prix de la certification.                 |

## Entité : Dossier_candidat

| Attribut           | Type  | Description                               |
|--------------------|------------------|-------------------------------------------|
| Id_Dossier_candidat| INT, PK          | Identifiant du dossier candidat.          |
| date_creation      | DATE             | Date de création du dossier.              |

## Entité : Session_examen

| Attribut          | Type  | Description                               |
|-------------------|------------------|-------------------------------------------|
| Id_Session_examen | INT, PK          | Identifiant de la session d’examen.       |
| date_examen       | DATETIME         | Date et éventuellement heure de la session.|

## Entité : Evaluation

| Attribut        | Type  | Description                               |
|-----------------|------------------|-------------------------------------------|
| Id_Evaluation   | INT, PK          | Identifiant de l’évaluation.              |
| note            | DECIMAL          | Note obtenue à la certification.          |
| appreciation    | TEXT             | Commentaire qualitatif.                   |
| date_evaluation | DATE             | Date de l’évaluation.                     |
