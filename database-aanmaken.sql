// 27-09-2012 21:42 Erwin Nijboer
CREATE TABLE aanbod (
    ID int NOT NULL AUTO_INCREMENT,
    titel varchar(255) NOT NULL,
    reistijd int NOT NULL,
    frequentie int NOT NULL,
    oppervlakte int NOT NULL,
    voorzieningen varchar(255) NOT NULL,
    verhuurder varchar(255) NOT NULL,
    plaatsnaam varchar(255) NOT NULL,
    imgpath varchar(255) NOT NULL,
    PRIMARY KEY (ID)
);