<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210414021048 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP INDEX id_user ON traget');
        $this->addSql('ALTER TABLE traget DROP id_user, CHANGE depart depart VARCHAR(255) DEFAULT NULL, CHANGE arrivee arrivee VARCHAR(255) NOT NULL, CHANGE passager passager NUMERIC(10, 0) NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE user (id_user INT AUTO_INCREMENT NOT NULL, nom VARCHAR(20) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, prenom VARCHAR(20) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, date_naissance DATE NOT NULL, sexe INT NOT NULL, email VARCHAR(50) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, password VARCHAR(1000) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, date_inscription DATE NOT NULL, adress VARCHAR(100) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, telephone CHAR(10) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, username VARCHAR(200) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, PRIMARY KEY(id_user)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = MyISAM COMMENT = \'\' ');
        $this->addSql('ALTER TABLE traget ADD id_user INT NOT NULL, CHANGE depart depart VARCHAR(20) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, CHANGE arrivee arrivee VARCHAR(20) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, CHANGE passager passager INT NOT NULL');
        $this->addSql('CREATE INDEX id_user ON traget (id_user)');
    }
}
