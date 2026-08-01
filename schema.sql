-- Create Database
CREATE DATABASE IF NOT EXISTS foodorder;
USE foodorder;

-- 1. Users Table (Populated by signup.php)
CREATE TABLE IF NOT EXISTS users (
    customer_id VARCHAR(50) PRIMARY KEY,
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    phone VARCHAR(20) NOT NULL,
    address TEXT NOT NULL
);

-- 2. Food Details Table (Queried by act.php)
CREATE TABLE IF NOT EXISTS food_details (
    food_id INT PRIMARY KEY,
    food_name VARCHAR(100) NOT NULL,
    price DECIMAL(10, 2) NOT NULL
);

-- Initial Menu Seed Data (From dishes.html)
INSERT INTO food_details (food_id, food_name, price) VALUES 
(101, 'Biriyani', 130.00),
(102, 'Mandhi', 150.00),
(103, 'Fried Chicken', 140.00);

-- 3. Orders Table (Inserted by act.php & Updated by payment.php)
CREATE TABLE IF NOT EXISTS orders (
    order_id INT AUTO_INCREMENT PRIMARY KEY,
    customer_id VARCHAR(50),
    food_id INT,
    quantity INT NOT NULL,
    total_price DECIMAL(10, 2) NOT NULL,
    order_date DATETIME DEFAULT CURRENT_TIMESTAMP,
    payment_method VARCHAR(50) DEFAULT NULL,
    FOREIGN KEY (customer_id) REFERENCES users(customer_id) ON DELETE CASCADE,
    FOREIGN KEY (food_id) REFERENCES food_details(food_id) ON DELETE CASCADE
);
