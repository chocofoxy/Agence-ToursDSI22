<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200506043114 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE etape_circuit (id_id VARCHAR(50) NOT NULL, code_ville_etape_id VARCHAR(50) NOT NULL, code_circuit_etape_id VARCHAR(50) NOT NULL, duree_etape TIME NOT NULL, ordre_etape INT NOT NULL, INDEX IDX_484C507D7F449E57 (id_id), INDEX IDX_484C507DC3548F59 (code_ville_etape_id), INDEX IDX_484C507D71827C11 (code_circuit_etape_id), PRIMARY KEY(id_id, code_ville_etape_id, code_circuit_etape_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE circuit (id VARCHAR(50) NOT NULL, des_circuit VARCHAR(255) NOT NULL, duree_circuit TIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE destination (id VARCHAR(50) NOT NULL, des_dest VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ville (id VARCHAR(50) NOT NULL, code_dest_id VARCHAR(50) DEFAULT NULL, des_ville VARCHAR(255) NOT NULL, INDEX IDX_43C3D9C34124DC0B (code_dest_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE etape_circuit ADD CONSTRAINT FK_484C507D7F449E57 FOREIGN KEY (id_id) REFERENCES ville (id)');
        $this->addSql('ALTER TABLE etape_circuit ADD CONSTRAINT FK_484C507DC3548F59 FOREIGN KEY (code_ville_etape_id) REFERENCES ville (id)');
        $this->addSql('ALTER TABLE etape_circuit ADD CONSTRAINT FK_484C507D71827C11 FOREIGN KEY (code_circuit_etape_id) REFERENCES circuit (id)');
        $this->addSql('ALTER TABLE ville ADD CONSTRAINT FK_43C3D9C34124DC0B FOREIGN KEY (code_dest_id) REFERENCES destination (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE etape_circuit DROP FOREIGN KEY FK_484C507D71827C11');
        $this->addSql('ALTER TABLE ville DROP FOREIGN KEY FK_43C3D9C34124DC0B');
        $this->addSql('ALTER TABLE etape_circuit DROP FOREIGN KEY FK_484C507D7F449E57');
        $this->addSql('ALTER TABLE etape_circuit DROP FOREIGN KEY FK_484C507DC3548F59');
        $this->addSql('DROP TABLE etape_circuit');
        $this->addSql('DROP TABLE circuit');
        $this->addSql('DROP TABLE destination');
        $this->addSql('DROP TABLE ville');
    }
}
