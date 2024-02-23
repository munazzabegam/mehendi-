-- Table for Mehendi Designs
CREATE TABLE mehendi_designs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    design_name VARCHAR(255) NOT NULL,
    image_path VARCHAR(255) NULL
);

-- Table for Front Hand Designs
CREATE TABLE Front_hand (
    id INT AUTO_INCREMENT PRIMARY KEY,
    design_name VARCHAR(255) NOT NULL,
    image_path VARCHAR(255) NULL
);

-- Table for Back Hand Designs
CREATE TABLE back_hand (
    id INT AUTO_INCREMENT PRIMARY KEY,
    design_name VARCHAR(255) NOT NULL,
    image_path VARCHAR(255) NULL
);

-- Table for Bridal Designs
CREATE TABLE bridal_designs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    design_name VARCHAR(255) NOT NULL,
    image_path VARCHAR(255) NULL
);

-- Table for Leg Designs
CREATE TABLE leg_designs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    design_name VARCHAR(255) NOT NULL,
    image_path VARCHAR(255) NULL
);

