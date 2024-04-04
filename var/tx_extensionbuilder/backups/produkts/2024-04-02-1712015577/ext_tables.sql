CREATE TABLE tx_produkts_domain_model_produkt (
	titel varchar(255) NOT NULL DEFAULT '',
	preis double(11,2) NOT NULL DEFAULT '0.00',
	lagerbestand int(11) NOT NULL DEFAULT '0',
	lieferzeit int(11) NOT NULL DEFAULT '0',
	dateiname int(11) unsigned NOT NULL DEFAULT '0',
	kategory int(11) unsigned NOT NULL DEFAULT '0'
);

CREATE TABLE tx_produkts_domain_model_kategory (
	kategory_name varchar(255) NOT NULL DEFAULT ''
);
