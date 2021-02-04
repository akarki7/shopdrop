CREATE TABLE Sd_User(
    U_name VARCHAR(40) NOT NULL,
    email VARCHAR(40),
    u_password VARCHAR(40) NOT NULL,
    u_address VARCHAR(40),
    phoneno INTEGER,
    PRIMARY KEY (email)
);

CREATE TABLE Administrator(
    email VARCHAR(40),
    u_password VARCHAR(40) NOT NULL,
    PRIMARY KEY (email)
);



CREATE TABLE bankaccount(
    acc_name VARCHAR(40) NOT NULL,
    acc_num INTEGER,
    balance FLOAT NOT NULL,
    PRIMARY KEY (acc_num)
);

CREATE TABLE has(
    acc_num INTEGER,
    email VARCHAR(40),
    PRIMARY KEY (email,acc_num),
    FOREIGN KEY (email) 
        REFERENCES Sd_User(email)
        ON DELETE CASCADE
        ON UPDATE CASCADE,
    FOREIGN KEY (acc_num) 
        REFERENCES bankaccount(acc_num)
        ON DELETE CASCADE
        ON UPDATE CASCADE
);

CREATE TABLE customer(
    customer_ID INTEGER AUTO_INCREMENT,
    email VARCHAR(40) UNIQUE,
    PRIMARY KEY (customer_ID),
    FOREIGN KEY (email) 
        REFERENCES Sd_User(email)
        ON DELETE CASCADE
        ON UPDATE CASCADE
);
CREATE TABLE seller(
    seller_ID INTEGER AUTO_INCREMENT,
    email VARCHAR(40) UNIQUE,
    PRIMARY KEY (seller_ID),
    FOREIGN KEY (email) 
        REFERENCES Sd_User(email)
        ON DELETE CASCADE
        ON UPDATE CASCADE
);


CREATE TABLE Payment (
    payment_ID INTEGER AUTO_INCREMENT,
    amount INTEGER NOT NULL,
    PRIMARY KEY(payment_ID)
);

CREATE TABLE does (
    payment_ID INTEGER,
    customer_ID INTEGER,
    PRIMARY KEY(payment_ID,customer_ID),
    FOREIGN KEY(payment_ID)
        REFERENCES Payment(payment_ID)
        ON DELETE CASCADE
        ON UPDATE CASCADE,
    FOREIGN KEY (customer_ID) 
        REFERENCES customer(customer_ID)
        ON DELETE CASCADE
        ON UPDATE CASCADE
);

CREATE TABLE sentto (
    seller_ID INTEGER,
    payment_ID INTEGER,
    PRIMARY KEY(seller_ID,payment_ID),
    FOREIGN KEY(seller_ID)
        REFERENCES seller(seller_ID)
        ON DELETE CASCADE
        ON UPDATE CASCADE,
    FOREIGN KEY(payment_ID)
        REFERENCES Payment(payment_ID)
        ON DELETE CASCADE
        ON UPDATE CASCADE
);

CREATE TABLE Paypal(
    payment_ID INTEGER,
    PRIMARY KEY(payment_ID),
    FOREIGN KEY(payment_ID)
        REFERENCES Payment(payment_ID)
        ON DELETE CASCADE
        ON UPDATE CASCADE
);

CREATE TABLE Direct_debit(
    payment_ID INTEGER,
    PRIMARY KEY(payment_ID),
    FOREIGN KEY(payment_ID) 
        REFERENCES Payment(payment_ID)
        ON DELETE CASCADE
        ON UPDATE CASCADE
);

CREATE TABLE ShoppingCart (
    cart_ID  INTEGER AUTO_INCREMENT,
    totalitems INTEGER,
    totalcost FLOAT,
    PRIMARY KEY(cart_ID)
);



CREATE TABLE donefor (
    payment_ID INTEGER,
    cart_ID  INTEGER  ,
    PRIMARY KEY(payment_ID,cart_ID),
    FOREIGN KEY(cart_ID)
        REFERENCES ShoppingCart(cart_ID)
        ON DELETE CASCADE
        ON UPDATE CASCADE,
    FOREIGN KEY(payment_ID)
        REFERENCES Payment(payment_ID)
        ON DELETE CASCADE
        ON UPDATE CASCADE
);


CREATE TABLE Product (
product_ID INTEGER AUTO_INCREMENT,
price INTEGER  NOT NULL,
pname VARCHAR(40) NOT NULL,
PRIMARY KEY(product_ID)
);

CREATE TABLE puts_up(
    seller_ID INTEGER,
    product_ID  INTEGER,
    product ID should only be the unique thing not seller ID
    PRIMARY KEY(seller_ID,product_ID),
    FOREIGN KEY(seller_ID)
        REFERENCES seller(seller_ID)
        ON DELETE CASCADE
        ON UPDATE CASCADE,
    FOREIGN KEY(product_ID)
        REFERENCES Product(product_ID)
        ON DELETE CASCADE
        ON UPDATE CASCADE
);

CREATE TABLE Category (
    category_ID  INTEGER,
    PRIMARY KEY (category_ID)
);

CREATE TABLE Addedto (
    product_ID  INTEGER,
    cart_ID  INTEGER  ,
    PRIMARY KEY (Cart_ID,product_ID),
    FOREIGN KEY(Cart_ID)
        REFERENCES ShoppingCart(cart_id)
        ON DELETE CASCADE
        ON UPDATE CASCADE,
    FOREIGN KEY(product_ID)
    REFERENCES Product(product_ID)
        ON DELETE CASCADE
        ON UPDATE CASCADE
);

CREATE TABLE belongs_to(
    product_ID  INTEGER,
    category_ID  INTEGER ,
    PRIMARY KEY(product_ID,category_ID),
    FOREIGN KEY(product_ID)
        REFERENCES Product(product_ID)
        ON DELETE CASCADE
        ON UPDATE CASCADE,
    FOREIGN KEY(category_ID)
        REFERENCES Category(category_ID)
        ON DELETE CASCADE
        ON UPDATE CASCADE
);

CREATE TABLE Grocery (
    category_ID  INTEGER ,
    catName VARCHAR(40),
    PRIMARY KEY(category_ID,catName),
    FOREIGN KEY(category_ID)
        REFERENCES Category(category_ID)
        ON DELETE CASCADE
        ON UPDATE CASCADE
);

CREATE TABLE Technology (
    category_ID  INTEGER ,
    catName VARCHAR(40),
    PRIMARY KEY(category_ID,catName),
    FOREIGN KEY(category_ID)
        REFERENCES Category(category_ID)
        ON DELETE CASCADE
        ON UPDATE CASCADE
);

CREATE TABLE Clothes (
    category_ID  INTEGER ,
    catName VARCHAR(40),
    PRIMARY KEY(category_ID,catName),
    FOREIGN KEY(category_ID)
        REFERENCES Category(category_ID)
        ON DELETE CASCADE
        ON UPDATE CASCADE
);

CREATE TABLE Others (
    category_ID  INTEGER ,
    catName VARCHAR(40),
    PRIMARY KEY(category_ID,catName),
    FOREIGN KEY(category_ID)
        REFERENCES Category(category_ID)
        ON DELETE CASCADE
        ON UPDATE CASCADE
);





