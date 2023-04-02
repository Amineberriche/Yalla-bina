<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210411143541 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE traget (id INT AUTO_INCREMENT NOT NULL, depart VARCHAR(255) NOT NULL, arrivee VARCHAR(255) NOT NULL, passager NUMERIC(10, 0) NOT NULL, date_depart DATE NOT NULL, prix DOUBLE PRECISION NOT NULL, heure_depart TIME NOT NULL, heure_arrivee TIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('DROP TABLE user');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE user (id_user INT AUTO_INCREMENT NOT NULL, nom VARCHAR(20) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, prenom VARCHAR(20) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, date_naissance DATE NOT NULL, sexe INT NOT NULL, email VARCHAR(50) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, password VARCHAR(1000) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, date_inscription DATE NOT NULL, adress VARCHAR(100) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, telephone CHAR(10) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, username VARCHAR(200) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, PRIMARY KEY(id_user)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = MyISAM COMMENT = \'\' ');
        $this->addSql('DROP TABLE traget');
    }
}
