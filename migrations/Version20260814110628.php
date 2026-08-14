<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260814110628 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE blueprints ADD device_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE blueprints ADD CONSTRAINT FK_BFF94E8494A4C7D4 FOREIGN KEY (device_id) REFERENCES devices (id)');
        $this->addSql('CREATE INDEX IDX_BFF94E8494A4C7D4 ON blueprints (device_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE blueprints DROP CONSTRAINT FK_BFF94E8494A4C7D4');
        $this->addSql('DROP INDEX IDX_BFF94E8494A4C7D4');
        $this->addSql('ALTER TABLE blueprints DROP device_id');
    }
}
