<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20170812191656 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE activity2 (doctrine_id INT AUTO_INCREMENT NOT NULL, retromat_id SMALLINT NOT NULL, `phase` SMALLINT NOT NULL, duration VARCHAR(255) DEFAULT NULL, source LONGTEXT DEFAULT NULL, more LONGTEXT DEFAULT NULL, suitable VARCHAR(255) DEFAULT NULL, UNIQUE INDEX UNIQ_91C772EEA9A6C442 (retromat_id), PRIMARY KEY(doctrine_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE activity2translation (id INT AUTO_INCREMENT NOT NULL, translatable_id INT DEFAULT NULL, `name` VARCHAR(255) NOT NULL, summary VARCHAR(255) NOT NULL, `desc` LONGTEXT NOT NULL, locale VARCHAR(255) NOT NULL, INDEX IDX_C1A42852C2AC5D3 (translatable_id), UNIQUE INDEX activity2translation_unique_translation (translatable_id, locale), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE activity2translation ADD CONSTRAINT FK_C1A42852C2AC5D3 FOREIGN KEY (translatable_id) REFERENCES activity2 (id) ON DELETE CASCADE');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE activity2translation DROP FOREIGN KEY FK_C1A42852C2AC5D3');
        $this->addSql('DROP TABLE activity2');
        $this->addSql('DROP TABLE activity2translation');
    }
}
