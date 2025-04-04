<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250218032157 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'img extends';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE movie ADD img_id INT NOT NULL');
        $this->addSql('ALTER TABLE movie ADD CONSTRAINT FK_1D5EF26FC06A9F55 FOREIGN KEY (img_id) REFERENCES media_object (id)');
        $this->addSql('CREATE INDEX IDX_1D5EF26FC06A9F55 ON movie (img_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE movie DROP FOREIGN KEY FK_1D5EF26FC06A9F55');
        $this->addSql('DROP INDEX IDX_1D5EF26FC06A9F55 ON movie');
        $this->addSql('ALTER TABLE movie DROP img_id');
    }
}
