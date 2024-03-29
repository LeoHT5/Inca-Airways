IF DB_ID('IncaAirways') IS NOT NULL
	DROP DATABASE IncaAirways
GO

CREATE DATABASE IncaAirways
GO

USE IncaAirways

/* TABLAS */
--AEROPUERTO
CREATE TABLE AEROPUERTO (
  ID_AER	VARCHAR(4)		NOT NULL PRIMARY KEY,
  NOM_AER	VARCHAR(100),
  CIU_AER	VARCHAR(50),
  PAIS_AER	VARCHAR(50)
)
ALTER TABLE AEROPUERTO ADD CONSTRAINT CHK_ID_AER CHECK (ID_AER LIKE '[A-Z][A-Z][A-Z][0-9]')

--AVION
CREATE TABLE AVION (
  ID_AVN	VARCHAR(4)		NOT NULL PRIMARY KEY,
  MOD_AVN	VARCHAR(50)		NOT NULL,
  CAP_AVN	INT				NOT NULL,
  FAB_AVN	INT				NOT NULL,
  AEROLINEA VARCHAR(50)		DEFAULT 'INCA AIRWAYS'
)
ALTER TABLE AVION ADD CONSTRAINT CHK_ID_AVN CHECK (ID_AVN LIKE '[A-Z][0-9][0-9][0-9]')

--VUELO
CREATE TABLE VUELO (
  ID_VUE		VARCHAR(7)		NOT NULL PRIMARY KEY,
  ORIG_VUE		VARCHAR(4)		NOT NULL,
  DEST_VUE		VARCHAR(4)		NOT NULL,
  FEC_SALIDA	DATETIME		NOT NULL,
  FEC_LLEGADA	DATETIME		NOT NULL,
  DUR_VUE		INT				NOT NULL CHECK(DUR_VUE>0),
  ID_AVN		VARCHAR(4)		NOT NULL
)
ALTER TABLE VUELO ADD FOREIGN KEY (ORIG_VUE) REFERENCES AEROPUERTO(ID_AER)
ALTER TABLE VUELO ADD FOREIGN KEY (DEST_VUE) REFERENCES AEROPUERTO(ID_AER)
ALTER TABLE VUELO ADD FOREIGN KEY (ID_AVN) REFERENCES AVION(ID_AVN)
ALTER TABLE VUELO ADD CONSTRAINT CHK_ID_VUE CHECK (ID_VUE LIKE 'VUE[0-9][0-9][0-9][0-9]')
ALTER TABLE VUELO ADD CONSTRAINT CHK_FEC_SALIDA CHECK (FEC_SALIDA<=FEC_LLEGADA)

--PASAJERO
CREATE TABLE PASAJERO (
  ID_PAS	INT				NOT NULL IDENTITY(1,1) PRIMARY KEY,
  NOM_PAS	VARCHAR(60)		NOT NULL,
  APE_PAS	VARCHAR(60)		NOT NULL,
  FEC_NAC	DATE			NOT NULL CHECK(FEC_NAC<GETDATE()),
  DIR_PAS	VARCHAR(100)	NOT NULL,
  TEL_PAS	VARCHAR(9)		NOT NULL CHECK(TEL_PAS LIKE '9[0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]'),
  EMAIL_PAS VARCHAR(50)		NOT NULL
)

--RESERVA
CREATE TABLE RESERVA (
  ID_RES	INT				NOT NULL IDENTITY(1,1) PRIMARY KEY,
  ID_VUE	VARCHAR(7)		NOT NULL,
  ID_PAS	INT				NOT NULL,
  FEC_RES	DATETIME		DEFAULT GETDATE()
)
ALTER TABLE RESERVA ADD FOREIGN KEY (ID_VUE) REFERENCES VUELO(ID_VUE)
ALTER TABLE RESERVA ADD FOREIGN KEY (ID_PAS) REFERENCES PASAJERO(ID_PAS)


