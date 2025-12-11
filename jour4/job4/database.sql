CREATE DATABASE IF NOT EXISTS utilisateurs;

USE utilisateurs;

CREATE TABLE IF NOT EXISTS utilisateurs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(255) NOT NULL,
    prenom VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL
);

INSERT INTO utilisateurs (nom, prenom, email) VALUES
('Marc', 'X', 'Marc.X@mail.com'),
('Lara', 'Smet', 'Lara.Smet@mail.com'),
('Bernard', 'Harnot', 'Bernard.Harnot@mail.com'),
('Françoise', 'Marie', 'marie.Françoise@mail.com'),
('Thomas', 'Ugue', 'Ugue.thomas@example.com');