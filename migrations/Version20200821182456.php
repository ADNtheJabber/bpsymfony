<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200821182456 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE compte ADD CONSTRAINT FK_CFF65260D1B9700C FOREIGN KEY (id_client_physique_id) REFERENCES client_physique (id)');
        $this->addSql('ALTER TABLE compte ADD CONSTRAINT FK_CFF65260DFE8647A FOREIGN KEY (id_client_entreprise_id) REFERENCES client_moral (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE compte DROP FOREIGN KEY FK_CFF65260D1B9700C');
        $this->addSql('ALTER TABLE compte DROP FOREIGN KEY FK_CFF65260DFE8647A');
    }
}
