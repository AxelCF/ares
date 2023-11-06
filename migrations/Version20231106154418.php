<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231106154418 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE liaison (id INT AUTO_INCREMENT NOT NULL, professor_id INT NOT NULL, subject_id INT NOT NULL, INDEX IDX_225AC377D2D84D5 (professor_id), INDEX IDX_225AC3723EDC87 (subject_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE liaison ADD CONSTRAINT FK_225AC377D2D84D5 FOREIGN KEY (professor_id) REFERENCES users (id)');
        $this->addSql('ALTER TABLE liaison ADD CONSTRAINT FK_225AC3723EDC87 FOREIGN KEY (subject_id) REFERENCES subjects (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE liaison DROP FOREIGN KEY FK_225AC377D2D84D5');
        $this->addSql('ALTER TABLE liaison DROP FOREIGN KEY FK_225AC3723EDC87');
        $this->addSql('DROP TABLE liaison');
    }
}
