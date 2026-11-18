CREATE DATABASE IF NOT EXISTS grooming_petshop CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE grooming_petshop;

CREATE TABLE users (
 id INT AUTO_INCREMENT PRIMARY KEY,
 name VARCHAR(100) NOT NULL,
 email VARCHAR(120) UNIQUE NOT NULL,
 password VARCHAR(255) NOT NULL,
 role ENUM('admin','customer') NOT NULL DEFAULT 'customer',
 created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE services (
 id INT AUTO_INCREMENT PRIMARY KEY,
 animal ENUM('Kucing','Anjing') NOT NULL,
 size ENUM('Kecil','Sedang','Besar') NOT NULL,
 service_type ENUM('Mandi saja','Full grooming') NOT NULL,
 price INT NOT NULL,
 active TINYINT(1) NOT NULL DEFAULT 1
);

CREATE TABLE bookings (
 id INT AUTO_INCREMENT PRIMARY KEY,
 user_id INT NOT NULL,
 pet_name VARCHAR(100) NOT NULL,
 animal ENUM('Kucing','Anjing') NOT NULL,
 size ENUM('Kecil','Sedang','Besar') NOT NULL,
 service_id INT NOT NULL,
 booking_date DATE NOT NULL,
 booking_time TIME NOT NULL,
 notes TEXT,
 status ENUM('Menunggu','Dikonfirmasi','Selesai','Dibatalkan') NOT NULL DEFAULT 'Menunggu',
 created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
 FOREIGN KEY (user_id) REFERENCES users(id),
 FOREIGN KEY (service_id) REFERENCES services(id)
);

INSERT INTO services(animal,size,service_type,price) VALUES
('Kucing','Kecil','Mandi saja',50000),('Kucing','Sedang','Mandi saja',75000),('Kucing','Besar','Mandi saja',100000),
('Kucing','Kecil','Full grooming',125000),('Kucing','Sedang','Full grooming',150000),('Kucing','Besar','Full grooming',200000),
('Anjing','Kecil','Mandi saja',75000),('Anjing','Sedang','Mandi saja',125000),('Anjing','Besar','Mandi saja',150000),
('Anjing','Kecil','Full grooming',175000),('Anjing','Sedang','Full grooming',200000),('Anjing','Besar','Full grooming',225000);
