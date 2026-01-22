# Analyse du cahier des charges  
## Projet Cassandre Communication – Vision fonctionnelle

Ce document constitue une première analyse fonctionnelle du cahier des charges fourni par Cassandre Communication.  
Il vise à clarifier les rôles, les publics concernés et la séparation des responsabilités au sein de la future plateforme, avant toute considération technique ou applicative.

L’objectif n’est pas de décrire l’implémentation, mais de poser un cadre clair permettant une modélisation cohérente du système d’information et une évolution progressive du projet (V1 puis V2).

---

## Séparation des rôles – RBAC (Role Based Access Control)

Le cahier des charges insiste fortement sur une **séparation stricte des fonctions** afin de garantir :
- la confidentialité des audits,
- l’impartialité des certifications,
- la cohérence du traitement administratif.

Chaque utilisateur appartient à **un rôle principal unique**, qui détermine :
- les écrans accessibles,
- les actions autorisées,
- les données visibles.

Un changement de rôle n’est pas automatique et doit faire l’objet d’une validation explicite et traçable.

Les rôles internes identifiés sont notamment :
- Auditeur
- Responsable de mission
- Examinateur
- Service administratif
- Direction (supervision)

Cette séparation implique que certaines données existent dans le système sans être accessibles à tous les rôles (par exemple, les contenus techniques d’un audit ne sont pas visibles par le service administratif).

---

## Partie ERP – Accès réservé aux employés

La partie ERP de la plateforme est strictement interne à l’entreprise Cassandre Communication.

Elle permet notamment :
- la gestion des clients professionnels,
- la création et le suivi des audits,
- la planification des missions,
- le dépôt et l’archivage de documents liés aux audits,
- la génération et le suivi des factures.

Chaque employé accède uniquement aux informations nécessaires à l’exercice de sa fonction :
- un auditeur ne voit que les audits auxquels il est affecté,
- le service administratif gère la facturation sans accès au contenu technique,
- les examinateurs n’ont aucun accès aux audits.

Cette logique impose une structuration claire des données et des droits dès la conception du système.

---

## Partie publique – Accès web externe

La plateforme comporte également une partie accessible depuis l’extérieur, destinée à différents types de publics.  
Ces accès ne donnent pas tous les mêmes droits ni les mêmes possibilités.

Trois niveaux principaux sont identifiés.

---

### Visiteurs

Les visiteurs sont des utilisateurs non authentifiés.

Ils peuvent :
- consulter la vitrine de présentation de l’entreprise,
- accéder à une documentation pédagogique libre,
- découvrir le catalogue des certifications proposées.

Ils ne peuvent effectuer aucune action engageante (achat, inscription, dépôt de contenu).

---

### Candidats

Les candidats sont des utilisateurs authentifiés souhaitant passer une certification.

Ils peuvent :
- créer un compte personnel,
- acheter une certification,
- accéder aux ressources associées à leur parcours,
- s’inscrire à une session d’examen,
- consulter leurs résultats.

Un candidat n’a aucun accès aux données liées aux audits clients ni aux outils internes de l’entreprise.

---

### Entreprises et associations (clients professionnels)

Les entreprises, collectivités ou associations sont des clients professionnels de Cassandre Communication.

Elles interagissent avec la plateforme via un ou plusieurs comptes utilisateurs représentant l’organisation.

Elles peuvent notamment :
- consulter l’état d’avancement de leurs audits,
- accéder aux documents contractuels et rapports finaux,
- recevoir les factures liées aux prestations réalisées.

Les informations sensibles collectées lors des audits sont soumises à des règles strictes de conservation, d’anonymisation ou de suppression, conformément aux engagements contractuels.

---

## Remarque de structuration

Cette distinction entre :
- utilisateurs internes (ERP),
- utilisateurs externes (public, candidats, clients),

est structurante pour l’ensemble du projet.  
Elle guide à la fois :
- la modélisation des données,
- la gestion des rôles,
- la conception des interfaces,
- et les évolutions prévues en version V2.
