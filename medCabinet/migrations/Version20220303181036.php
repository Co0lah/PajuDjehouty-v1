<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220303181036 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE medecin ADD nationalite_id INT DEFAULT NULL, DROP nationalite');
        $this->addSql('ALTER TABLE medecin ADD CONSTRAINT FK_1BDA53C61B063272 FOREIGN KEY (nationalite_id) REFERENCES nationalite (id)');
        $this->addSql('CREATE INDEX IDX_1BDA53C61B063272 ON medecin (nationalite_id)');
        $this->addSql('ALTER TABLE patient CHANGE domaine_id domaine_id INT DEFAULT NULL, CHANGE assureur_id assureur_id INT DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE assureur CHANGE code code VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE libelle libelle VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE categorie CHANGE code code VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE libelle libelle VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE consultation CHANGE observation observation VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE domaine CHANGE code code VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE libelle libelle VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE horaire CHANGE code code VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE libelle libelle VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE medecin DROP FOREIGN KEY FK_1BDA53C61B063272');
        $this->addSql('DROP INDEX IDX_1BDA53C61B063272 ON medecin');
        $this->addSql('ALTER TABLE medecin ADD nationalite VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, DROP nationalite_id, CHANGE matricule matricule VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE nom nom VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE prenom prenom VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE adresse adresse VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE ville ville VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE tel_fixe tel_fixe VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE tel_mobile tel_mobile VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE email email VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE fax fax VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE genre genre VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE medicament CHANGE code code VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE libelle libelle VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE posologie posologie VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE mode_reg CHANGE code code VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE libelle libelle VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE nationalite CHANGE code code VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE libelle libelle VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE ordonnance CHANGE code code VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE posologie posologie VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE patient CHANGE domaine_id domaine_id INT NOT NULL, CHANGE assureur_id assureur_id INT NOT NULL, CHANGE nom nom VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE prenom prenom VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE adresse adresse VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE ville ville VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE genre genre VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE tel_fixe tel_fixe VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE tel_mobile tel_mobile VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE email email VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE etat_civil etat_civil VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE nom_conjoint nom_conjoint VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE groupe_sanguin groupe_sanguin VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE profession profession VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE prise_en_charge prise_en_charge VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE medecin_traitant medecin_traitant VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE mot_cles mot_cles VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE code_apci code_apci VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE regime_cnam regime_cnam VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE qualite qualite VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE rdv CHANGE observation observation VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE reglement CHANGE mode_reglement mode_reglement VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE numero_piece numero_piece VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE observation observation VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE specialite CHANGE code code VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE libelle libelle VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE user CHANGE email email VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE password password VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
