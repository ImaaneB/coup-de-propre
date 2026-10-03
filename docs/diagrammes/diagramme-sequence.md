# Diagramme de séquence — Envoi d’une demande

Ce diagramme montre le parcours d’une demande de prestation, depuis l’envoi du formulaire jusqu’à l’affichage du résultat.

```mermaid
sequenceDiagram
    actor Client
    participant Navigateur
    participant PHP as demande.php
    participant PDO
    participant MySQL
    participant Confirmation as confirmation.php

    Client->>Navigateur: Remplit le formulaire
    Navigateur->>PHP: Envoie les champs et le jeton CSRF
    PHP->>PHP: Vérifie le jeton et les champs

    alt Informations invalides
        PHP-->>Navigateur: Affiche un message d’erreur
        Navigateur-->>Client: Demande de corriger le formulaire
    else Informations valides
        PHP->>PDO: Prépare la requête INSERT
        PDO->>MySQL: Enregistre la demande
        MySQL-->>PDO: Confirme l’enregistrement
        PDO-->>PHP: Retourne le résultat
        PHP-->>Navigateur: Redirige vers la confirmation
        Navigateur->>Confirmation: Ouvre la page de confirmation
        Confirmation-->>Client: Affiche la confirmation
    end