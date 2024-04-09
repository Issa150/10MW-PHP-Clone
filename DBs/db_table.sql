CREATE TABLE vocabularies (
    id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    author VARCHAR(255) NOT NULL,
    concept VARCHAR(100) NOT NULL,
    description TEXT NOT NULL,
    tags VARCHAR(50),
    created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
);