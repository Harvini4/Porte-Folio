
CREATE DATABASE iris_ecole CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE iris_ecole;

-- Crée la table pour les messages
CREATE TABLE contact (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nom VARCHAR(100) NOT NULL,
  email VARCHAR(150) NOT NULL,
  message TEXT NOT NULL,
  date_envoi DATETIME DEFAULT CURRENT_TIMESTAMP
);

