# README - Site Web Cuisinier

## Contexte du Projet

Le projet consiste à développer un site web pour un chef cuisinier mondialement reconnu. Ce site web offre une expérience gastronomique unique où les utilisateurs peuvent découvrir des menus exclusifs, réserver des expériences culinaires à domicile et interagir avec le chef.

## Fonctionnalités Principales de la Page Principale

### 1. **Page Utilisateur (Client)**

- **Consultation des Menus** : Les utilisateurs peuvent explorer les menus proposés par le chef.
- **Réservation d'une Expérience Culinaire** : Sélectionner une date, une heure, et le nombre de personnes pour réserver une expérience culinaire.
- **Gestion des Réservations** : Visualiser l'historique des réservations, annuler ou modifier les réservations passées.

### 2. **Page Chef (Dashboard)**

- **Gestion des Réservations** : Accepter ou refuser les demandes de réservation selon la disponibilité.
- **Statistiques du Chef** : Visualiser le nombre de réservations, demandes en attente et approuvées, ainsi que les informations détaillées des clients et de leurs réservations.

## Design et Responsivité

- **Design Moderne et Élégant** : Interface utilisateur raffinée pour représenter le luxe.
- **Responsive Design** : Adaptation automatique du site aux différentes tailles d'écrans (mobile, tablette, desktop).

## Sécurité

- **Hashage des Mots de Passe** : Sécurisation des mots de passe utilisateurs.
- **Protection contre XSS et Injections SQL** : Validation des entrées utilisateurs pour prévenir les attaques.
- **Protection CSRF (Bonus)** : Utilisation de tokens pour sécuriser les actions sensibles (inscriptions, réservations).

## Technologies Utilisées

- **Frontend** : HTML5, CSS3, JavaScript, Bootstrap, SweetAlert, jQuery
- **Backend** : PHP, MySQL

---

## Installation

### Prérequis

- Serveur Web (Apache)
- PHP version 7.4 ou supérieure
- Base de données MySQL

### Étapes d'Installation

1. Clonez ou téléchargez le projet depuis le dépôt.
2. Importez la base de données (`scfinal.sql`) dans MySQL.
3. Configurez le fichier `connexion.php` pour la connexion à la base de données.
4. Lancez le serveur web et accédez au site.

---

## Conclusion

Ce projet vise à fournir une expérience gastronomique de qualité supérieure en ligne. Les utilisateurs peuvent découvrir de nouveaux menus et réserver des expériences culinaires de manière simple et intuitive, tandis que les chefs peuvent facilement gérer leurs réservations et leur profil.
