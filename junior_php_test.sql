CREATE DATABASE IF NOT EXISTS junior_php_test;
USE junior_php_test;

DROP TABLE IF EXISTS customers;
CREATE TABLE customers (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    email VARCHAR(150),
    mobile VARCHAR(20),
    password VARCHAR(255),
    created_at DATETIME
);

DROP TABLE IF EXISTS registrations;
CREATE TABLE registrations (
    id INT AUTO_INCREMENT PRIMARY KEY,
    customer_id INT,
    name VARCHAR(100),
    email VARCHAR(150),
    mobile VARCHAR(20),
    status VARCHAR(50),
    created_at DATETIME
);

DROP TABLE IF EXISTS payments;
CREATE TABLE payments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    customer_id INT,
    razorpay_payment_id VARCHAR(255),
    amount DECIMAL(10,2),
    status ENUM('pending','success','failed') DEFAULT 'pending',
    created_at DATETIME
);

DROP TABLE IF EXISTS kyc_documents;
CREATE TABLE kyc_documents (
    id INT AUTO_INCREMENT PRIMARY KEY,
    customer_id INT,
    id_proof VARCHAR(255),
    status VARCHAR(50) DEFAULT 'pending',
    created_at DATETIME
);

DROP TABLE IF EXISTS bookings;
CREATE TABLE bookings (
    id INT AUTO_INCREMENT PRIMARY KEY,
    customer_id INT,
    booking_date DATE,
    status VARCHAR(50)
);

DROP TABLE IF EXISTS kyc;
CREATE TABLE kyc (
    id INT AUTO_INCREMENT PRIMARY KEY,
    customer_id INT,
    status VARCHAR(50)
);

INSERT INTO customers (name,email,mobile,password,created_at) VALUES
('Demo User','demo@example.com','9876543210',MD5('123456'),NOW()),
('Test Customer','test@example.com','9123456789',MD5('123456'),NOW());

INSERT INTO payments (customer_id, razorpay_payment_id, amount, status, created_at) VALUES
(1, NULL, 1500, 'pending', NOW()),
(2, NULL, 2500, 'pending', NOW());

INSERT INTO bookings (customer_id, booking_date, status) VALUES
(1, CURDATE(), 'confirmed'),
(2, CURDATE(), 'pending');

INSERT INTO kyc (customer_id, status) VALUES
(1, 'approved'),
(2, 'pending');

ALTER TABLE bookings ADD INDEX idx_bookings_customer_id (customer_id);
ALTER TABLE payments ADD INDEX idx_payments_customer_id (customer_id);
ALTER TABLE kyc ADD INDEX idx_kyc_customer_id (customer_id);
