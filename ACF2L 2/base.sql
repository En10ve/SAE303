CREATE DATABASE IF NOT EXISTS acf2l_reservation;
USE acf2l_reservation;

CREATE TABLE IF NOT EXISTS reservations (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    date_formation DATE NOT NULL,
    forfait VARCHAR(255) NOT NULL
);
