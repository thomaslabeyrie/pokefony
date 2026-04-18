<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260309204526 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user_pokemon DROP CONSTRAINT fk_3ad18ef9a76ed395');
        $this->addSql('ALTER TABLE user_pokemon DROP CONSTRAINT fk_3ad18ef92fe71c3e');
        $this->addSql('DROP TABLE user_pokemon');
        $this->addSql('ALTER TABLE pokemon ADD user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE pokemon ADD CONSTRAINT FK_62DC90F3A76ED395 FOREIGN KEY (user_id) REFERENCES "user" (id)');
        $this->addSql('CREATE INDEX IDX_62DC90F3A76ED395 ON pokemon (user_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE user_pokemon (user_id INT NOT NULL, pokemon_id INT NOT NULL, PRIMARY KEY (user_id, pokemon_id))');
        $this->addSql('CREATE INDEX idx_3ad18ef9a76ed395 ON user_pokemon (user_id)');
        $this->addSql('CREATE INDEX idx_3ad18ef92fe71c3e ON user_pokemon (pokemon_id)');
        $this->addSql('ALTER TABLE user_pokemon ADD CONSTRAINT fk_3ad18ef9a76ed395 FOREIGN KEY (user_id) REFERENCES "user" (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE user_pokemon ADD CONSTRAINT fk_3ad18ef92fe71c3e FOREIGN KEY (pokemon_id) REFERENCES pokemon (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE pokemon DROP CONSTRAINT FK_62DC90F3A76ED395');
        $this->addSql('DROP INDEX IDX_62DC90F3A76ED395');
        $this->addSql('ALTER TABLE pokemon DROP user_id');
    }
}
