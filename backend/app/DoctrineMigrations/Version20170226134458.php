<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20170226134458 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE activity (doctrine_id INT AUTO_INCREMENT NOT NULL, retromat_id SMALLINT NOT NULL, language VARCHAR(2) NOT NULL, `phase` SMALLINT NOT NULL, `name` VARCHAR(255) NOT NULL, summary VARCHAR(255) NOT NULL, `desc` LONGTEXT NOT NULL, duration VARCHAR(255) DEFAULT NULL, source LONGTEXT DEFAULT NULL, more LONGTEXT DEFAULT NULL, suitable VARCHAR(255) DEFAULT NULL, UNIQUE INDEX UNIQ_AC74095AA9A6C442 (retromat_id), INDEX retromatId_index (retromat_id), INDEX phase_index (phase), PRIMARY KEY(doctrine_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE activity');
    }
}
