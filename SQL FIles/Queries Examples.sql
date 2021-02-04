SELECT D.customer_ID AS cID, U.U_name as Nam,D.payment_ID AS PaymentID , P.pname AS ProductName 
FROM does D, Sd_User U , customer C, donefor d, Addedto a ,Product P 
WHERE (C.customer_ID=D.customer_ID AND C.email=U.email) AND (D.payment_ID=d.payment_ID AND d.cart_ID=a.cart_ID AND a.product_ID=P.product_ID)
ORDER BY D.customer_ID;


SELECT b.category_ID AS CAT_ID, P.pname AS Products, P.price AS COST
FROM Product P,belongs_to b 
WHERE (b.product_ID=P.product_ID)
ORDER BY b.category_ID, P.price;


SELECT ST.seller_ID AS SellerId,U.U_name AS Seller_name,ST.payment_ID AS PaymentID, P.pName AS Product, P.price AS Price  
FROM sentto ST, donefor d, Addedto a, Product P, puts_up pu, Sd_User U, seller S
WHERE (ST.payment_ID=d.payment_ID AND d.cart_ID=a.cart_ID AND a.product_ID=P.product_ID AND P.product_ID=pu.product_ID AND ST.seller_ID=pu.seller_ID AND S.seller_ID=ST.seller_ID AND S.email=U.email)
ORDER By ST.seller_ID;

SELECT COUNT(a.product_ID) AS TimesBought,P.pname AS ProductName 
FROM does D,donefor d, Addedto a ,Product P 
WHERE (D.payment_ID=d.payment_ID AND d.cart_ID=a.cart_ID AND a.product_ID=P.product_ID) 
GROUP BY a.product_ID;


SELECT MAX(X.TimesBought) AS BESTSELLER, X.ProductName
FROM (SELECT COUNT(a.product_ID)AS TimesBought,P.pname AS ProductName FROM does D,donefor d, Addedto a ,Product P WHERE (D.payment_ID=d.payment_ID AND d.cart_ID=a.cart_ID AND a.product_ID=P.product_ID) GROUP BY a.product_ID)X;

SELECT C.category_ID AS CAT_ID,S.seller_ID AS SellerId, U.U_name AS Seller_name, P.product_ID as ProductID, P.pname AS Product_Name
FROM seller S, Sd_User U, puts_up PU, Product P, belongs_to BT, Category C
WHERE (S.seller_ID=PU.seller_ID AND S.email=U.email AND PU.product_ID=P.product_ID) AND (BT.product_ID=P.product_ID AND BT.category_ID=C.category_ID)
ORDER By C.category_ID;

SELECT P.pname, P.product_ID 
FROM Product P 
WHERE P.pname LIKE 'G%' 
ORDER BY P.pname;

SELECT C.customer_ID AS CustomerID, U.U_name AS UserName, B.balance AS BALANCES, p.amount AS NEEDEDMONEY, p.payment_ID AS PID
FROM customer C, Payment p, Sd_User U, bankaccount B, has H , does D 
WHERE (D.customer_ID=C.customer_ID AND D.payment_ID=p.payment_ID AND  C.email=U.email AND U.email=H.email AND H.acc_num=B.acc_num) AND (p.amount<=B.balance)
ORDER BY C.customer_ID;

SELECT *
FROM Product P
WHERE P.price>=100 AND P.price<=300
ORDER BY P.price DESC;

SELECT S.seller_id, C.customer_ID, U.email
FROM seller S, customer C, Sd_User U 
WHERE S.email=U.email AND C.email=U.email;