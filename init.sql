-- SeedShare Database Schema
CREATE DATABASE IF NOT EXISTS seedshare_db;
USE seedshare_db;

-- Seeds Table
CREATE TABLE IF NOT EXISTS seeds (
    id INT AUTO_INCREMENT PRIMARY KEY,
    seed_name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    password VARCHAR(255) NOT NULL,
    quantity INT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Optional: Insert sample data for testing
-- INSERT INTO seeds (seed_name, email, password, quantity) VALUES 
-- ('Tomato Seeds', 'farmer@example.com', '$2y$10$example', 50),
-- ('Carrot Seeds', 'gardener@example.com', '$2y$10$example', 30);
