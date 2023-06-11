<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230528131945 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE anime_scrap (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) DEFAULT NULL, original_title VARCHAR(255) DEFAULT NULL, type VARCHAR(255) NOT NULL, genres VARCHAR(255) NOT NULL, synopsis VARCHAR(255) DEFAULT NULL, dates VARCHAR(255) DEFAULT NULL, saison VARCHAR(255) DEFAULT NULL, année VARCHAR(255) DEFAULT NULL, episodes VARCHAR(255) DEFAULT NULL, status VARCHAR(255) DEFAULT NULL, image VARCHAR(255) DEFAULT NULL, score FLOAT DEFAULT NULL, ranking SMALLINT DEFAULT NULL, popularity SMALLINT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE manga_scrap (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) DEFAULT NULL, original_title VARCHAR(255) DEFAULT NULL, type VARCHAR(255) NOT NULL, genres VARCHAR(255) NOT NULL, synopsis VARCHAR(255) DEFAULT NULL, dates VARCHAR(255) DEFAULT NULL, tomes VARCHAR(255) DEFAULT NULL, chapters VARCHAR(255) DEFAULT NULL, status VARCHAR(255) DEFAULT NULL, image VARCHAR(255) DEFAULT NULL, score FLOAT DEFAULT NULL, ranking SMALLINT DEFAULT NULL, popularity SMALLINT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE anime_scrap');
        $this->addSql('DROP TABLE manga_scrap');
    }
}
