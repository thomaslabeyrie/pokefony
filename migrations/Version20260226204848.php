<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260226204848 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE pokemon ADD nickname VARCHAR(32) NOT NULL');
        $this->addSql('ALTER TABLE pokemon ADD level INT NOT NULL');
        $this->addSql('ALTER TABLE pokemon ADD happiness INT NOT NULL');
        $this->addSql('ALTER TABLE pokemon ADD is_shiny BOOLEAN NOT NULL');
        $this->addSql('ALTER TABLE pokemon ADD gender VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE pokemon ADD ability VARCHAR(32) NOT NULL');
        $this->addSql('ALTER TABLE pokemon ADD nature VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE pokemon ADD held_item VARCHAR(64) NOT NULL');
        $this->addSql('ALTER TABLE pokemon DROP name');
        $this->addSql('ALTER TABLE pokemon DROP types');
        $this->addSql('ALTER TABLE pokemon DROP sprite_url');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE pokemon ADD name VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE pokemon ADD types JSON NOT NULL');
        $this->addSql('ALTER TABLE pokemon ADD sprite_url VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE pokemon DROP nickname');
        $this->addSql('ALTER TABLE pokemon DROP level');
        $this->addSql('ALTER TABLE pokemon DROP happiness');
        $this->addSql('ALTER TABLE pokemon DROP is_shiny');
        $this->addSql('ALTER TABLE pokemon DROP gender');
        $this->addSql('ALTER TABLE pokemon DROP ability');
        $this->addSql('ALTER TABLE pokemon DROP nature');
        $this->addSql('ALTER TABLE pokemon DROP held_item');
    }
}
