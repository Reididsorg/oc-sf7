<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260330115535 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, firstname VARCHAR(255) NOT NULL, lastname VARCHAR(255) NOT NULL, username VARCHAR(255) DEFAULT NULL, UNIQUE INDEX UNIQ_IDENTIFIER_EMAIL (email), PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8');
        $this->addSql('ALTER TABLE author CHANGE name name VARCHAR(255) NOT NULL, CHANGE date_of_birth date_of_birth DATETIME DEFAULT NULL, CHANGE nationality nationality VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE book CHANGE title title VARCHAR(255) NOT NULL, CHANGE isbn isbn VARCHAR(255) NOT NULL, CHANGE cover cover VARCHAR(255) NOT NULL, CHANGE plot plot LONGTEXT NOT NULL, CHANGE status status VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE comment CHANGE name name VARCHAR(255) NOT NULL, CHANGE email email VARCHAR(255) NOT NULL, CHANGE status status VARCHAR(255) NOT NULL, CHANGE content content LONGTEXT NOT NULL');
        $this->addSql('ALTER TABLE editor CHANGE name name VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE messenger_messages CHANGE body body LONGTEXT NOT NULL, CHANGE headers headers LONGTEXT NOT NULL, CHANGE queue_name queue_name VARCHAR(190) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE user');
        $this->addSql('ALTER TABLE author CHANGE name name VARCHAR(255) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_uca1400_ai_ci`, CHANGE date_of_birth date_of_birth DATETIME NOT NULL, CHANGE nationality nationality VARCHAR(255) CHARACTER SET utf8mb3 DEFAULT NULL COLLATE `utf8mb3_uca1400_ai_ci`');
        $this->addSql('ALTER TABLE book CHANGE title title VARCHAR(255) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_uca1400_ai_ci`, CHANGE isbn isbn VARCHAR(255) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_uca1400_ai_ci`, CHANGE cover cover VARCHAR(255) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_uca1400_ai_ci`, CHANGE plot plot LONGTEXT CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_uca1400_ai_ci`, CHANGE status status VARCHAR(255) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_uca1400_ai_ci`');
        $this->addSql('ALTER TABLE comment CHANGE name name VARCHAR(255) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_uca1400_ai_ci`, CHANGE email email VARCHAR(255) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_uca1400_ai_ci`, CHANGE status status VARCHAR(255) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_uca1400_ai_ci`, CHANGE content content LONGTEXT CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_uca1400_ai_ci`');
        $this->addSql('ALTER TABLE editor CHANGE name name VARCHAR(255) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_uca1400_ai_ci`');
        $this->addSql('ALTER TABLE messenger_messages CHANGE body body LONGTEXT CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_uca1400_ai_ci`, CHANGE headers headers LONGTEXT CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_uca1400_ai_ci`, CHANGE queue_name queue_name VARCHAR(190) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_uca1400_ai_ci`');
    }
}
