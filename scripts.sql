# Database.sql
mysql -u root -p


CREATE DATABASE omsdb;

CREATE USER 'omsadmin'@'localhost' identified by 'password';

GRANT ALL PRIVILEGES on omsdb.* TO 'omsadmin'@'localhost';

FLUSH PRIVILEGES;

mysql -u omsadmin -p -D omsdb;


CREATE TABLE art_pieces (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    artist VARCHAR(255) NOT NULL,
    year_created INT,
    description TEXT,
    image_url VARCHAR(255),
    price DECIMAL(10, 2),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

INSERT INTO art_pieces (title, artist, year_created, description, image_url, price)
VALUES
    ('Starry Night', 'Vincent van Gogh', 1889, 'A masterpiece of post-impressionist art.', 'art1.jpg', 12000000.00),
    ('Mona Lisa', 'Leonardo da Vinci', 1503, 'One of the most famous portraits in the world.', 'art2.jpg', 65000000.00),
    ('The Persistence of Memory', 'Salvador Dali', 1931, 'Surrealistic depiction of melting clocks.', 'art3.jpg', 15000000.00),
    ('The Starry Night Over the Rhone', 'Vincent van Gogh', 1888, 'Another stunning night sky painting.', 'art4.jpg', 10000000.00),
    ('Guernica', 'Pablo Picasso', 1937, 'A powerful anti-war painting.', 'art5.jpg', 7000000.00);

