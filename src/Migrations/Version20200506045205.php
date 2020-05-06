<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200506045205 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE etape_circuit DROP FOREIGN KEY FK_484C507D7F449E57');
        $this->addSql('DROP INDEX IDX_484C507D7F449E57 ON etape_circuit');
        $this->addSql('ALTER TABLE etape_circuit DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE etape_circuit DROP id_id');
        $this->addSql('ALTER TABLE etape_circuit ADD PRIMARY KEY (code_ville_etape_id, code_circuit_etape_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE etape_circuit DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE etape_circuit ADD id_id VARCHAR(50) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE etape_circuit ADD CONSTRAINT FK_484C507D7F449E57 FOREIGN KEY (id_id) REFERENCES ville (id)');
        $this->addSql('CREATE INDEX IDX_484C507D7F449E57 ON etape_circuit (id_id)');
        $this->addSql('ALTER TABLE etape_circuit ADD PRIMARY KEY (id_id, code_ville_etape_id, code_circuit_etape_id)');
    }
}
