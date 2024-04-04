 
CREATE TABLE tx_showproducts_domain_model_produkt (
    uid int(11) NOT NULL auto_increment,
    pid int(11) DEFAULT '0' NOT NULL,
    titel varchar(255) DEFAULT '' NOT NULL,
    preis decimal(10,2) DEFAULT '0.00' NOT NULL,
    lagerbestand int(11) DEFAULT '0' NOT NULL,
    lieferzeit int(11) DEFAULT '0' NOT NULL,
    dateiname varchar(255) DEFAULT '' NOT NULL,
    PRIMARY KEY (uid)
);

 
CREATE TABLE tx_showproducts_domain_model_kategorie (
    uid int(11) NOT NULL auto_increment,
    pid int(11) DEFAULT '0' NOT NULL,
    kategorieName varchar(50) DEFAULT '' NOT NULL,
    PRIMARY KEY (uid)
);
