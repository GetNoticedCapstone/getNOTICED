CREATE DATABASE if not exists getnoticed DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;

USE getnoticed;

CREATE TABLE IF NOT EXISTS Admin (
    AdminID INT NOT NULL,
    AdminName VARCHAR(45) NULL,
    AdminPassword VARCHAR(15) NULL,
    PRIMARY KEY (AdminID)
);

CREATE TABLE IF NOT EXISTS SignIn (
  MemberID INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
  Email VARCHAR(45) NULL,
  Password VARCHAR(45) NULL,
  ResetPhrase VARCHAR(255) NULL,
  ResetAnswer VARCHAR(100) NULL
);

CREATE TABLE IF NOT EXISTS Members (
  MemberID INT NULL,
  FirstName VARCHAR(45) NULL,
  LastName VARCHAR(45) NULL,
  JobTitle VARCHAR (45) NULL,
  Phone VARCHAR(15) NULL,
  Address VARCHAR(100) NULL,
  City VARCHAR(100) NULL,
  State VARCHAR(2) NULL,
  Zip VARCHAR(10) NULL,
  WebsiteURL VARCHAR(45) NULL,
  GitHub VARCHAR (45) NULL,
  LinkedIn VARCHAR (45) NULL,
  Facebook VARCHAR (45) NULL,
  Skill1 VARCHAR (255) NULL,
  Skill2 VARCHAR (255) NULL,
  Skill3 VARCHAR (255) NULL,
  MostRecentJob VARCHAR (255) NULL,
  StartDate DATE NULL,
  EndDate DATE NULL,
  JobResp VARCHAR (255) NULL,
  Objective VARCHAR (255) NULL,
  Summary VARCHAR (255) NULL,
  SchoolName VARCHAR (255) NULL,
  DegreeProgram VARCHAR (255) NULL,
  DegreeType VARCHAR (25) NULL,
  DegreeStart DATE NULL,
  DegreeFinish DATE NULL,
  DegreeDetail VARCHAR (255) NULL,
  PRIMARY KEY (MemberID),
  CONSTRAINT MemberID_m
    FOREIGN KEY (MemberID)
    REFERENCES getnoticed.SignIn (MemberID)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
);

CREATE TABLE IF NOT EXISTS MemberStatus (
  MemberID INT NULL,
  StatusCode VARCHAR(1) NULL,
  DateNew DATE NULL,
  DateClosed DATE NULL,
  DateRenewed DATE NULL,
  PRIMARY KEY (MemberID),
  CONSTRAINT MemberID_ms
    FOREIGN KEY (MemberID)
    REFERENCES getnoticed.SignIn (MemberID)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
);

CREATE TABLE IF NOT EXISTS MemberTheme (
  MemberID INT,
  ThemeID INT,
  PRIMARY KEY (MemberID),
  CONSTRAINT MemberID_mt
    FOREIGN KEY (MemberID)
    REFERENCES getnoticed.SignIn (MemberID)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
);

CREATE TABLE IF NOT EXISTS Theme (
  ThemeID INT NOT NULL,
  ThemeName VARCHAR(45) NULL,
  PRIMARY KEY (ThemeID)
);      




/*--------------------------------------------------------------------*/

CREATE DATABASE if not exists getnoticed DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;

USE getnoticed;

CREATE TABLE IF NOT EXISTS Admin (
    AdminID INT NOT NULL,
    AdminName VARCHAR(45) NULL,
    AdminPassword VARCHAR(15) NULL,
    PRIMARY KEY (AdminID)
);

CREATE TABLE IF NOT EXISTS SignIn (
  MemberID INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
  Email VARCHAR(45) NULL,
  Password VARCHAR(45) NULL,
  ResetPhrase VARCHAR(255) NULL,
  ResetAnswer VARCHAR(100) NULL
);

CREATE TABLE IF NOT EXISTS Members (
  MemberIDM INT NULL,
  FirstName VARCHAR(45) NULL,
  LastName VARCHAR(45) NULL,
  JobTitle VARCHAR (45) NULL,
  Phone VARCHAR(15) NULL,
  Address1 VARCHAR(100) NULL,
  Address2 VARCHAR(100) NULL,
  City VARCHAR(100) NULL,
  State VARCHAR(2) NULL,
  ZipCode VARCHAR(10) NULL,
  WebsiteURL VARCHAR(45) NULL,
  GitHub VARCHAR (45) NULL,
  LinkedIn VARCHAR (45) NULL,
  Facebook VARCHAR (45) NULL,
  Skill1 VARCHAR (255) NULL,
  Skill2 VARCHAR (255) NULL,
  Skill3 VARCHAR (255) NULL,
  StartDate DATE NULL,
  EndDate DATE NULL,
  JobResp VARCHAR (255) NULL,
  Objective VARCHAR (255) NULL,
  Summary VARCHAR (255) NULL,
  SchoolName VARCHAR (255) NULL,
  DegreeProgram VARCHAR (255) NULL,
  DegreeType VARCHAR (25) NULL,
  DegreeStart DATE NULL,
  DegreeFinish DATE NULL,
  DegreeDetail VARCHAR (255) NULL,
  PRIMARY KEY (MemberIDM),
  CONSTRAINT MemberIDM
    FOREIGN KEY (MemberIDM)
    REFERENCES getnoticed.SignIn (MemberID)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
);

CREATE TABLE IF NOT EXISTS MemberStatus (
  MemberIDS INT NULL,
  StatusCode VARCHAR(1) NULL,
  DateNew DATE NULL,
  DateClosed DATE NULL,
  DateRenewed DATE NULL,
  PRIMARY KEY (MemberIDS),
  CONSTRAINT MemberIDS
    FOREIGN KEY (MemberIDS)
    REFERENCES getnoticed.SignIn (MemberID)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
);

CREATE TABLE IF NOT EXISTS MemberTheme (
  MemberIDT INT,
  ThemeID INT,
  PRIMARY KEY (MemberIDT),
  CONSTRAINT MemberIDT
    FOREIGN KEY (MemberIDT)
    REFERENCES getnoticed.SignIn (MemberID)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
);

CREATE TABLE IF NOT EXISTS Theme (
  ThemeID INT NOT NULL,
  ThemeName VARCHAR(45) NULL,
  PRIMARY KEY (ThemeID)
);     
