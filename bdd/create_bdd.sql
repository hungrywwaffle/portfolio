CREATE DATABASE online_resume;
CREATE TABLE notion
(
    IDNotion    TINYINT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    NameNotion  VARCHAR(64) NOT NULL,
    Skill   TINYINT(1) NOT NULL,
    ProgLang   TINYINT(1) NOT NULL,
    Software   TINYINT(1) NOT NULL,
    Maths   TINYINT(1) NOT NULL,
    Physics   TINYINT(1) NOT NULL
);

CREATE TABLE bloc
(
    IDBloc    TINYINT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    NameBloc  VARCHAR(64) NOT NULL,
    NthYear     VARCHAR(64) NOT NULL,
    DescriptionBloc     VARCHAR(64) NOT NULL,
    StatusBloc      VARCHAR(64) NOT NULL,
    Duration    VARCHAR(64)
);

CREATE TABLE project
(
    IDProject   TINYINT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    IDBloc    TINYINT,
    NameProject  VARCHAR(64) NOT NULL,
    DescriptionProject     VARCHAR(64) NOT NULL,
    StatusProject      VARCHAR(64) NOT NULL,
    LinkProject      VARCHAR(64),
    Deadline    VARCHAR(64),
    FOREIGN KEY (IdBloc) REFERENCES bloc (IdBloc)
);

CREATE TABLE nobl
(
    IDNotion    TINYINT,
    IDBloc  TINYINT,
    PRIMARY KEY (IDNotion, IDBloc),
    FOREIGN KEY (IdNotion) REFERENCES notion (IDNotion),
    FOREIGN KEY (IDBloc) REFERENCES bloc (IDBloc)
);

CREATE TABLE nopr
(
    IDNotion    TINYINT,
    IDProject  TINYINT,
    PRIMARY KEY (IDNotion, IDProject),
    FOREIGN KEY (IdNotion) REFERENCES notion (IDNotion),
    FOREIGN KEY (IDProject) REFERENCES project (IDProject)
);