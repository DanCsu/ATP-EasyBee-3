CREATE TABLE Niveau_Formation (
    idNiveau INT AUTO_INCREMENT,
    libelle VARCHAR(255) NOT NULL,
    PRIMARY KEY (idNiveau)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE Modalite_Formation (
    idModalite INT AUTO_INCREMENT,
    libelle VARCHAR(255) NOT NULL,
    PRIMARY KEY (idModalite)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE Equipement_Formation (
    idEquipement INT AUTO_INCREMENT,
    libelle VARCHAR(255) NOT NULL,
    PRIMARY KEY (idEquipement)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE Lieu_Formation (
    idLieu INT AUTO_INCREMENT,
    libelle VARCHAR(255) NOT NULL,
    PRIMARY KEY (idLieu)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE Themes (
    idTheme INT AUTO_INCREMENT,
    nomTheme VARCHAR(255) NOT NULL,
    PRIMARY KEY (idTheme)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE Clients (
    idUtilisateur INT AUTO_INCREMENT,
    nomClient VARCHAR(255) NOT NULL,
    prenomClient VARCHAR(255) NOT NULL,
    emailClient VARCHAR(255) NOT NULL UNIQUE,
    mdpClient VARCHAR(255) NOT NULL,
    identifiantClient VARCHAR(255) NOT NULL UNIQUE,
    PRIMARY KEY (idUtilisateur)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE Formateurs (
    idFormateur INT AUTO_INCREMENT,
    nomFormateur VARCHAR(255) NOT NULL,
    prenomFormateur VARCHAR(255) NOT NULL,
    mailFormateur VARCHAR(255) NOT NULL,
    telFormateur VARCHAR(15),
    PRIMARY KEY (idFormateur)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE Formations (
    idFormation INT AUTO_INCREMENT,
    titreFormation VARCHAR(255) NOT NULL,
    descriptionFormation TEXT,
    prixFormation DECIMAL(10, 2) NOT NULL,
    dateDebutFormation DATE NOT NULL,
    dureeFormation INT NOT NULL,
    placesMaxFormation INT NOT NULL,
    idNiveau INT,
    idModalite INT,
    idLieu INT,
    PRIMARY KEY (idFormation),
    FOREIGN KEY (idNiveau) REFERENCES Niveau_Formation(idNiveau),
    FOREIGN KEY (idModalite) REFERENCES Modalite_Formation(idModalite),
    FOREIGN KEY (idLieu) REFERENCES Lieu_Formation(idLieu)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE Prerequis (
    idFormation INT,
    idFormationPrerequis INT,
    PRIMARY KEY (idFormation, idFormationPrerequis),
    FOREIGN KEY (idFormation) REFERENCES Formations(idFormation),
    FOREIGN KEY (idFormationPrerequis) REFERENCES Formations(idFormation)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE Attribuer (
    idFormation INT,
    idFormateur INT,
    PRIMARY KEY (idFormation, idFormateur),
    FOREIGN KEY (idFormation) REFERENCES Formations(idFormation),
    FOREIGN KEY (idFormateur) REFERENCES Formateurs(idFormateur)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE Necessaire (
    idFormation INT,
    idEquipement INT,
    PRIMARY KEY (idFormation, idEquipement),
    FOREIGN KEY (idFormation) REFERENCES Formations(idFormation),
    FOREIGN KEY (idEquipement) REFERENCES Equipement_Formation(idEquipement)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE Situer (
    idFormation INT,
    idLieu INT,
    PRIMARY KEY (idFormation, idLieu),
    FOREIGN KEY (idFormation) REFERENCES Formations(idFormation),
    FOREIGN KEY (idLieu) REFERENCES Lieu_Formation(idLieu)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE Associer (
    idFormation INT,
    idTheme INT,
    PRIMARY KEY (idFormation, idTheme),
    FOREIGN KEY (idFormation) REFERENCES Formations(idFormation),
    FOREIGN KEY (idTheme) REFERENCES Themes(idTheme)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE Inscrire (
    idFormation INT,
    idUtilisateur INT,
    etatInscription VARCHAR(50) NOT NULL,
    dateInscription DATE NOT NULL,
    montantRegleInscription DECIMAL(10, 2),
    PRIMARY KEY (idFormation, idUtilisateur),
    FOREIGN KEY (idFormation) REFERENCES Formations(idFormation),
    FOREIGN KEY (idUtilisateur) REFERENCES Clients(idUtilisateur)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;