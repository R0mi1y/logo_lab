DROP DATABASE LogoLab;


select * from user;

CREATE DATABASE IF NOT EXISTS LogoLab;
USE DATABASE LogoLab;

CREATE TABLE
    IF NOT EXISTS adress (
        id INT auto_increment primary key,
        street VARCHAR(255),
        city VARCHAR(255),
        state VARCHAR(255),
        postalcode VARCHAR(255),
        country VARCHAR(255),
        number VARCHAR(255)
    );

insert into user (name, password, email, phone, cpf, birthdate, account_created_date, type) values ('$username', '$password', '$email', '$phone', '$cpf', null, null, 'user');
CREATE TABLE
    IF NOT EXISTS user (
        id INT auto_increment primary key,
        name VARCHAR(255) NOT NULL,
        email VARCHAR(255) NOT NULL,
        password VARCHAR(255) NOT NULL,
        phone VARCHAR(20) NOT NULL,
        cpf VARCHAR(20),
        birthdate date,
        id_adress int,
        foreign key (id_adress) references adress (id),
        account_created_date date,
        type varchar(255) NOT NULL,
        path_img_perfil VARCHAR(255)
    );

CREATE TABLE
    IF NOT EXISTS request (
        id INT NOT NULL auto_increment primary key,
        description text,
        id_requisitor INT NOT NULL,
        foreign key (id_requisitor) references user (id)
    );

CREATE TABLE
    IF NOT EXISTS logo (
        id INT NOT NULL auto_increment primary key,
        path VARCHAR(255) NOT NULL,
        id_artist INT NOT NULL,
        foreign key (id_artist) references user (id)
    );