#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: roles
#------------------------------------------------------------

CREATE TABLE roles(
        id   Int  Auto_increment  NOT NULL ,
        role Varchar (50) NOT NULL
	,CONSTRAINT roles_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: users
#------------------------------------------------------------

CREATE TABLE users(
        id           Int  Auto_increment  NOT NULL ,
        name         Varchar (50) NOT NULL ,
        firstname    Varchar (50) NOT NULL ,
        email        Varchar (50) NOT NULL ,
        phoneNumber  Varchar (12) NOT NULL ,
        licensefftir Varchar (20) NOT NULL ,
        id_roles     Int NOT NULL
	,CONSTRAINT users_AK UNIQUE (licensefftir)
	,CONSTRAINT users_PK PRIMARY KEY (id)

	,CONSTRAINT users_roles_FK FOREIGN KEY (id_roles) REFERENCES roles(id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: games
#------------------------------------------------------------

CREATE TABLE games(
        id           Int  Auto_increment  NOT NULL ,
        timing       Float NOT NULL ,
        score        Int NOT NULL ,
        nonshoot     Int NOT NULL ,
        observations Text ,
        date         Datetime NOT NULL ,
        id_users     Int NOT NULL
	,CONSTRAINT games_PK PRIMARY KEY (id)

	,CONSTRAINT games_users_FK FOREIGN KEY (id_users) REFERENCES users(id)
)ENGINE=InnoDB;

