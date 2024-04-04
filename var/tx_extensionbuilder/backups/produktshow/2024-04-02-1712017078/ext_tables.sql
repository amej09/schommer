CREATE TABLE tx_produktshow_domain_model_produkt (
	titel varchar(255) NOT NULL DEFAULT '',
	preis double(11,2) NOT NULL DEFAULT '0.00',
	lager int(11) NOT NULL DEFAULT '0',
	lieferzeit varchar(255) NOT NULL DEFAULT '',
	dateiname varchar(255) NOT NULL DEFAULT '',
	kategory int(11) unsigned NOT NULL DEFAULT '0'
);

CREATE TABLE tx_produktshow_domain_model_kategory (
	namekategory varchar(255) NOT NULL DEFAULT '',
	produkt int(11) unsigned NOT NULL DEFAULT '0'
);
