CREATE DATABASE wyd2;

CREATE TABLE IF NOT EXISTS `wyd2`.users(
    `user`          VARCHAR(12) NOT NULL PRIMARY KEY,
    `pass`          VARCHAR(60) NOT NULL,
    `email`         VARCHAR(50) NOT NULL,
    `name`          VARCHAR(16) NOT NULL,
    `access`        INT(1) NOT NULL,
    `check`         INT(1) NOT NULL,
    `validate`      VARCHAR(32) NOT NULL,
    `createDate`    DATETIME NOT NULL,
    `updateDate`    DATETIME NULL
);

CREATE TABLE IF NOT EXISTS `wyd2`.players(
    `user`          VARCHAR(12) NOT NULL,
    `nick`          VARCHAR(12) NOT NULL,
    `level`         INT(4) NOT NULL,
    `class`         INT(1) NOT NULL,
    `evolution`     INT(1) NOT NULL,
    `guild`         INT(3) NOT NULL,
    PRIMARY KEY (`user`, `nick`, `evolution`)
);

CREATE TABLE IF NOT EXISTS `wyd2`.cities(
    `channel`       INT(1) NOT NULL PRIMARY KEY,
    `armia`         INT(3) NULL,
    `azran`         INT(3) NULL,
    `erion`         INT(3) NULL,
    `nippleheim`    INT(3) NULL,
    `noatun`        INT(3) NULL
);

CREATE TABLE IF NOT EXISTS `wyd2`.challs(
    `channel`       INT(1) NOT NULL PRIMARY KEY,
    `armia`         INT(3) NULL,
    `azran`         INT(3) NULL,
    `erion`         INT(3) NULL,
    `nippleheim`    INT(3) NULL,
    `noatun`        INT(3) NULL
);

CREATE TABLE IF NOT EXISTS `wyd2`.news(
    `id`            INT AUTO_INCREMENT PRIMARY KEY,
    `title`         VARCHAR(50) NOT NULL,
    `content`       TEXT NOT NULL,
    `category`      INT(1) NOT NULL,
    `owner`         VARCHAR(12) NOT NULL,
    `date`          DATETIME NOT NULL
);
