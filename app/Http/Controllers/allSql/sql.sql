ALTER TABLE affiliation_product ADD is_room varchar(255) SET DEFAULT 0;

ALTER TABLE affiliation_product ALTER is_room SET DEFAULT 0;

ALTER TABLE  affiliation_partner ADD has_room varchar (255)  DEFAULT  0;

ALTER TABLE card_registation ADD column `is_call` BOOLEAN, ADD column `feedback` varchar(255);

