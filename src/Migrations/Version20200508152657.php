<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
<<<<<<< HEAD:src/Migrations/Version20200609034626.php
final class Version20200609034626 extends AbstractMigration
=======
final class Version20200508152657 extends AbstractMigration
>>>>>>> 2506da363d933cc0e4c02d3ae1bbb06b2d45961e:src/Migrations/Version20200508152657.php
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

<<<<<<< HEAD:src/Migrations/Version20200609034626.php
        $this->addSql('CREATE TABLE `order` (id INT AUTO_INCREMENT NOT NULL, sale_id INT DEFAULT NULL, purchase_id INT DEFAULT NULL, payment_id INT NOT NULL, shipment_id INT NOT NULL, status VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL, edited_at DATETIME NOT NULL, UNIQUE INDEX UNIQ_F52993984A7E4868 (sale_id), UNIQUE INDEX UNIQ_F5299398558FBEB9 (purchase_id), UNIQUE INDEX UNIQ_F52993984C3A3BB (payment_id), UNIQUE INDEX UNIQ_F52993987BE036FC (shipment_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ordored_product (id INT AUTO_INCREMENT NOT NULL, ord_id INT NOT NULL, product_id INT NOT NULL, shipping_id INT NOT NULL, quantity INT NOT NULL, INDEX IDX_CC77FD7E636D3F5 (ord_id), INDEX IDX_CC77FD74584665A (product_id), UNIQUE INDEX UNIQ_CC77FD74887F3F8 (shipping_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE purchase (id INT AUTO_INCREMENT NOT NULL, profile_id INT NOT NULL, INDEX IDX_6117D13BCCFA12B8 (profile_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE payment (id INT AUTO_INCREMENT NOT NULL, type VARCHAR(255) NOT NULL, amount DOUBLE PRECISION NOT NULL, status VARCHAR(255) NOT NULL, date DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE sale (id INT AUTO_INCREMENT NOT NULL, profile_id INT NOT NULL, INDEX IDX_E54BC005CCFA12B8 (profile_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE shipment (id INT AUTO_INCREMENT NOT NULL, service VARCHAR(255) NOT NULL, delivery_time VARCHAR(255) NOT NULL, status VARCHAR(255) NOT NULL, date DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE received_message (id INT AUTO_INCREMENT NOT NULL, profile_id INT NOT NULL, INDEX IDX_145E3A26CCFA12B8 (profile_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE message (id INT AUTO_INCREMENT NOT NULL, sent_message_id INT DEFAULT NULL, received_message_id INT DEFAULT NULL, sender_name VARCHAR(255) NOT NULL, recipient_name VARCHAR(255) NOT NULL, title VARCHAR(255) NOT NULL, content LONGTEXT NOT NULL, status VARCHAR(255) NOT NULL, date DATETIME NOT NULL, UNIQUE INDEX UNIQ_B6BD307F40636CAE (sent_message_id), UNIQUE INDEX UNIQ_B6BD307FF3FB5DFC (received_message_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE sent_message (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE section (id INT AUTO_INCREMENT NOT NULL, parent_id INT DEFAULT NULL, title VARCHAR(255) NOT NULL, excerpt VARCHAR(255) DEFAULT NULL, icon VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE comment (id INT AUTO_INCREMENT NOT NULL, post_id INT NOT NULL, author_id INT NOT NULL, content LONGTEXT NOT NULL, created_at DATETIME NOT NULL, edited_at DATETIME NOT NULL, INDEX IDX_9474526C4B89032C (post_id), INDEX IDX_9474526CF675F31B (author_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE image (id INT AUTO_INCREMENT NOT NULL, path VARCHAR(255) NOT NULL, label VARCHAR(255) DEFAULT NULL, caption VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE post (id INT AUTO_INCREMENT NOT NULL, section_id INT NOT NULL, image_id INT DEFAULT NULL, author_id INT NOT NULL, title VARCHAR(255) NOT NULL, slug VARCHAR(255) NOT NULL, excerpt VARCHAR(255) NOT NULL, content LONGTEXT DEFAULT NULL, created_at DATETIME NOT NULL, edited_at DATETIME NOT NULL, INDEX IDX_5A8A6C8DD823E37A (section_id), UNIQUE INDEX UNIQ_5A8A6C8D3DA5256D (image_id), INDEX IDX_5A8A6C8DF675F31B (author_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE review (id INT AUTO_INCREMENT NOT NULL, product_id INT NOT NULL, profile_id INT NOT NULL, rate DOUBLE PRECISION NOT NULL, INDEX IDX_794381C64584665A (product_id), INDEX IDX_794381C6CCFA12B8 (profile_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE category (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, excerpt VARCHAR(255) DEFAULT NULL, icon VARCHAR(255) DEFAULT NULL, parent_id INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tax (id INT AUTO_INCREMENT NOT NULL, product_id INT NOT NULL, name VARCHAR(255) NOT NULL, rate DOUBLE PRECISION NOT NULL, INDEX IDX_8E81BA764584665A (product_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE product (id INT AUTO_INCREMENT NOT NULL, category_id INT NOT NULL, profile_id INT NOT NULL, name VARCHAR(255) NOT NULL, excerpt VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, quantity INT NOT NULL, price DOUBLE PRECISION NOT NULL, created_at DATETIME NOT NULL, edited_at DATETIME NOT NULL, INDEX IDX_D34A04AD12469DE2 (category_id), INDEX IDX_D34A04ADCCFA12B8 (profile_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE shipping (id INT AUTO_INCREMENT NOT NULL, product_id INT NOT NULL, service VARCHAR(255) NOT NULL, cost DOUBLE PRECISION NOT NULL, delivery_time VARCHAR(255) NOT NULL, INDEX IDX_2D1C17244584665A (product_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE `specific` (id INT AUTO_INCREMENT NOT NULL, product_id INT NOT NULL, name VARCHAR(255) NOT NULL, value VARCHAR(255) NOT NULL, INDEX IDX_47CEE5524584665A (product_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE discount (id INT AUTO_INCREMENT NOT NULL, product_id INT NOT NULL, type VARCHAR(255) NOT NULL, name VARCHAR(255) NOT NULL, rate DOUBLE PRECISION NOT NULL, expiry_date DATETIME NOT NULL, UNIQUE INDEX UNIQ_E1E0B40E4584665A (product_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE photo (id INT AUTO_INCREMENT NOT NULL, product_id INT NOT NULL, path VARCHAR(255) NOT NULL, title VARCHAR(255) DEFAULT NULL, caption VARCHAR(255) DEFAULT NULL, INDEX IDX_14B784184584665A (product_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE attribute (id INT AUTO_INCREMENT NOT NULL, product_id INT NOT NULL, attr_name VARCHAR(255) NOT NULL, attr_value VARCHAR(255) NOT NULL, INDEX IDX_FA7AEFFB4584665A (product_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
=======
        $this->addSql('CREATE TABLE page_option (id INT AUTO_INCREMENT NOT NULL, page_id INT NOT NULL, name VARCHAR(255) NOT NULL, value VARCHAR(255) NOT NULL, INDEX IDX_3550F6AEC4663E4 (page_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE setting (id INT AUTO_INCREMENT NOT NULL, icon VARCHAR(255) DEFAULT NULL, name VARCHAR(255) NOT NULL, value VARCHAR(255) NOT NULL, position INT NOT NULL, parent_id INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE menu (id INT AUTO_INCREMENT NOT NULL, icon VARCHAR(255) DEFAULT NULL, label VARCHAR(255) NOT NULL, link VARCHAR(255) NOT NULL, position INT NOT NULL, parent_id INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE page (id INT AUTO_INCREMENT NOT NULL, tite VARCHAR(255) NOT NULL, slug VARCHAR(255) NOT NULL, excerpt VARCHAR(255) DEFAULT NULL, content LONGTEXT DEFAULT NULL, image VARCHAR(255) DEFAULT NULL, parent_id INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE sent_message (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE received_message (id INT AUTO_INCREMENT NOT NULL, profile_id INT NOT NULL, INDEX IDX_145E3A26CCFA12B8 (profile_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE message (id INT AUTO_INCREMENT NOT NULL, sent_message_id INT DEFAULT NULL, received_message_id INT DEFAULT NULL, sender_name VARCHAR(255) NOT NULL, recipient_name VARCHAR(255) NOT NULL, title VARCHAR(255) NOT NULL, content LONGTEXT NOT NULL, status VARCHAR(255) NOT NULL, date DATETIME NOT NULL, UNIQUE INDEX UNIQ_B6BD307F40636CAE (sent_message_id), UNIQUE INDEX UNIQ_B6BD307FF3FB5DFC (received_message_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE section (id INT AUTO_INCREMENT NOT NULL, parent_id INT DEFAULT NULL, title VARCHAR(255) NOT NULL, excerpt VARCHAR(255) DEFAULT NULL, icon VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE image (id INT AUTO_INCREMENT NOT NULL, path VARCHAR(255) NOT NULL, label VARCHAR(255) DEFAULT NULL, caption VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE post (id INT AUTO_INCREMENT NOT NULL, section_id INT NOT NULL, image_id INT DEFAULT NULL, author_id INT NOT NULL, title VARCHAR(255) NOT NULL, slug VARCHAR(255) NOT NULL, excerpt VARCHAR(255) NOT NULL, content LONGTEXT DEFAULT NULL, created_at DATETIME NOT NULL, edited_at DATETIME NOT NULL, INDEX IDX_5A8A6C8DD823E37A (section_id), UNIQUE INDEX UNIQ_5A8A6C8D3DA5256D (image_id), INDEX IDX_5A8A6C8DF675F31B (author_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE comment (id INT AUTO_INCREMENT NOT NULL, post_id INT NOT NULL, author_id INT NOT NULL, content LONGTEXT NOT NULL, created_at DATETIME NOT NULL, edited_at DATETIME NOT NULL, INDEX IDX_9474526C4B89032C (post_id), INDEX IDX_9474526CF675F31B (author_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE role (id INT AUTO_INCREMENT NOT NULL, access VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE role_user (role_id INT NOT NULL, user_id INT NOT NULL, INDEX IDX_332CA4DDD60322AC (role_id), INDEX IDX_332CA4DDA76ED395 (user_id), PRIMARY KEY(role_id, user_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE billing_address (id INT AUTO_INCREMENT NOT NULL, profile_id INT NOT NULL, address VARCHAR(255) NOT NULL, city VARCHAR(255) NOT NULL, state VARCHAR(255) NOT NULL, country VARCHAR(255) NOT NULL, postal_code VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_6660E456CCFA12B8 (profile_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
>>>>>>> 2506da363d933cc0e4c02d3ae1bbb06b2d45961e:src/Migrations/Version20200508152657.php
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, username VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, roles JSON NOT NULL, UNIQUE INDEX UNIQ_8D93D649F85E0677 (username), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user_role (user_id INT NOT NULL, role_id INT NOT NULL, INDEX IDX_2DE8C6A3A76ED395 (user_id), INDEX IDX_2DE8C6A3D60322AC (role_id), PRIMARY KEY(user_id, role_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE fund (id INT AUTO_INCREMENT NOT NULL, profile_id INT NOT NULL, type VARCHAR(255) NOT NULL, account VARCHAR(255) NOT NULL, name VARCHAR(255) DEFAULT NULL, expiry_date DATETIME DEFAULT NULL, security_code VARCHAR(255) DEFAULT NULL, INDEX IDX_DC923E10CCFA12B8 (profile_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE profile (id INT AUTO_INCREMENT NOT NULL, userid_id INT DEFAULT NULL, full_name VARCHAR(255) NOT NULL, display_name VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, phone_number VARCHAR(255) DEFAULT NULL, picture VARCHAR(255) DEFAULT NULL, cover VARCHAR(255) DEFAULT NULL, description LONGTEXT DEFAULT NULL, created_at DATETIME NOT NULL, edited_at DATETIME NOT NULL, UNIQUE INDEX UNIQ_8157AA0FE7927C74 (email), UNIQUE INDEX UNIQ_8157AA0F6B01BC5B (phone_number), UNIQUE INDEX UNIQ_8157AA0F16DB4F89 (picture), UNIQUE INDEX UNIQ_8157AA0F58E0A285 (userid_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
<<<<<<< HEAD:src/Migrations/Version20200609034626.php
        $this->addSql('CREATE TABLE billing_address (id INT AUTO_INCREMENT NOT NULL, profile_id INT NOT NULL, address VARCHAR(255) NOT NULL, city VARCHAR(255) NOT NULL, state VARCHAR(255) NOT NULL, country VARCHAR(255) NOT NULL, postal_code VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_6660E456CCFA12B8 (profile_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE role (id INT AUTO_INCREMENT NOT NULL, access VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE role_user (role_id INT NOT NULL, user_id INT NOT NULL, INDEX IDX_332CA4DDD60322AC (role_id), INDEX IDX_332CA4DDA76ED395 (user_id), PRIMARY KEY(role_id, user_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE shipping_address (id INT AUTO_INCREMENT NOT NULL, profile_id INT NOT NULL, address VARCHAR(255) NOT NULL, city VARCHAR(255) NOT NULL, state VARCHAR(255) NOT NULL, country VARCHAR(255) NOT NULL, postal_code VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_EB066945CCFA12B8 (profile_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
=======
        $this->addSql('CREATE TABLE shipping_address (id INT AUTO_INCREMENT NOT NULL, profile_id INT NOT NULL, address VARCHAR(255) NOT NULL, city VARCHAR(255) NOT NULL, state VARCHAR(255) NOT NULL, country VARCHAR(255) NOT NULL, postal_code VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_EB066945CCFA12B8 (profile_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE sale (id INT AUTO_INCREMENT NOT NULL, profile_id INT NOT NULL, INDEX IDX_E54BC005CCFA12B8 (profile_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE `order` (id INT AUTO_INCREMENT NOT NULL, sale_id INT DEFAULT NULL, purchase_id INT DEFAULT NULL, payment_id INT NOT NULL, shipment_id INT NOT NULL, status VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL, edited_at DATETIME NOT NULL, UNIQUE INDEX UNIQ_F52993984A7E4868 (sale_id), UNIQUE INDEX UNIQ_F5299398558FBEB9 (purchase_id), UNIQUE INDEX UNIQ_F52993984C3A3BB (payment_id), UNIQUE INDEX UNIQ_F52993987BE036FC (shipment_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ordored_product (id INT AUTO_INCREMENT NOT NULL, ord_id INT NOT NULL, product_id INT NOT NULL, shipping_id INT NOT NULL, quantity INT NOT NULL, INDEX IDX_CC77FD7E636D3F5 (ord_id), INDEX IDX_CC77FD74584665A (product_id), UNIQUE INDEX UNIQ_CC77FD74887F3F8 (shipping_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE shipment (id INT AUTO_INCREMENT NOT NULL, service VARCHAR(255) NOT NULL, delivery_time VARCHAR(255) NOT NULL, status VARCHAR(255) NOT NULL, date DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE payment (id INT AUTO_INCREMENT NOT NULL, type VARCHAR(255) NOT NULL, amount DOUBLE PRECISION NOT NULL, status VARCHAR(255) NOT NULL, date DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE purchase (id INT AUTO_INCREMENT NOT NULL, profile_id INT NOT NULL, INDEX IDX_6117D13BCCFA12B8 (profile_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE product (id INT AUTO_INCREMENT NOT NULL, category_id INT NOT NULL, profile_id INT NOT NULL, name VARCHAR(255) NOT NULL, excerpt VARCHAR(255) NOT NULL, description LONGTEXT DEFAULT NULL, quantity INT NOT NULL, price DOUBLE PRECISION NOT NULL, created_at DATETIME NOT NULL, edited_at DATETIME NOT NULL, INDEX IDX_D34A04AD12469DE2 (category_id), INDEX IDX_D34A04ADCCFA12B8 (profile_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE review (id INT AUTO_INCREMENT NOT NULL, product_id INT NOT NULL, profile_id INT NOT NULL, rate DOUBLE PRECISION NOT NULL, INDEX IDX_794381C64584665A (product_id), INDEX IDX_794381C6CCFA12B8 (profile_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE discount (id INT AUTO_INCREMENT NOT NULL, product_id INT NOT NULL, type VARCHAR(255) NOT NULL, name VARCHAR(255) NOT NULL, rate DOUBLE PRECISION NOT NULL, expiry_date DATETIME NOT NULL, UNIQUE INDEX UNIQ_E1E0B40E4584665A (product_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tax (id INT AUTO_INCREMENT NOT NULL, product_id INT NOT NULL, name VARCHAR(255) NOT NULL, rate DOUBLE PRECISION NOT NULL, INDEX IDX_8E81BA764584665A (product_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE shipping (id INT AUTO_INCREMENT NOT NULL, product_id INT NOT NULL, service VARCHAR(255) NOT NULL, cost DOUBLE PRECISION NOT NULL, delivery_time VARCHAR(255) NOT NULL, INDEX IDX_2D1C17244584665A (product_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE `specific` (id INT AUTO_INCREMENT NOT NULL, product_id INT NOT NULL, name VARCHAR(255) NOT NULL, value VARCHAR(255) NOT NULL, INDEX IDX_47CEE5524584665A (product_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE category (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, excerpt VARCHAR(255) DEFAULT NULL, icon VARCHAR(255) DEFAULT NULL, parent_id INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE photo (id INT AUTO_INCREMENT NOT NULL, product_id INT NOT NULL, path VARCHAR(255) NOT NULL, title VARCHAR(255) DEFAULT NULL, caption VARCHAR(255) DEFAULT NULL, INDEX IDX_14B784184584665A (product_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE page_option ADD CONSTRAINT FK_3550F6AEC4663E4 FOREIGN KEY (page_id) REFERENCES page (id)');
        $this->addSql('ALTER TABLE received_message ADD CONSTRAINT FK_145E3A26CCFA12B8 FOREIGN KEY (profile_id) REFERENCES profile (id)');
        $this->addSql('ALTER TABLE message ADD CONSTRAINT FK_B6BD307F40636CAE FOREIGN KEY (sent_message_id) REFERENCES sent_message (id)');
        $this->addSql('ALTER TABLE message ADD CONSTRAINT FK_B6BD307FF3FB5DFC FOREIGN KEY (received_message_id) REFERENCES received_message (id)');
        $this->addSql('ALTER TABLE post ADD CONSTRAINT FK_5A8A6C8DD823E37A FOREIGN KEY (section_id) REFERENCES section (id)');
        $this->addSql('ALTER TABLE post ADD CONSTRAINT FK_5A8A6C8D3DA5256D FOREIGN KEY (image_id) REFERENCES image (id)');
        $this->addSql('ALTER TABLE post ADD CONSTRAINT FK_5A8A6C8DF675F31B FOREIGN KEY (author_id) REFERENCES profile (id)');
        $this->addSql('ALTER TABLE comment ADD CONSTRAINT FK_9474526C4B89032C FOREIGN KEY (post_id) REFERENCES post (id)');
        $this->addSql('ALTER TABLE comment ADD CONSTRAINT FK_9474526CF675F31B FOREIGN KEY (author_id) REFERENCES profile (id)');
        $this->addSql('ALTER TABLE role_user ADD CONSTRAINT FK_332CA4DDD60322AC FOREIGN KEY (role_id) REFERENCES role (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE role_user ADD CONSTRAINT FK_332CA4DDA76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE billing_address ADD CONSTRAINT FK_6660E456CCFA12B8 FOREIGN KEY (profile_id) REFERENCES profile (id)');
        $this->addSql('ALTER TABLE user_role ADD CONSTRAINT FK_2DE8C6A3A76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user_role ADD CONSTRAINT FK_2DE8C6A3D60322AC FOREIGN KEY (role_id) REFERENCES role (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE fund ADD CONSTRAINT FK_DC923E10CCFA12B8 FOREIGN KEY (profile_id) REFERENCES profile (id)');
        $this->addSql('ALTER TABLE profile ADD CONSTRAINT FK_8157AA0F58E0A285 FOREIGN KEY (userid_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE shipping_address ADD CONSTRAINT FK_EB066945CCFA12B8 FOREIGN KEY (profile_id) REFERENCES profile (id)');
        $this->addSql('ALTER TABLE sale ADD CONSTRAINT FK_E54BC005CCFA12B8 FOREIGN KEY (profile_id) REFERENCES profile (id)');
>>>>>>> 2506da363d933cc0e4c02d3ae1bbb06b2d45961e:src/Migrations/Version20200508152657.php
        $this->addSql('ALTER TABLE `order` ADD CONSTRAINT FK_F52993984A7E4868 FOREIGN KEY (sale_id) REFERENCES sale (id)');
        $this->addSql('ALTER TABLE `order` ADD CONSTRAINT FK_F5299398558FBEB9 FOREIGN KEY (purchase_id) REFERENCES purchase (id)');
        $this->addSql('ALTER TABLE `order` ADD CONSTRAINT FK_F52993984C3A3BB FOREIGN KEY (payment_id) REFERENCES payment (id)');
        $this->addSql('ALTER TABLE `order` ADD CONSTRAINT FK_F52993987BE036FC FOREIGN KEY (shipment_id) REFERENCES shipment (id)');
        $this->addSql('ALTER TABLE ordored_product ADD CONSTRAINT FK_CC77FD7E636D3F5 FOREIGN KEY (ord_id) REFERENCES `order` (id)');
        $this->addSql('ALTER TABLE ordored_product ADD CONSTRAINT FK_CC77FD74584665A FOREIGN KEY (product_id) REFERENCES product (id)');
        $this->addSql('ALTER TABLE ordored_product ADD CONSTRAINT FK_CC77FD74887F3F8 FOREIGN KEY (shipping_id) REFERENCES shipping (id)');
        $this->addSql('ALTER TABLE purchase ADD CONSTRAINT FK_6117D13BCCFA12B8 FOREIGN KEY (profile_id) REFERENCES profile (id)');
<<<<<<< HEAD:src/Migrations/Version20200609034626.php
        $this->addSql('ALTER TABLE sale ADD CONSTRAINT FK_E54BC005CCFA12B8 FOREIGN KEY (profile_id) REFERENCES profile (id)');
        $this->addSql('ALTER TABLE received_message ADD CONSTRAINT FK_145E3A26CCFA12B8 FOREIGN KEY (profile_id) REFERENCES profile (id)');
        $this->addSql('ALTER TABLE message ADD CONSTRAINT FK_B6BD307F40636CAE FOREIGN KEY (sent_message_id) REFERENCES sent_message (id)');
        $this->addSql('ALTER TABLE message ADD CONSTRAINT FK_B6BD307FF3FB5DFC FOREIGN KEY (received_message_id) REFERENCES received_message (id)');
        $this->addSql('ALTER TABLE comment ADD CONSTRAINT FK_9474526C4B89032C FOREIGN KEY (post_id) REFERENCES post (id)');
        $this->addSql('ALTER TABLE comment ADD CONSTRAINT FK_9474526CF675F31B FOREIGN KEY (author_id) REFERENCES profile (id)');
        $this->addSql('ALTER TABLE post ADD CONSTRAINT FK_5A8A6C8DD823E37A FOREIGN KEY (section_id) REFERENCES section (id)');
        $this->addSql('ALTER TABLE post ADD CONSTRAINT FK_5A8A6C8D3DA5256D FOREIGN KEY (image_id) REFERENCES image (id)');
        $this->addSql('ALTER TABLE post ADD CONSTRAINT FK_5A8A6C8DF675F31B FOREIGN KEY (author_id) REFERENCES profile (id)');
        $this->addSql('ALTER TABLE review ADD CONSTRAINT FK_794381C64584665A FOREIGN KEY (product_id) REFERENCES product (id)');
        $this->addSql('ALTER TABLE review ADD CONSTRAINT FK_794381C6CCFA12B8 FOREIGN KEY (profile_id) REFERENCES profile (id)');
        $this->addSql('ALTER TABLE tax ADD CONSTRAINT FK_8E81BA764584665A FOREIGN KEY (product_id) REFERENCES product (id)');
        $this->addSql('ALTER TABLE product ADD CONSTRAINT FK_D34A04AD12469DE2 FOREIGN KEY (category_id) REFERENCES category (id)');
        $this->addSql('ALTER TABLE product ADD CONSTRAINT FK_D34A04ADCCFA12B8 FOREIGN KEY (profile_id) REFERENCES profile (id)');
        $this->addSql('ALTER TABLE shipping ADD CONSTRAINT FK_2D1C17244584665A FOREIGN KEY (product_id) REFERENCES product (id)');
        $this->addSql('ALTER TABLE `specific` ADD CONSTRAINT FK_47CEE5524584665A FOREIGN KEY (product_id) REFERENCES product (id)');
        $this->addSql('ALTER TABLE discount ADD CONSTRAINT FK_E1E0B40E4584665A FOREIGN KEY (product_id) REFERENCES product (id)');
        $this->addSql('ALTER TABLE photo ADD CONSTRAINT FK_14B784184584665A FOREIGN KEY (product_id) REFERENCES product (id)');
        $this->addSql('ALTER TABLE attribute ADD CONSTRAINT FK_FA7AEFFB4584665A FOREIGN KEY (product_id) REFERENCES product (id)');
        $this->addSql('ALTER TABLE user_role ADD CONSTRAINT FK_2DE8C6A3A76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user_role ADD CONSTRAINT FK_2DE8C6A3D60322AC FOREIGN KEY (role_id) REFERENCES role (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE fund ADD CONSTRAINT FK_DC923E10CCFA12B8 FOREIGN KEY (profile_id) REFERENCES profile (id)');
        $this->addSql('ALTER TABLE profile ADD CONSTRAINT FK_8157AA0F58E0A285 FOREIGN KEY (userid_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE billing_address ADD CONSTRAINT FK_6660E456CCFA12B8 FOREIGN KEY (profile_id) REFERENCES profile (id)');
        $this->addSql('ALTER TABLE role_user ADD CONSTRAINT FK_332CA4DDD60322AC FOREIGN KEY (role_id) REFERENCES role (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE role_user ADD CONSTRAINT FK_332CA4DDA76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE shipping_address ADD CONSTRAINT FK_EB066945CCFA12B8 FOREIGN KEY (profile_id) REFERENCES profile (id)');
=======
        $this->addSql('ALTER TABLE product ADD CONSTRAINT FK_D34A04AD12469DE2 FOREIGN KEY (category_id) REFERENCES category (id)');
        $this->addSql('ALTER TABLE product ADD CONSTRAINT FK_D34A04ADCCFA12B8 FOREIGN KEY (profile_id) REFERENCES profile (id)');
        $this->addSql('ALTER TABLE review ADD CONSTRAINT FK_794381C64584665A FOREIGN KEY (product_id) REFERENCES product (id)');
        $this->addSql('ALTER TABLE review ADD CONSTRAINT FK_794381C6CCFA12B8 FOREIGN KEY (profile_id) REFERENCES profile (id)');
        $this->addSql('ALTER TABLE discount ADD CONSTRAINT FK_E1E0B40E4584665A FOREIGN KEY (product_id) REFERENCES product (id)');
        $this->addSql('ALTER TABLE tax ADD CONSTRAINT FK_8E81BA764584665A FOREIGN KEY (product_id) REFERENCES product (id)');
        $this->addSql('ALTER TABLE shipping ADD CONSTRAINT FK_2D1C17244584665A FOREIGN KEY (product_id) REFERENCES product (id)');
        $this->addSql('ALTER TABLE `specific` ADD CONSTRAINT FK_47CEE5524584665A FOREIGN KEY (product_id) REFERENCES product (id)');
        $this->addSql('ALTER TABLE photo ADD CONSTRAINT FK_14B784184584665A FOREIGN KEY (product_id) REFERENCES product (id)');
>>>>>>> 2506da363d933cc0e4c02d3ae1bbb06b2d45961e:src/Migrations/Version20200508152657.php
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

<<<<<<< HEAD:src/Migrations/Version20200609034626.php
        $this->addSql('ALTER TABLE ordored_product DROP FOREIGN KEY FK_CC77FD7E636D3F5');
        $this->addSql('ALTER TABLE `order` DROP FOREIGN KEY FK_F5299398558FBEB9');
        $this->addSql('ALTER TABLE `order` DROP FOREIGN KEY FK_F52993984C3A3BB');
        $this->addSql('ALTER TABLE `order` DROP FOREIGN KEY FK_F52993984A7E4868');
        $this->addSql('ALTER TABLE `order` DROP FOREIGN KEY FK_F52993987BE036FC');
        $this->addSql('ALTER TABLE message DROP FOREIGN KEY FK_B6BD307FF3FB5DFC');
        $this->addSql('ALTER TABLE message DROP FOREIGN KEY FK_B6BD307F40636CAE');
        $this->addSql('ALTER TABLE post DROP FOREIGN KEY FK_5A8A6C8DD823E37A');
        $this->addSql('ALTER TABLE post DROP FOREIGN KEY FK_5A8A6C8D3DA5256D');
        $this->addSql('ALTER TABLE comment DROP FOREIGN KEY FK_9474526C4B89032C');
        $this->addSql('ALTER TABLE product DROP FOREIGN KEY FK_D34A04AD12469DE2');
        $this->addSql('ALTER TABLE ordored_product DROP FOREIGN KEY FK_CC77FD74584665A');
        $this->addSql('ALTER TABLE review DROP FOREIGN KEY FK_794381C64584665A');
        $this->addSql('ALTER TABLE tax DROP FOREIGN KEY FK_8E81BA764584665A');
        $this->addSql('ALTER TABLE shipping DROP FOREIGN KEY FK_2D1C17244584665A');
        $this->addSql('ALTER TABLE `specific` DROP FOREIGN KEY FK_47CEE5524584665A');
        $this->addSql('ALTER TABLE discount DROP FOREIGN KEY FK_E1E0B40E4584665A');
        $this->addSql('ALTER TABLE photo DROP FOREIGN KEY FK_14B784184584665A');
        $this->addSql('ALTER TABLE attribute DROP FOREIGN KEY FK_FA7AEFFB4584665A');
        $this->addSql('ALTER TABLE ordored_product DROP FOREIGN KEY FK_CC77FD74887F3F8');
        $this->addSql('ALTER TABLE user_role DROP FOREIGN KEY FK_2DE8C6A3A76ED395');
        $this->addSql('ALTER TABLE profile DROP FOREIGN KEY FK_8157AA0F58E0A285');
        $this->addSql('ALTER TABLE role_user DROP FOREIGN KEY FK_332CA4DDA76ED395');
        $this->addSql('ALTER TABLE purchase DROP FOREIGN KEY FK_6117D13BCCFA12B8');
        $this->addSql('ALTER TABLE sale DROP FOREIGN KEY FK_E54BC005CCFA12B8');
        $this->addSql('ALTER TABLE received_message DROP FOREIGN KEY FK_145E3A26CCFA12B8');
        $this->addSql('ALTER TABLE comment DROP FOREIGN KEY FK_9474526CF675F31B');
        $this->addSql('ALTER TABLE post DROP FOREIGN KEY FK_5A8A6C8DF675F31B');
        $this->addSql('ALTER TABLE review DROP FOREIGN KEY FK_794381C6CCFA12B8');
        $this->addSql('ALTER TABLE product DROP FOREIGN KEY FK_D34A04ADCCFA12B8');
        $this->addSql('ALTER TABLE fund DROP FOREIGN KEY FK_DC923E10CCFA12B8');
        $this->addSql('ALTER TABLE billing_address DROP FOREIGN KEY FK_6660E456CCFA12B8');
        $this->addSql('ALTER TABLE shipping_address DROP FOREIGN KEY FK_EB066945CCFA12B8');
        $this->addSql('ALTER TABLE user_role DROP FOREIGN KEY FK_2DE8C6A3D60322AC');
        $this->addSql('ALTER TABLE role_user DROP FOREIGN KEY FK_332CA4DDD60322AC');
        $this->addSql('DROP TABLE `order`');
        $this->addSql('DROP TABLE ordored_product');
        $this->addSql('DROP TABLE purchase');
        $this->addSql('DROP TABLE payment');
        $this->addSql('DROP TABLE sale');
        $this->addSql('DROP TABLE shipment');
        $this->addSql('DROP TABLE received_message');
        $this->addSql('DROP TABLE message');
        $this->addSql('DROP TABLE sent_message');
        $this->addSql('DROP TABLE section');
        $this->addSql('DROP TABLE comment');
        $this->addSql('DROP TABLE image');
        $this->addSql('DROP TABLE post');
        $this->addSql('DROP TABLE review');
        $this->addSql('DROP TABLE category');
        $this->addSql('DROP TABLE tax');
        $this->addSql('DROP TABLE product');
        $this->addSql('DROP TABLE shipping');
        $this->addSql('DROP TABLE `specific`');
        $this->addSql('DROP TABLE discount');
        $this->addSql('DROP TABLE photo');
        $this->addSql('DROP TABLE attribute');
=======
        $this->addSql('ALTER TABLE page_option DROP FOREIGN KEY FK_3550F6AEC4663E4');
        $this->addSql('ALTER TABLE message DROP FOREIGN KEY FK_B6BD307F40636CAE');
        $this->addSql('ALTER TABLE message DROP FOREIGN KEY FK_B6BD307FF3FB5DFC');
        $this->addSql('ALTER TABLE post DROP FOREIGN KEY FK_5A8A6C8DD823E37A');
        $this->addSql('ALTER TABLE post DROP FOREIGN KEY FK_5A8A6C8D3DA5256D');
        $this->addSql('ALTER TABLE comment DROP FOREIGN KEY FK_9474526C4B89032C');
        $this->addSql('ALTER TABLE role_user DROP FOREIGN KEY FK_332CA4DDD60322AC');
        $this->addSql('ALTER TABLE user_role DROP FOREIGN KEY FK_2DE8C6A3D60322AC');
        $this->addSql('ALTER TABLE role_user DROP FOREIGN KEY FK_332CA4DDA76ED395');
        $this->addSql('ALTER TABLE user_role DROP FOREIGN KEY FK_2DE8C6A3A76ED395');
        $this->addSql('ALTER TABLE profile DROP FOREIGN KEY FK_8157AA0F58E0A285');
        $this->addSql('ALTER TABLE received_message DROP FOREIGN KEY FK_145E3A26CCFA12B8');
        $this->addSql('ALTER TABLE post DROP FOREIGN KEY FK_5A8A6C8DF675F31B');
        $this->addSql('ALTER TABLE comment DROP FOREIGN KEY FK_9474526CF675F31B');
        $this->addSql('ALTER TABLE billing_address DROP FOREIGN KEY FK_6660E456CCFA12B8');
        $this->addSql('ALTER TABLE fund DROP FOREIGN KEY FK_DC923E10CCFA12B8');
        $this->addSql('ALTER TABLE shipping_address DROP FOREIGN KEY FK_EB066945CCFA12B8');
        $this->addSql('ALTER TABLE sale DROP FOREIGN KEY FK_E54BC005CCFA12B8');
        $this->addSql('ALTER TABLE purchase DROP FOREIGN KEY FK_6117D13BCCFA12B8');
        $this->addSql('ALTER TABLE product DROP FOREIGN KEY FK_D34A04ADCCFA12B8');
        $this->addSql('ALTER TABLE review DROP FOREIGN KEY FK_794381C6CCFA12B8');
        $this->addSql('ALTER TABLE `order` DROP FOREIGN KEY FK_F52993984A7E4868');
        $this->addSql('ALTER TABLE ordored_product DROP FOREIGN KEY FK_CC77FD7E636D3F5');
        $this->addSql('ALTER TABLE `order` DROP FOREIGN KEY FK_F52993987BE036FC');
        $this->addSql('ALTER TABLE `order` DROP FOREIGN KEY FK_F52993984C3A3BB');
        $this->addSql('ALTER TABLE `order` DROP FOREIGN KEY FK_F5299398558FBEB9');
        $this->addSql('ALTER TABLE ordored_product DROP FOREIGN KEY FK_CC77FD74584665A');
        $this->addSql('ALTER TABLE review DROP FOREIGN KEY FK_794381C64584665A');
        $this->addSql('ALTER TABLE discount DROP FOREIGN KEY FK_E1E0B40E4584665A');
        $this->addSql('ALTER TABLE tax DROP FOREIGN KEY FK_8E81BA764584665A');
        $this->addSql('ALTER TABLE shipping DROP FOREIGN KEY FK_2D1C17244584665A');
        $this->addSql('ALTER TABLE `specific` DROP FOREIGN KEY FK_47CEE5524584665A');
        $this->addSql('ALTER TABLE photo DROP FOREIGN KEY FK_14B784184584665A');
        $this->addSql('ALTER TABLE ordored_product DROP FOREIGN KEY FK_CC77FD74887F3F8');
        $this->addSql('ALTER TABLE product DROP FOREIGN KEY FK_D34A04AD12469DE2');
        $this->addSql('DROP TABLE page_option');
        $this->addSql('DROP TABLE setting');
        $this->addSql('DROP TABLE menu');
        $this->addSql('DROP TABLE page');
        $this->addSql('DROP TABLE sent_message');
        $this->addSql('DROP TABLE received_message');
        $this->addSql('DROP TABLE message');
        $this->addSql('DROP TABLE section');
        $this->addSql('DROP TABLE image');
        $this->addSql('DROP TABLE post');
        $this->addSql('DROP TABLE comment');
        $this->addSql('DROP TABLE role');
        $this->addSql('DROP TABLE role_user');
        $this->addSql('DROP TABLE billing_address');
>>>>>>> 2506da363d933cc0e4c02d3ae1bbb06b2d45961e:src/Migrations/Version20200508152657.php
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE user_role');
        $this->addSql('DROP TABLE fund');
        $this->addSql('DROP TABLE profile');
<<<<<<< HEAD:src/Migrations/Version20200609034626.php
        $this->addSql('DROP TABLE billing_address');
        $this->addSql('DROP TABLE role');
        $this->addSql('DROP TABLE role_user');
        $this->addSql('DROP TABLE shipping_address');
=======
        $this->addSql('DROP TABLE shipping_address');
        $this->addSql('DROP TABLE sale');
        $this->addSql('DROP TABLE `order`');
        $this->addSql('DROP TABLE ordored_product');
        $this->addSql('DROP TABLE shipment');
        $this->addSql('DROP TABLE payment');
        $this->addSql('DROP TABLE purchase');
        $this->addSql('DROP TABLE product');
        $this->addSql('DROP TABLE review');
        $this->addSql('DROP TABLE discount');
        $this->addSql('DROP TABLE tax');
        $this->addSql('DROP TABLE shipping');
        $this->addSql('DROP TABLE `specific`');
        $this->addSql('DROP TABLE category');
        $this->addSql('DROP TABLE photo');
>>>>>>> 2506da363d933cc0e4c02d3ae1bbb06b2d45961e:src/Migrations/Version20200508152657.php
    }
}
