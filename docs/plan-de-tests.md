# Plan de tests — Coup de Propre

| N° | Test | Résultat attendu | Statut |
|---|---|---|---|
| 1 | Ouvrir la page d’accueil | La page s’affiche correctement | Réussi |
| 2 | Cliquer sur le bouton d’une prestation | Le formulaire s’ouvre avec la bonne prestation sélectionnée | Réussi |
| 3 | Choisir une date antérieure à aujourd’hui | Le navigateur bloque la sélection | Réussi |
| 4 | Envoyer le formulaire avec un champ obligatoire vide | Le navigateur demande de remplir le champ | Réussi |
| 5 | Envoyer une demande valide | Une page de confirmation s’affiche | Réussi |
| 6 | Vérifier la base de données après l’envoi | La demande apparaît dans la table `demandes` | Réussi |
| 7 | Envoyer une demande avec une date passée | Le serveur refuse la demande et affiche une erreur | Réussi |
| 8 | Envoyer le formulaire avec un jeton de sécurité valide | La demande est acceptée | Réussi |
| 9 | Envoyer le formulaire avec un jeton de sécurité invalide | La demande est refusée | Réussi |
| 10 | Afficher le site sur un écran mobile | Le contenu reste lisible et cohérent | Réussi |
| 11 | Tester les liens du menu après la dernière mise à jour | Chaque lien mène à la bonne section | Réussi |

## Remarques

- Les tests ont été effectués manuellement dans le navigateur.
- La demande de test enregistrée peut être supprimée de la base de données si nécessaire.