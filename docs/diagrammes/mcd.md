# Modèle conceptuel de données — Coup de Propre

## Entité : DEMANDE

Une demande correspond à une demande de prestation envoyée par une personne.

### Attributs

- **id** : identifiant unique de la demande
- nom : nom et prénom de la personne
- email : adresse e-mail
- telephone : numéro de téléphone
- adresse : adresse de l’intervention
- prestation : type de ménage demandé
- date_souhaitee : date souhaitée
- commentaire : précision facultative
- statut : état de la demande
- cree_le : date de création de la demande

## Représentation simplifiée

```text
DEMANDE
───────
id (identifiant)
nom
email
telephone
adresse
prestation
date_souhaitee
commentaire
statut
cree_le
