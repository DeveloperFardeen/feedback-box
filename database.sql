CREATE DATABASE feedback_db;

USE feedback_db;

CREATE TABLE feedback (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    mob VARCHAR(15) NOT NULL,
    feedback TEXT NOT NULL,
    rating INT(1) NOT NULL
);
