<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200814092256 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE client_moral (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, adresse VARCHAR(255) NOT NULL, tel INT NOT NULL, email VARCHAR(255) NOT NULL, ninea INT NOT NULL, registre_commerce VARCHAR(255) NOT NULL, raison_sociale VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE client_physique (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, tel INT NOT NULL, adresse VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, identifiant INT NOT NULL, salaire NUMERIC(10, 2) DEFAULT NULL, profession VARCHAR(255) DEFAULT NULL, infos_employeur VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE compte (id INT AUTO_INCREMENT NOT NULL, id_client_entreprise_id INT DEFAULT NULL, id_client_physique_id INT DEFAULT NULL, numero_compte VARCHAR(255) NOT NULL, type_compte VARCHAR(255) NOT NULL, frais_ouverture NUMERIC(10, 2) NOT NULL, remuneration NUMERIC(10, 2) NOT NULL, agios NUMERIC(10, 2) NOT NULL, date_ouverture VARCHAR(255) NOT NULL, date_deblocage VARCHAR(255) NOT NULL, solde NUMERIC(10, 2) NOT NULL, INDEX IDX_CFF65260DFE8647A (id_client_entreprise_id), INDEX IDX_CFF65260D1B9700C (id_client_physique_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE compte ADD CONSTRAINT FK_CFF65260DFE8647A FOREIGN KEY (id_client_entreprise_id) REFERENCES client_moral (id)');
        $this->addSql('ALTER TABLE compte ADD CONSTRAINT FK_CFF65260D1B9700C FOREIGN KEY (id_client_physique_id) REFERENCES client_physique (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE compte DROP FOREIGN KEY FK_CFF65260DFE8647A');
        $this->addSql('ALTER TABLE compte DROP FOREIGN KEY FK_CFF65260D1B9700C');
        $this->addSql('DROP TABLE client_moral');
        $this->addSql('DROP TABLE client_physique');
        $this->addSql('DROP TABLE compte');
    }
}
