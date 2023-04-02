<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210411142910 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE profil');
        $this->addSql('DROP TABLE user');
        $this->addSql('ALTER TABLE traget MODIFY id_traget INT NOT NULL');
        $this->addSql('DROP INDEX id_user ON traget');
        $this->addSql('ALTER TABLE traget DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE traget ADD depart VARCHAR(255) NOT NULL, ADD arrivee VARCHAR(255) NOT NULL, ADD passager NUMERIC(10, 0) NOT NULL, ADD prix DOUBLE PRECISION NOT NULL, ADD heure_depart TIME NOT NULL, ADD heure_arrivee TIME NOT NULL, DROP id_user, DROP ville_depart, DROP ville_arrivee, DROP nbr_place, CHANGE id_traget id INT AUTO_INCREMENT NOT NULL, CHANGE date date_depart DATE NOT NULL');
        $this->addSql('ALTER TABLE traget ADD PRIMARY KEY (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE profil (id_profil INT AUTO_INCREMENT NOT NULL, id_user INT NOT NULL, adress TEXT CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, type_vehicule VARCHAR(30) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, INDEX id_user (id_user), PRIMARY KEY(id_profil)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = MyISAM COMMENT = \'\' ');
        $this->addSql('CREATE TABLE user (id_user INT AUTO_INCREMENT NOT NULL, nom VARCHAR(20) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, prenom VARCHAR(20) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, date_naissance DATE NOT NULL, sexe INT NOT NULL, email VARCHAR(50) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, password VARCHAR(1000) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, date_inscription DATE NOT NULL, adress VARCHAR(100) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, telephone CHAR(10) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, username VARCHAR(200) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, PRIMARY KEY(id_user)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = MyISAM COMMENT = \'\' ');
        $this->addSql('ALTER TABLE traget MODIFY id INT NOT NULL');
        $this->addSql('ALTER TABLE traget DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE traget ADD id_user INT NOT NULL, ADD ville_depart VARCHAR(20) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, ADD ville_arrivee VARCHAR(20) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, ADD nbr_place INT NOT NULL, DROP depart, DROP arrivee, DROP passager, DROP prix, DROP heure_depart, DROP heure_arrivee, CHANGE id id_traget INT AUTO_INCREMENT NOT NULL, CHANGE date_depart date DATE NOT NULL');
        $this->addSql('CREATE INDEX id_user ON traget (id_user)');
        $this->addSql('ALTER TABLE traget ADD PRIMARY KEY (id_traget)');
    }
}
