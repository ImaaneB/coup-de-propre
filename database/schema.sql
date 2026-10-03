CREATE DATABASE IF NOT EXISTS coup_de_propre
    CHARACTER SET utf8mb4
    COLLATE utf8mb4_unicode_ci;

USE coup_de_propre;

CREATE TABLE IF NOT EXISTS demandes (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100) NOT NULL,
    email VARCHAR(190) NOT NULL,
    telephone VARCHAR(30) NOT NULL,
    adresse VARCHAR(255) NOT NULL,
    prestation ENUM(
        'regulier',
        'ponctuel',
        'grand-nettoyage'
    ) NOT NULL,
    date_souhaitee DATE NOT NULL,
    commentaire TEXT NULL,
    statut ENUM(
        'nouvelle',
        'traitement',
        'terminee',
        'annulee'
    ) NOT NULL DEFAULT 'nouvelle',
    cree_le TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
);