<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200402141949 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE cliente DROP FOREIGN KEY fk_cliente_evento1');
        $this->addSql('ALTER TABLE cliente CHANGE idCliente idCliente INT NOT NULL');
        $this->addSql('ALTER TABLE cliente ADD CONSTRAINT FK_F41C9B25E4315AFA FOREIGN KEY (evento_idEvento) REFERENCES evento (idEvento)');
        $this->addSql('ALTER TABLE empleado DROP FOREIGN KEY fk_empleado_usuario');
        $this->addSql('ALTER TABLE empleado ADD CONSTRAINT FK_D9D9BF52FA4C166A FOREIGN KEY (usuario_email) REFERENCES usuario (email)');
        $this->addSql('ALTER TABLE evento DROP FOREIGN KEY fk_evento_menu1');
        $this->addSql('ALTER TABLE evento DROP FOREIGN KEY fk_evento_salon1');
        $this->addSql('ALTER TABLE evento CHANGE salon_idSalon salon_idSalon INT DEFAULT NULL, CHANGE menu_idMenu menu_idMenu INT DEFAULT NULL');
        $this->addSql('ALTER TABLE evento ADD CONSTRAINT FK_47860B05DDBF3CD5 FOREIGN KEY (menu_idMenu) REFERENCES menu (idMenu)');
        $this->addSql('ALTER TABLE evento ADD CONSTRAINT FK_47860B05A1F8FE85 FOREIGN KEY (salon_idSalon) REFERENCES salon (idSalon)');
        $this->addSql('ALTER TABLE salon CHANGE decoracion_idDecoracion decoracion_idDecoracion INT DEFAULT NULL');
        $this->addSql('ALTER TABLE usuario CHANGE email email VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE cliente DROP FOREIGN KEY FK_F41C9B25E4315AFA');
        $this->addSql('ALTER TABLE cliente CHANGE idCliente idCliente INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE cliente ADD CONSTRAINT fk_cliente_evento1 FOREIGN KEY (evento_idEvento) REFERENCES evento (idEvento) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE empleado DROP FOREIGN KEY FK_D9D9BF52FA4C166A');
        $this->addSql('ALTER TABLE empleado ADD CONSTRAINT fk_empleado_usuario FOREIGN KEY (usuario_email) REFERENCES usuario (email) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE evento DROP FOREIGN KEY FK_47860B05DDBF3CD5');
        $this->addSql('ALTER TABLE evento DROP FOREIGN KEY FK_47860B05A1F8FE85');
        $this->addSql('ALTER TABLE evento CHANGE menu_idMenu menu_idMenu INT NOT NULL, CHANGE salon_idSalon salon_idSalon INT NOT NULL');
        $this->addSql('ALTER TABLE evento ADD CONSTRAINT fk_evento_menu1 FOREIGN KEY (menu_idMenu) REFERENCES menu (idMenu) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE evento ADD CONSTRAINT fk_evento_salon1 FOREIGN KEY (salon_idSalon) REFERENCES salon (idSalon) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE salon CHANGE decoracion_idDecoracion decoracion_idDecoracion INT NOT NULL');
        $this->addSql('ALTER TABLE usuario CHANGE email email VARCHAR(255) CHARACTER SET utf8 NOT NULL COLLATE `utf8_bin`');
    }
}
