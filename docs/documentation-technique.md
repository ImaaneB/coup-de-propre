# Documentation technique — Coup de Propre

## 1. Présentation du projet

Coup de Propre est une application web de démonstration qui présente des prestations de ménage à domicile et permet d’envoyer une demande d’intervention.

Le projet valorise le savoir-faire et le professionnalisme des femmes qui exercent le métier de femme de ménage.

## 2. Fonctionnalités

Le site permet à une visiteuse ou un visiteur de :

- consulter la présentation de Coup de Propre ;
- découvrir trois prestations : ménage régulier, ménage ponctuel et grand nettoyage ;
- consulter les engagements du service ;
- remplir et envoyer une demande ;
- recevoir une confirmation après l’enregistrement.

La demande est enregistrée comme nouvelle. L’application ne vérifie pas automatiquement la disponibilité d’une professionnelle.

## 3. Technologies utilisées

- **HTML5** : structure des pages.
- **CSS3** : présentation visuelle et adaptation aux écrans mobiles.
- **PHP** : réception et vérification des données du formulaire.
- **PDO** : connexion à MySQL et exécution d’une requête préparée.
- **MySQL** : stockage des demandes.
- **XAMPP** : environnement local de développement.
- **phpMyAdmin** : consultation et gestion de la base locale.

## 4. Organisation des fichiers

```text
Coup de Propre/
├── assets/
│   └── css/
│       └── style.css
├── config/
│   └── database.php
├── database/
│   └── schema.sql
├── docs/
│   ├── diagrammes/
│   ├── documentation-technique.md
│   └── plan-de-tests.md
├── pages/
│   ├── confirmation.php
│   └── demande.php
├── index.php
└── README.md