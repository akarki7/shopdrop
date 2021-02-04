INSERT INTO Sd_User (U_name, email, u_password, u_address, phoneno) 
VALUES ('Aabishkar Karki', 'karkiaabishkar@gmail.com', 'jpt12345', NULL, NULL), 
('Mahiem Agrawal', 'm.agrawal@jacobs.de', 'hellomark', NULL, NULL), 
('Prasiddha Thapa', 'shinobinew@gmail.com', 'gaegahgeag', NULL, NULL), 
('Ankit Pandit', 'ageaghae@gmial.com', 'afgaggagag', NULL, NULL), 
('Tuan Pham', 'tpham@gmail.com', 'heukfar213423', NULL, NULL), 
('Rubek Poudel', 'rpoudel@gmail.com', '2352346bbw4', NULL, NULL), 
('Aviral Dhakal', 'adhakal@gmail.com', 'hsg4575sg', NULL, NULL), 
('Opendra Thapa', 'othapa@gmail.com', 'ggsasaete4', NULL, NULL), 
('Mark Henry', 'mhenry@gmail.com', '436346sdgs', NULL, NULL), 
('Randy Orton', 'rorton@gmail.com', '4t87934twu4', NULL, NULL);

INSERT INTO customer (email) 
VALUES ('karkiaabishkar@gmail.com'), 
('ageaghae@gmial.com'), 
('adhakal@gmail.com'), 
('m.agrawal@jacobs.de'), 
('mhenry@gmail.com');

INSERT INTO seller (email) 
VALUES ('othapa@gmail.com'), 
('shinobinew@gmail.com'), 
('rorton@gmail.com'), 
('rpoudel@gmail.com'), 
('tpham@gmail.com');

INSERT INTO Product (price, pname) VALUES ('120', 'Shampoo'), ('20', 'Mat'), ('200', 'Adidas Shoe'), ('150', 'Nike Shoe'), ('400', 'TV'), ('70', 'Fridge'), ('80', 'Fifa'), ('15', 'Rice'), ('250', 'Welllenstein Jacket'), ('60', 'gaming chair');

INSERT INTO puts_up (seller_ID, product_ID) VALUES ('1', '1'), ('2', '2'), ('3', '3'), ('4', '4'), ('5', '5'), ('1', '6'), ('1', '7'), ('3', '8'), ('4', '9'), ('2', '10');

INSERT INTO Payment (amount) VALUES ('900'), ('900'), ('600'), ('300'), ('200');

INSERT INTO does (payment_ID, customer_ID) VALUES ('1', '3'), ('2', '2'),('3', '1'), ('4', '5'), ('5', '4');

INSERT INTO ShoppingCart (totalitems, totalcost) VALUES ('3', '900'), ('3', '900'), ('2', '600'), ('1', '300'), ('1', '200');

INSERT INTO donefor (payment_ID, cart_ID) VALUES ('1', '1'), ('2', '2'), ('3', '3'), ('4', '4'), ('5', '5');

INSERT INTO Addedto (product_ID, cart_ID) VALUES ('1', '1'), ('2', '1'), ('3', '1'), ('4', '2'), ('5', '2'), ('6', '2'), ('7', '3'), ('8', '3'), ('9', '4'), ('10', '5');

INSERT INTO sentto (seller_ID, payment_ID) VALUES ('1', '1'), ('2', '2'), ('3', '4'), ('4', '3'), ('5', '5');

INSERT INTO Category (category_ID) VALUES ('100'), ('101'), ('102'), ('103');

INSERT INTO belongs_to (product_ID, category_ID) VALUES ('1', '103'), ('2', '103'), ('3', '102'), ('4', '102'), ('5', '101'), ('6', '101'), ('7', '103'), ('8', '100'), ('9', '102'), ('10', '103');


INSERT INTO Addedto (product_ID, cart_ID) VALUES ('10', '1');
INSERT INTO Addedto (product_ID, cart_ID) VALUES ('5', '5'), ('4', '3');
INSERT INTO Addedto (product_ID, cart_ID) VALUES ('4', '4');

INSERT INTO sentto (seller_ID, payment_ID) VALUES ('2', '1'), ('3', '1');
INSERT INTO sentto (seller_ID, payment_ID) VALUES ('1', '2'), ('4', '2'), ('5', '2');
INSERT INTO sentto (seller_ID, payment_ID) VALUES ('1', '3'), ('3', '3');
INSERT INTO sentto (seller_ID, payment_ID) VALUES ('4', '4');
INSERT INTO sentto (seller_ID, payment_ID) VALUES ('2', '5');


INSERT INTO bankaccount (acc_name, acc_num, balance) VALUES ('AK', '12345', '1000'), ('MA', '56789', '500'), ('AP', '34567', '500'), ('AD', '235266', '9000'), ('MH', '13524637', '5000');

INSERT INTO has (acc_num, email) VALUES ('235266', 'adhakal@gmail.com'), ('12345', 'karkiaabishkar@gmail.com'), ('34567', 'ageaghae@gmial.com'), ('56789', 'm.agrawal@jacobs.de'), ('13524637', 'mhenry@gmail.com');

INSERT INTO Administrator(email,u_password) VALUES ("admin@shopdrop.com","Shopdrop@777");