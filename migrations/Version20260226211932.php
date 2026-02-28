<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260226211932 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE pokemon ADD moveset_move1 VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE pokemon ADD moveset_move2 VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE pokemon ADD moveset_move3 VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE pokemon ADD moveset_move4 VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE pokemon ADD ivs_hp_iv INT NOT NULL');
        $this->addSql('ALTER TABLE pokemon ADD ivs_atk_iv INT NOT NULL');
        $this->addSql('ALTER TABLE pokemon ADD ivs_def_iv INT NOT NULL');
        $this->addSql('ALTER TABLE pokemon ADD ivs_sp_atk_iv INT NOT NULL');
        $this->addSql('ALTER TABLE pokemon ADD ivs_sp_def_iv INT NOT NULL');
        $this->addSql('ALTER TABLE pokemon ADD ivs_speed_iv INT NOT NULL');
        $this->addSql('ALTER TABLE pokemon ADD evs_hp_ev INT NOT NULL');
        $this->addSql('ALTER TABLE pokemon ADD evs_atk_ev INT NOT NULL');
        $this->addSql('ALTER TABLE pokemon ADD evs_def_ev INT NOT NULL');
        $this->addSql('ALTER TABLE pokemon ADD evs_sp_atk_ev INT NOT NULL');
        $this->addSql('ALTER TABLE pokemon ADD evs_sp_def_ev INT NOT NULL');
        $this->addSql('ALTER TABLE pokemon ADD evs_speed_ev INT NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE pokemon DROP moveset_move1');
        $this->addSql('ALTER TABLE pokemon DROP moveset_move2');
        $this->addSql('ALTER TABLE pokemon DROP moveset_move3');
        $this->addSql('ALTER TABLE pokemon DROP moveset_move4');
        $this->addSql('ALTER TABLE pokemon DROP ivs_hp_iv');
        $this->addSql('ALTER TABLE pokemon DROP ivs_atk_iv');
        $this->addSql('ALTER TABLE pokemon DROP ivs_def_iv');
        $this->addSql('ALTER TABLE pokemon DROP ivs_sp_atk_iv');
        $this->addSql('ALTER TABLE pokemon DROP ivs_sp_def_iv');
        $this->addSql('ALTER TABLE pokemon DROP ivs_speed_iv');
        $this->addSql('ALTER TABLE pokemon DROP evs_hp_ev');
        $this->addSql('ALTER TABLE pokemon DROP evs_atk_ev');
        $this->addSql('ALTER TABLE pokemon DROP evs_def_ev');
        $this->addSql('ALTER TABLE pokemon DROP evs_sp_atk_ev');
        $this->addSql('ALTER TABLE pokemon DROP evs_sp_def_ev');
        $this->addSql('ALTER TABLE pokemon DROP evs_speed_ev');
    }
}
