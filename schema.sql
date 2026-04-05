CREATE DATABASE RockConcertDB;
USE RockConcertDB;

CREATE TABLE ConcertAttendances (
    attendance_id INT AUTO_INCREMENT PRIMARY KEY,
    concert_name VARCHAR(100) NOT NULL,
    band_name VARCHAR(100) NOT NULL,
    venue_city VARCHAR(50),
    ticket_price DECIMAL(10, 2),
    attendee_count INT DEFAULT 0,
    concert_date DATE,
    is_sold_out BOOLEAN DEFAULT FALSE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO ConcertAttendances (concert_name, band_name, venue_city, ticket_price, attendee_count, concert_date, is_sold_out)
VALUES 
('Echoes of Midnight', 'The Void', 'Manila', 2500.00, 15000, '2025-05-20', TRUE),
('Static Pulse Tour', 'Neon Thunder', 'Cebu', 1800.50, 8000, '2025-06-15', FALSE),
('Riff Rebellion', 'Iron Heart', 'Davao', 3000.00, 12000, '2025-07-10', TRUE),
('Acoustic Storm', 'Velvet Sky', 'Quezon City', 1200.00, 5000, '2025-08-05', FALSE);