-----DATOS-----
INSERT INTO AEROPUERTO (ID_AER, NOM_AER, CIU_AER, PAIS_AER) VALUES 
		('PER1', 'Aeropuerto Internacional Jorge Ch�vez', 'Lima', 'Per�'),
		('PER2', 'Aeropuerto Internacional Alejandro Velasco Astete', 'Cusco', 'Per�'),
		('USA1', 'John F. Kennedy International Airport', 'New York', 'Estados Unidos'),
		('UKL1', 'London Heathrow Airport', 'Londres', 'Reino Unido'),
		('FRA1', 'Charles de Gaulle Airport', 'Par�s', 'Francia'),
		('ESP1', 'Adolfo Su�rez Madrid-Barajas Airport', 'Madrid', 'Espa�a'),
		('AUS1', 'Sydney Airport', 'S�dney', 'Australia')

-- Insertar registros en la tabla AVION
INSERT INTO AVION (ID_AVN, MOD_AVN, CAP_AVN, FAB_AVN, AEROLINEA) VALUES 
		('A001','Airbus A320',180,2015,'INCA AIRWAYS'),
        ('B002','Boeing 737',160,2012,'INCA AIRWAYS'),
        ('A003','Airbus A330',250,2018,'INCA AIRWAYS'),
        ('B004','Boeing 787',220,2016,'INCA AIRWAYS'),
        ('A005','Airbus A350',300,2020,'INCA AIRWAYS'),
        ('B006','Boeing 777',280,2014,'INCA AIRWAYS'),
        ('A007','Airbus A380',500,2010,'INCA AIRWAYS')

-- Insertar registros en la tabla VUELO
INSERT INTO VUELO (ID_VUE, ORIG_VUE, DEST_VUE, FEC_SALIDA, FEC_LLEGADA, DUR_VUE, ID_AVN) VALUES 
		('VUE0001','PER1','PER2','2023-06-13 08:00:00','2023-06-13 09:30:00',90,'A001'),
        ('VUE0002','USA1','UKL1','2023-06-15 12:00:00','2023-06-15 22:30:00',630,'B002'),
        ('VUE0003','FRA1','ESP1','2023-06-13 09:30:00','2023-06-13 11:45:00',135,'A003'),
        ('VUE0004','AUS1','PER1','2023-06-16 18:00:00','2023-06-17 03:45:00',585,'B004'),
        ('VUE0005','PER2','USA1','2023-06-12 14:30:00','2023-06-12 23:45:00',615,'A005'),
        ('VUE0006','UKL1','FRA1','2023-06-12 10:45:00','2023-06-12 12:15:00',90,'B006'),
        ('VUE0007','ESP1','AUS1','2023-06-20 21:00:00','2023-06-21 12:15:00',615,'A007')

--Procedimientos Almacenados
--Insertar Pasajero
CREATE PROC usp_InsertarPasajero
@nom_pas VARCHAR(60),
@ape_pas VARCHAR(60),
@fec_nac date,
@dir_pas varchar(100),
@tel_pas varchar(9),
@email_pas varchar(50)
AS
BEGIN 
	INSERT PASAJERO(NOM_PAS,APE_PAS,FEC_NAC,DIR_PAS,TEL_PAS,EMAIL_PAS)
	VALUES(@nom_pas,@ape_pas,@fec_nac,@dir_pas,@tel_pas,@email_pas)
END
GO

CREATE PROCEDURE usp_InsertarReserva
@nom_pas VARCHAR(60),
@ape_pas VARCHAR(60),
@id_vue varchar(7)
AS
BEGIN
    DECLARE @id_pas INT
    SELECT @id_pas = p.ID_PAS
    FROM PASAJERO P
    WHERE P.NOM_PAS=@nom_pas AND P.APE_PAS=@ape_pas

    INSERT INTO RESERVA(ID_VUE,ID_PAS)
    VALUES (@id_vue,@id_pas)
END