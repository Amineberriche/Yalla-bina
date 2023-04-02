<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210315222116 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE profil');
        $this->addSql('DROP TABLE traget');
        $this->addSql('ALTER TABLE user MODIFY id_user INT NOT NULL');
        $this->addSql('ALTER TABLE user DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE user DROP nom, DROP prenom, DROP date_naissance, DROP sexe, DROP date_inscription, CHANGE email email VARCHAR(255) NOT NULL, CHANGE password password VARCHAR(255) NOT NULL, CHANGE id_user id INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE user ADD PRIMARY KEY (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE profil (id_profil INT AUTO_INCREMENT NOT NULL, id_user INT NOT NULL, adress TEXT CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, type_vehicule VARCHAR(30) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, INDEX id_user (id_user), PRIMARY KEY(id_profil)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = MyISAM COMMENT = \'\' ');
        $this->addSql('CREATE TABLE traget (id_traget INT AUTO_INCREMENT NOT NULL, id_user INT NOT NULL, ville_depart VARCHAR(20) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, ville_arrivee VARCHAR(20) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, date DATE NOT NULL, nbr_place INT NOT NULL, INDEX id_user (id_user), PRIMARY KEY(id_traget)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = MyISAM COMMENT = \'\' ');
        $this->addSql('ALTER TABLE user MODIFY id INT NOT NULL');
        $this->addSql('ALTER TABLE user DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE user ADD nom VARCHAR(20) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, ADD prenom VARCHAR(20) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, ADD date_naissance DATE NOT NULL, ADD sexe INT NOT NULL, ADD date_inscription DATE NOT NULL, CHANGE email email VARCHAR(50) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, CHANGE password password VARCHAR(50) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, CHANGE id id_user INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE user ADD PRIMARY KEY (id_user)');
    }
}
