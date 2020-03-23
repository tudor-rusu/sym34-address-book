<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20200323200729 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        $this->addSql('
            CREATE TABLE IF NOT EXISTS `user` (
                `id`	INTEGER NOT NULL,
                `username`	VARCHAR ( 255 ) NOT NULL,
                `email`	VARCHAR ( 255 ) NOT NULL,
                `password`	VARCHAR ( 255 ) NOT NULL,
                PRIMARY KEY(`id`)
            );
            INSERT INTO `user` (id,username,email,password) VALUES (1,\'admin\',\'admin@admin.com\',\'$2y$13$vMcKYwmscv0Mwt3xxBcjSeKdAGg3NYT37vguwjUdwJBbS3s38fu/C\');
            CREATE UNIQUE INDEX IF NOT EXISTS `UNIQ_8D93D649E7927C74` ON `user` (
                `email`
            );
        ');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        $this->addSql('DROP TABLE `user`;');
    }
}
