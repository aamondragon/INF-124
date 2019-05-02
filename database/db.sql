CREATE TABLE Products(
	productID CHAR(10),
	productName VARCHAR(20) not null,
	imageLocation VARCHAR(30) not null,
	productType VARCHAR(20) not null,
	manufacturer VARCHAR(20) not null,
	productPrice DECIMAL(8, 2) not null,
	description VARCHAR(1000) not null,
	PRIMARY KEY(productID)
);

CREATE TABLE Tags(
	productID CHAR(10),
	tag VARCHAR(20),
	PRIMARY KEY(productID, tag),
	FOREIGN KEY(productID) REFERENCES Products(productID) ON DELETE CASCADE
);
