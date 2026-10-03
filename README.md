# Coup de Propre

Coup de Propre est une application web de démonstration pour présenter des prestations de ménage à domicile et envoyer une demande d’intervention.

Le projet met en valeur le savoir-faire et le professionnalisme des femmes qui exercent le métier de femme de ménage.

## Fonctionnalités

- Présentation du service et de ses engagements.
- Présentation de trois prestations : ménage régulier, ménage ponctuel et grand nettoyage.
- Formulaire pour demander une prestation.
- Vérification des champs côté navigateur et côté serveur.
- Protection du formulaire avec un jeton CSRF.
- Enregistrement des demandes dans MySQL avec PDO.
- Affichage d’une page de confirmation après l’enregistrement.

## Technologies utilisées

- HTML5 pour structurer les pages.
- CSS3 pour la mise en forme responsive.
- PHP pour traiter les demandes.
- PDO pour accéder à MySQL avec une requête préparée.
- MySQL pour stocker les demandes.
- XAMPP pour l’environnement local.
- phpMyAdmin pour consulter la base de données.

## Architecture du projet

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
│   │   ├── diagramme-architecture.md
│   │   ├── diagramme-cas-utilisation.md
│   │   ├── diagramme-sequence.md
│   │   └── mcd.md
│   └── plan-de-tests.md
├── pages/
│   ├── confirmation.php
│   └── demande.php
├── index.php
└── README.md