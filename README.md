# married-me

create table in mysql

==========> start user_tbl <==========
CREATE TABLE user_tbl (
    user_id INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    phone VARCHAR(50) NOT NULL,
    password VARCHAR(100) NOT NULL,
    created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP NOT NULL,
);
==========> end user_tbl <==========


==========> start location_tbl <==========
CREATE TABLE location_tbl (
    locaid INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    village VARCHAR(100) NOT NULL
);
==========> end location_tbl <==========


==========> start boy_tbl <==========
CREATE TABLE boy_tbl (
    boy_id INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    khmername VARCHAR(100) NOT NULL,
    englishname VARCHAR(100) NOT NULL,
    phone VARCHAR(50) NOT NULL,
    moneyriel FLOAT NOT NULL,
    moneydolar FLOAT NOT NULL,
    locaid INT,
    commment VARCHAR(100) NOT NULL,
    created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP NOT NULL,
    FOREIGN KEY (locaid)
    REFERENCES location_tbl(locaid),
    FOREIGN KEY (user_id)
    REFERENCES user_tbl(user_id)
);
==========> end boy_tbl <==========


==========> start girl_tbl <==========
CREATE TABLE girl_tbl (
    girl_id INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    khmername VARCHAR(100) NOT NULL,
    englishname VARCHAR(100) NOT NULL,
    phone VARCHAR(50) NOT NULL,
    moneyriel FLOAT NOT NULL,
    moneydolar FLOAT NOT NULL,
    locaid INT,
    commment VARCHAR(100) NOT NULL,
    created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP NOT NULL,
    FOREIGN KEY (locaid)
    REFERENCES location_tbl(locaid),
    FOREIGN KEY (user_id)
    REFERENCES user_tbl(user_id)
);
==========> end girl_tbl <==========
