CREATE TABLE accounts (
  id           INT AUTO_INCREMENT NOT NULL,
  adminUserID  INT          DEFAULT NULL,
  firstName    VARCHAR(255) DEFAULT NULL,
  lastName     VARCHAR(255) DEFAULT NULL,
  houseNumber  INT          DEFAULT NULL,
  addressLine1 VARCHAR(255) DEFAULT NULL,
  addressLine2 VARCHAR(255) DEFAULT NULL,
  city         VARCHAR(255) DEFAULT NULL,
  province     VARCHAR(255) DEFAULT NULL,
  postCode     VARCHAR(16)  DEFAULT NULL,
  country      VARCHAR(255) DEFAULT NULL,
  countryCode  VARCHAR(3)   DEFAULT NULL,
  type         INT          DEFAULT NULL,
  PRIMARY KEY (id)
)
  DEFAULT CHARACTER SET utf8
  COLLATE utf8_unicode_ci
  ENGINE = InnoDB;
CREATE TABLE orderDeliveries (
  id        INT AUTO_INCREMENT NOT NULL,
  orderID   INT DEFAULT NULL,
  dateAdded DATETIME           NOT NULL,
  status    INT DEFAULT NULL,
  PRIMARY KEY (id)
)
  DEFAULT CHARACTER SET utf8
  COLLATE utf8_unicode_ci
  ENGINE = InnoDB;
CREATE TABLE orderProducts (
  id        INT AUTO_INCREMENT NOT NULL,
  orderID   INT                NOT NULL,
  productID INT                NOT NULL,
  quantity  INT          DEFAULT NULL,
  comments  VARCHAR(255) DEFAULT NULL,
  UNIQUE INDEX UNIQUE_ORDER (orderID, productID),
  PRIMARY KEY (id)
)
  DEFAULT CHARACTER SET utf8
  COLLATE utf8_unicode_ci
  ENGINE = InnoDB;
CREATE TABLE orders (
  id        INT AUTO_INCREMENT NOT NULL,
  total     NUMERIC(11, 2) DEFAULT NULL,
  status    INT            DEFAULT NULL,
  dateAdded DATETIME           NOT NULL,
  datePaid  DATETIME       DEFAULT NULL,
  comments  VARCHAR(255)   DEFAULT NULL,
  PRIMARY KEY (id)
)
  DEFAULT CHARACTER SET utf8
  COLLATE utf8_unicode_ci
  ENGINE = InnoDB;
CREATE TABLE productPrices (
  id           INT AUTO_INCREMENT NOT NULL,
  productID    INT            DEFAULT NULL,
  dateFrom     DATETIME       DEFAULT NULL,
  productPrice NUMERIC(11, 2) DEFAULT NULL,
  UNIQUE INDEX UNIQUE_PRICE (productID, dateFrom),
  PRIMARY KEY (id)
)
  DEFAULT CHARACTER SET utf8
  COLLATE utf8_unicode_ci
  ENGINE = InnoDB;
CREATE TABLE products (
  id          INT AUTO_INCREMENT NOT NULL,
  name        VARCHAR(255) DEFAULT NULL,
  discription VARCHAR(255) DEFAULT NULL,
  PRIMARY KEY (id)
)
  DEFAULT CHARACTER SET utf8
  COLLATE utf8_unicode_ci
  ENGINE = InnoDB;
CREATE TABLE users (
  id         INT AUTO_INCREMENT NOT NULL,
  username   VARCHAR(255)       NOT NULL,
  password   VARCHAR(255)       NOT NULL,
  account_id INT                NOT NULL,
  PRIMARY KEY (id)
)
  DEFAULT CHARACTER SET utf8
  COLLATE utf8_unicode_ci
  ENGINE = InnoDB;