# Architecture technique — Coup de Propre

L’application suit une architecture web client-serveur. Le navigateur affiche le site et transmet le formulaire à PHP. PHP utilise PDO pour enregistrer la demande dans MySQL.

```mermaid
flowchart TD
    Client["Cliente ou client"] --> Navigateur["Navigateur web<br>HTML, CSS et JavaScript"]
    Navigateur -->|"Requête HTTP POST"| PHP["Apache et PHP<br>demande.php"]
    PHP --> PDO["PDO<br>Connexion aux données"]
    PDO -->|"Requête préparée"| MySQL["MySQL<br>Base coup_de_propre"]
    MySQL -->|"Résultat de l’enregistrement"| PDO
    PDO --> PHP
    PHP -->|"Redirection après succès"| Confirmation["confirmation.php"]
    Confirmation --> Navigateur
    Navigateur --> Client
```

## Environnement local

- **XAMPP** lance Apache, PHP et MySQL sur l’ordinateur.
- **phpMyAdmin** permet de consulter la base et la table `demandes`.
- **Visual Studio Code** sert à modifier les fichiers du projet.
- **Git et GitHub** pourront servir à suivre et sauvegarder les versions du code.