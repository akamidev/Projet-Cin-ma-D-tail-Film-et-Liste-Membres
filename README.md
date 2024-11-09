# 🎥 Gestion de Cinéma en PHP et MySQL

![PHP](https://img.shields.io/badge/PHP-8.0-777BB4?logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-8.0-4479A1?logo=mysql&logoColor=white)
![HTML5](https://img.shields.io/badge/HTML5-Valid-E34F26?logo=html5&logoColor=white)
![CSS3](https://img.shields.io/badge/CSS3-Styles-1572B6?logo=css3&logoColor=white)
![JavaScript](https://img.shields.io/badge/JavaScript-Dynamic-F7DF1E?logo=javascript&logoColor=black)
![Bootstrap](https://img.shields.io/badge/Bootstrap-5-7952B3?logo=bootstrap&logoColor=white)
![License](https://img.shields.io/badge/License-MIT-green)

## 🛠️ Réalisation

Ce projet consiste à développer une application web pour la gestion d'un cinéma en utilisant **PHP** et **MySQL**. Le but principal est de se concentrer sur l'intégration de PHP avec MySQL sans accorder trop d'importance à l'aspect visuel.

- **Séparation du code** : Logique métier en PHP et affichage séparé.
- **HTML5 valide** : Toutes les pages sont conformes aux standards HTML5.

---

## 📋 Partie Obligatoire

### 🎬 Gestion des Films
- Rechercher des films par **nom**.
- Rechercher des films par **genre**.
- Rechercher des films par **date de projection**.
- Rechercher des films par **date de production**.
- Rechercher des films par **distributeur**.

### 📄 Fiche d'un Film
- Titre
- Résumé
- Date de projection
- Durée
- Année de production
- Affiche
- Genre
- Distributeur

### 👥 Gestion des Membres
- Rechercher un membre par **nom et prénom**.
- Afficher l'historique des films vus par un membre.
- Afficher le dernier film vu par un membre.
- Afficher les informations personnelles d'un membre.

---

## 🧩 TP : Détail d'un Film

### 🚀 Objectif
Créer une page pour afficher le détail d'un film :
- URL : `/film.php?id=1`

### 🛠️ Instructions
1. Créer un fichier **film.php** pour afficher les détails d'un film.
2. Ajouter une méthode `getById` dans le modèle **Film** pour récupérer un film par son ID.

#### Exemple de requête SQL
```sql
SELECT * FROM film WHERE id = $id;
```
***⚠️ Utilisez des requêtes préparées pour éviter les injections SQL.***

#### 👥 Page Membres

Créer une page membres.php pour afficher la liste des membres.
Ajouter un modèle Membre pour gérer les données des membres.

#### 🛡️ Sécurité

- Utilisation de **requêtes préparées** pour éviter les injections SQL.
- Validation des **entrées utilisateur** pour garantir l'intégrité des données.

---

#### 📝 Licence

Ce projet est sous licence **MIT**. Consultez le fichier [LICENSE](https://github.com/akamidev/Projet-Cin-ma-D-tail-Film-et-Liste-Membres/blob/main/LICENSE) pour plus de détails.

---

#### 🤝 Contact

- **Auteur** : Mehdi Akami
- **Email** : [akamimehdi.dev@gmail.com](mailto:akamimehdi.dev@gmail.com)
- **LinkedIn** : [Mehdi Akami](https://www.linkedin.com/in/mehdi-akami-1912a51a9/)
- **GitHub** : [akamidev](https://github.com/akamidev)
