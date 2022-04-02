CREATE DATABASE IF NOT EXISTS store;

CREATE TABLE IF NOT EXISTS products(
    sku VARCHAR(255) NOT NULL,
    name VARCHAR(255) NOT NULL,
    price VARCHAR(255) NOT NULL,
    type int(11) NOT NULL,
    attribute VARCHAR(255) NOT NULL,
    PRIMARY KEY(sku)
);


INSERT INTO products (sku,name,price,type,attribute) VALUES
('BOOK159juip50', 'Harry Potter and the Cursed Child', 50, 1, '2 KG'),
('DISC951357l', 'DVD', 10, 0, '120 MB'),
('FURNITURE45', 'Blue chair', 20, 2, '30x10x10');


