<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20200324101806 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'sqlite', 'Migration can only be executed safely on \'sqlite\'.');

        $this->addSql('DROP INDEX IDX_4C62E638A76ED395');
        $this->addSql('DROP INDEX UNIQ_4C62E638E7927C74');
        $this->addSql('CREATE TEMPORARY TABLE __temp__contact AS SELECT id, user_id, firstname, lastname, address, zip, city, country, phonenumber, birthday, email FROM Contact');
        $this->addSql('DROP TABLE Contact');
        $this->addSql('CREATE TABLE Contact (id INTEGER NOT NULL, user_id INTEGER DEFAULT NULL, firstname VARCHAR(255) NOT NULL COLLATE BINARY, lastname VARCHAR(255) NOT NULL COLLATE BINARY, address VARCHAR(255) NOT NULL COLLATE BINARY, zip VARCHAR(255) NOT NULL COLLATE BINARY, city VARCHAR(255) NOT NULL COLLATE BINARY, country VARCHAR(255) NOT NULL COLLATE BINARY, phonenumber VARCHAR(255) COLLATE BINARY, birthday DATETIME, email VARCHAR(255) COLLATE BINARY, PRIMARY KEY(id), CONSTRAINT FK_4C62E638A76ED395 FOREIGN KEY (user_id) REFERENCES user (id) NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('INSERT INTO Contact (id, user_id, firstname, lastname, address, zip, city, country, phonenumber, birthday, email) SELECT id, user_id, firstname, lastname, address, zip, city, country, phonenumber, birthday, email FROM __temp__contact');
        $this->addSql('DROP TABLE __temp__contact');
        $this->addSql('CREATE INDEX IDX_4C62E638A76ED395 ON Contact (user_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_4C62E638E7927C74 ON Contact (email)');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'sqlite', 'Migration can only be executed safely on \'sqlite\'.');

        $this->addSql('DROP INDEX UNIQ_4C62E638E7927C74');
        $this->addSql('DROP INDEX IDX_4C62E638A76ED395');
        $this->addSql('CREATE TEMPORARY TABLE __temp__contact AS SELECT id, user_id, firstname, lastname, address, zip, city, country, phonenumber, birthday, email FROM Contact');
        $this->addSql('DROP TABLE Contact');
        $this->addSql('CREATE TABLE Contact (id INTEGER NOT NULL, user_id INTEGER DEFAULT NULL, firstname VARCHAR(255) NOT NULL, lastname VARCHAR(255) NOT NULL, address VARCHAR(255) NOT NULL, zip VARCHAR(255) NOT NULL, city VARCHAR(255) NOT NULL, country VARCHAR(255) NOT NULL, phonenumber VARCHAR(255) NOT NULL, birthday DATETIME NOT NULL, email VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('INSERT INTO Contact (id, user_id, firstname, lastname, address, zip, city, country, phonenumber, birthday, email) SELECT id, user_id, firstname, lastname, address, zip, city, country, phonenumber, birthday, email FROM __temp__contact');
        $this->addSql('DROP TABLE __temp__contact');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_4C62E638E7927C74 ON Contact (email)');
        $this->addSql('CREATE INDEX IDX_4C62E638A76ED395 ON Contact (user_id)');
    }
}
