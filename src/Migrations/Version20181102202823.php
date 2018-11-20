<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181102202823 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE admin (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE login_list MODIFY user_id INT UNSIGNED NOT NULL');
        $this->addSql('ALTER TABLE login_list DROP FOREIGN KEY login_list_ibfk_1');
        $this->addSql('ALTER TABLE login_list DROP FOREIGN KEY login_list_ibfk_2');
        $this->addSql('ALTER TABLE login_list DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE login_list CHANGE username username VARCHAR(16) DEFAULT NULL, CHANGE user_id user_id INT UNSIGNED NOT NULL, CHANGE password password VARCHAR(16) NOT NULL, CHANGE role role INT NOT NULL');
        $this->addSql('ALTER TABLE login_list ADD CONSTRAINT FK_82BA735DA76ED395 FOREIGN KEY (user_id) REFERENCES user_info_list (user_id)');
        $this->addSql('ALTER TABLE login_list ADD CONSTRAINT FK_82BA735DF85E0677 FOREIGN KEY (username) REFERENCES user_info_list (username)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_82BA735DF85E0677 ON login_list (username)');
        $this->addSql('ALTER TABLE login_list ADD PRIMARY KEY (user_id)');
        $this->addSql('ALTER TABLE report CHANGE archive archive INT NOT NULL');
        $this->addSql('ALTER TABLE election_votes DROP FOREIGN KEY election_votes_ibfk_1');
        $this->addSql('ALTER TABLE election_votes ADD CONSTRAINT FK_831AB045A708DAFF FOREIGN KEY (election_id) REFERENCES election (election_id)');
        $this->addSql('ALTER TABLE form_filled_in_table CHANGE form_code form_code VARCHAR(8) NOT NULL, CHANGE username username VARCHAR(16) NOT NULL');
        $this->addSql('ALTER TABLE pps_title_list CHANGE tuc tuc VARCHAR(11) DEFAULT NULL COMMENT \'Title Unit Code\'');
        $this->addSql('ALTER TABLE committee_extras CHANGE committee_id committee_id INT NOT NULL, CHANGE year year INT NOT NULL');
        $this->addSql('ALTER TABLE notifications DROP FOREIGN KEY notifications_ibfk_1');
        $this->addSql('ALTER TABLE notifications DROP FOREIGN KEY notifications_ibfk_2');
        $this->addSql('ALTER TABLE notifications CHANGE notification_type_id notification_type_id INT UNSIGNED DEFAULT NULL, CHANGE to_user_id to_user_id INT UNSIGNED DEFAULT NULL, CHANGE `read` `read` TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE notifications ADD CONSTRAINT FK_6000B0D3D0520624 FOREIGN KEY (notification_type_id) REFERENCES notifications_type (notification_type_id)');
        $this->addSql('ALTER TABLE notifications ADD CONSTRAINT FK_6000B0D329F6EE60 FOREIGN KEY (to_user_id) REFERENCES user_info_list (user_id)');
        $this->addSql('ALTER TABLE call_for_nomination_logs CHANGE call_log_id call_log_id INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE call_for_nominations CHANGE college college INT NOT NULL, CHANGE limit_to_college limit_to_college TINYINT(1) NOT NULL, CHANGE limit_to_department limit_to_department TINYINT(1) NOT NULL, CHANGE department department INT NOT NULL');
        $this->addSql('ALTER TABLE committee_membership CHANGE committee_id committee_id INT NOT NULL, CHANGE username username VARCHAR(16) NOT NULL, CHANGE year year INT NOT NULL, CHANGE letter_sent letter_sent INT NOT NULL');
        $this->addSql('ALTER TABLE issues_committees DROP FOREIGN KEY issues_committees_ibfk_1');
        $this->addSql('ALTER TABLE issues_committees DROP FOREIGN KEY issues_committees_ibfk_2');
        $this->addSql('ALTER TABLE issues_committees ADD CONSTRAINT FK_BF5AAB635E7AA58C FOREIGN KEY (issue_id) REFERENCES issues (issue_id)');
        $this->addSql('ALTER TABLE issues_committees ADD CONSTRAINT FK_BF5AAB63ED1A100B FOREIGN KEY (committee_id) REFERENCES committees (id)');
        $this->addSql('ALTER TABLE field_storage CHANGE form_code form_code VARCHAR(16) NOT NULL, CHANGE username username VARCHAR(16) DEFAULT NULL, CHANGE field_name field_name VARCHAR(64) NOT NULL');
        $this->addSql('ALTER TABLE program_list CHANGE title title VARCHAR(64) NOT NULL');
        $this->addSql('ALTER TABLE user_status_list CHANGE user_status user_status VARCHAR(100) NOT NULL');
        $this->addSql('ALTER TABLE user_info_verify DROP FOREIGN KEY user_info_verify_ibfk_1');
        $this->addSql('ALTER TABLE user_info_verify CHANGE correct correct INT DEFAULT NULL');
        $this->addSql('ALTER TABLE user_info_verify ADD CONSTRAINT FK_C5E3BC80A76ED395 FOREIGN KEY (user_id) REFERENCES user_info_list (user_id)');
        $this->addSql('ALTER TABLE survey_responses CHANGE status status INT DEFAULT NULL');
        $this->addSql('ALTER TABLE title_list CHANGE title title VARCHAR(100) NOT NULL');
        $this->addSql('ALTER TABLE modules CHANGE is_admin is_admin TINYINT(1) NOT NULL, CHANGE module_file module_file VARCHAR(100) DEFAULT NULL');
        $this->addSql('ALTER TABLE leaves CHANGE username username VARCHAR(16) NOT NULL, CHANGE fall fall TINYINT(1) NOT NULL, CHANGE winter winter TINYINT(1) NOT NULL, CHANGE spring spring TINYINT(1) NOT NULL, CHANGE summer summer TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE nominations CHANGE id id INT NOT NULL, CHANGE username username VARCHAR(16) NOT NULL');
        $this->addSql('ALTER TABLE master_keyword_list CHANGE keyword_related keyword_related VARCHAR(160) NOT NULL');
        $this->addSql('ALTER TABLE grants_reviews CHANGE final_review final_review INT NOT NULL');
        $this->addSql('ALTER TABLE user_status_record CHANGE username username VARCHAR(16) DEFAULT NULL, CHANGE status_id status_id INT NOT NULL');
        $this->addSql('ALTER TABLE role_list CHANGE role_title role_title VARCHAR(30) NOT NULL, CHANGE is_admin is_admin TINYINT(1) NOT NULL, CHANGE is_professor is_professor TINYINT(1) NOT NULL, CHANGE is_voter is_voter TINYINT(1) NOT NULL, CHANGE is_reader is_reader TINYINT(1) NOT NULL, CHANGE is_cal_editor is_cal_editor TINYINT(1) NOT NULL, CHANGE is_supperadmin is_supperadmin TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE webshare CHANGE ticket ticket VARCHAR(64) NOT NULL');
        $this->addSql('ALTER TABLE ballot CHANGE ballot_code ballot_code VARCHAR(8) NOT NULL, CHANGE limit_to_college limit_to_college TINYINT(1) NOT NULL, CHANGE college college INT NOT NULL, CHANGE verified_ballot verified_ballot TINYINT(1) NOT NULL, CHANGE limit_to_dept limit_to_dept TINYINT(1) NOT NULL, CHANGE department department INT NOT NULL, CHANGE no_display no_display INT NOT NULL');
        $this->addSql('ALTER TABLE committees CHANGE adhoc adhoc TINYINT(1) DEFAULT NULL, CHANGE parent_committee_id parent_committee_id INT DEFAULT NULL, CHANGE administrative administrative TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE grants_banned_users CHANGE reason reason VARCHAR(100) DEFAULT NULL');
        $this->addSql('ALTER TABLE bylaw_codes CHANGE code code VARCHAR(6) NOT NULL, CHANGE title title VARCHAR(100) NOT NULL, CHANGE display_code display_code TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE call_for_nomination_votes DROP FOREIGN KEY call_for_nomination_votes_ibfk_1');
        $this->addSql('ALTER TABLE call_for_nomination_votes ADD CONSTRAINT FK_44A6FAACF1B2BBA7 FOREIGN KEY (nomination_id) REFERENCES call_for_nomination (nomination_id)');
        $this->addSql('ALTER TABLE committee_status_record CHANGE record_id record_id INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE department_list CHANGE title title VARCHAR(64) NOT NULL');
        $this->addSql('ALTER TABLE issues_files DROP FOREIGN KEY issues_files_ibfk_1');
        $this->addSql('ALTER TABLE issues_files DROP FOREIGN KEY issues_files_ibfk_3');
        $this->addSql('ALTER TABLE issues_files CHANGE issue_id issue_id INT UNSIGNED DEFAULT NULL, CHANGE notification_email notification_email INT UNSIGNED NOT NULL, CHANGE issue_file_size issue_file_size INT NOT NULL, CHANGE issue_file_ready issue_file_ready TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE issues_files ADD CONSTRAINT FK_76E0750A5E7AA58C FOREIGN KEY (issue_id) REFERENCES issues (issue_id)');
        $this->addSql('ALTER TABLE issues_files ADD CONSTRAINT FK_76E0750A932C6286 FOREIGN KEY (issue_file_uploaded_by) REFERENCES user_info_list (user_id)');
        $this->addSql('ALTER TABLE bylaws CHANGE code code VARCHAR(6) NOT NULL, CHANGE section section VARCHAR(20) NOT NULL, CHANGE isheader isheader TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE vote_item CHANGE item_id item_id INT NOT NULL, CHANGE username username VARCHAR(16) NOT NULL, CHANGE votes votes INT NOT NULL, CHANGE paper_votes paper_votes INT NOT NULL');
        $this->addSql('ALTER TABLE committee_pref_solicitation CHANGE reason reason VARCHAR(100) NOT NULL');
        $this->addSql('ALTER TABLE committees_and_awards CHANGE year year INT NOT NULL, CHANGE username username VARCHAR(16) NOT NULL, CHANGE text text VARCHAR(100) NOT NULL');
        $this->addSql('ALTER TABLE user_info_list DROP FOREIGN KEY user_info_list_ibfk_1');
        $this->addSql('ALTER TABLE user_info_list CHANGE username username VARCHAR(16) NOT NULL, CHANGE first_name first_name VARCHAR(20) NOT NULL, CHANGE surname surname VARCHAR(20) NOT NULL, CHANGE scale scale INT NOT NULL, CHANGE title title INT NOT NULL, CHANGE secondary_title secondary_title INT NOT NULL, CHANGE secondary_college secondary_college INT NOT NULL, CHANGE secondary_department secondary_department INT NOT NULL, CHANGE secondary_fte secondary_fte DOUBLE PRECISION NOT NULL, CHANGE email email VARCHAR(40) DEFAULT NULL, CHANGE phone phone VARCHAR(24) DEFAULT NULL, CHANGE no_mail no_mail TINYINT(1) NOT NULL, CHANGE status_id status_id INT NOT NULL, CHANGE program_title program_title INT NOT NULL, CHANGE secondary_program_title secondary_program_title INT NOT NULL');
        $this->addSql('ALTER TABLE user_info_list ADD CONSTRAINT FK_1D43A772CD1DE18A FOREIGN KEY (department) REFERENCES department_list (department_id)');
        $this->addSql('ALTER TABLE issues CHANGE issue_status issue_status INT NOT NULL, CHANGE public public INT NOT NULL');
        $this->addSql('ALTER TABLE committee_meeting_info CHANGE time_start time_start VARCHAR(10) DEFAULT NULL');
        $this->addSql('ALTER TABLE college_list CHANGE title title VARCHAR(64) NOT NULL, CHANGE abbreviation abbreviation VARCHAR(8) DEFAULT NULL');
        $this->addSql('ALTER TABLE surveys CHANGE isOpen isOpen INT NOT NULL');
        $this->addSql('ALTER TABLE awards_nominations CHANGE email_sent email_sent INT UNSIGNED NOT NULL');
        $this->addSql('ALTER TABLE committee_status_list CHANGE com_status_id com_status_id INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE title_type CHANGE isAdmin isAdmin INT NOT NULL');
        $this->addSql('ALTER TABLE old_grants CHANGE username username VARCHAR(16) NOT NULL, CHANGE year year INT NOT NULL, CHANGE award_type award_type VARCHAR(64) NOT NULL');
        $this->addSql('ALTER TABLE ballot_item CHANGE ballot_code ballot_code VARCHAR(8) NOT NULL');
        $this->addSql('ALTER TABLE grants_applications DROP FOREIGN KEY grants_applications_ibfk_1');
        $this->addSql('ALTER TABLE grants_applications CHANGE email_sent email_sent INT NOT NULL');
        $this->addSql('ALTER TABLE grants_applications ADD CONSTRAINT FK_624EAB38A76ED395 FOREIGN KEY (user_id) REFERENCES user_info_list (user_id)');
        $this->addSql('ALTER TABLE webshare_files DROP FOREIGN KEY filesList_ibfk_1');
        $this->addSql('ALTER TABLE webshare_files CHANGE ticket ticket VARCHAR(64) DEFAULT NULL, CHANGE fileHash fileHash VARCHAR(100) NOT NULL, CHANGE downloaded downloaded INT NOT NULL');
        $this->addSql('ALTER TABLE webshare_files ADD CONSTRAINT FK_6D70E6C097A0ADA3 FOREIGN KEY (ticket) REFERENCES webshare (ticket)');
        $this->addSql('ALTER TABLE keyword_list CHANGE username username VARCHAR(16) NOT NULL');
        $this->addSql('ALTER TABLE committee_types CHANGE committee_type_title committee_type_title VARCHAR(50) DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE admin');
        $this->addSql('ALTER TABLE awards_nominations CHANGE email_sent email_sent INT UNSIGNED DEFAULT 0 NOT NULL');
        $this->addSql('ALTER TABLE ballot CHANGE ballot_code ballot_code VARCHAR(8) DEFAULT \'\' NOT NULL COLLATE utf8_general_ci, CHANGE limit_to_college limit_to_college TINYINT(1) DEFAULT \'0\' NOT NULL, CHANGE college college INT DEFAULT 0 NOT NULL, CHANGE verified_ballot verified_ballot TINYINT(1) DEFAULT \'0\' NOT NULL, CHANGE limit_to_dept limit_to_dept TINYINT(1) DEFAULT \'0\' NOT NULL, CHANGE department department INT DEFAULT 0 NOT NULL, CHANGE no_display no_display INT DEFAULT 0 NOT NULL');
        $this->addSql('ALTER TABLE ballot_item CHANGE ballot_code ballot_code VARCHAR(8) DEFAULT \'\' NOT NULL COLLATE utf8_general_ci');
        $this->addSql('ALTER TABLE bylaw_codes CHANGE code code VARCHAR(6) DEFAULT \'\' NOT NULL COLLATE latin1_swedish_ci, CHANGE title title VARCHAR(100) DEFAULT \'\' NOT NULL COLLATE latin1_swedish_ci, CHANGE display_code display_code TINYINT(1) DEFAULT \'0\' NOT NULL');
        $this->addSql('ALTER TABLE bylaws CHANGE code code VARCHAR(6) DEFAULT \'\' NOT NULL COLLATE latin1_swedish_ci, CHANGE section section VARCHAR(20) DEFAULT \'\' NOT NULL COLLATE latin1_swedish_ci, CHANGE isheader isheader TINYINT(1) DEFAULT \'0\' NOT NULL');
        $this->addSql('ALTER TABLE call_for_nomination_logs CHANGE call_log_id call_log_id INT NOT NULL');
        $this->addSql('ALTER TABLE call_for_nomination_votes DROP FOREIGN KEY FK_44A6FAACF1B2BBA7');
        $this->addSql('ALTER TABLE call_for_nomination_votes ADD CONSTRAINT call_for_nomination_votes_ibfk_1 FOREIGN KEY (nomination_id) REFERENCES call_for_nomination (nomination_id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE call_for_nominations CHANGE college college INT DEFAULT 0 NOT NULL, CHANGE limit_to_college limit_to_college TINYINT(1) DEFAULT \'0\' NOT NULL, CHANGE limit_to_department limit_to_department TINYINT(1) DEFAULT \'0\' NOT NULL, CHANGE department department INT DEFAULT 0 NOT NULL');
        $this->addSql('ALTER TABLE college_list CHANGE title title VARCHAR(64) DEFAULT \'\' NOT NULL COLLATE latin1_swedish_ci, CHANGE abbreviation abbreviation VARCHAR(8) DEFAULT \'\' COLLATE latin1_swedish_ci');
        $this->addSql('ALTER TABLE committee_extras CHANGE committee_id committee_id INT DEFAULT 0 NOT NULL, CHANGE year year INT DEFAULT 0 NOT NULL');
        $this->addSql('ALTER TABLE committee_meeting_info CHANGE time_start time_start VARCHAR(10) DEFAULT \'\' COLLATE latin1_swedish_ci');
        $this->addSql('ALTER TABLE committee_membership CHANGE committee_id committee_id INT DEFAULT 0 NOT NULL, CHANGE username username VARCHAR(16) DEFAULT \'\' NOT NULL COLLATE utf8_general_ci, CHANGE year year INT DEFAULT 0 NOT NULL, CHANGE letter_sent letter_sent INT DEFAULT 0 NOT NULL');
        $this->addSql('ALTER TABLE committee_pref_solicitation CHANGE reason reason VARCHAR(100) DEFAULT \'0\' NOT NULL COLLATE latin1_swedish_ci');
        $this->addSql('ALTER TABLE committee_status_list CHANGE com_status_id com_status_id INT NOT NULL');
        $this->addSql('ALTER TABLE committee_status_record CHANGE record_id record_id INT NOT NULL');
        $this->addSql('ALTER TABLE committee_types CHANGE committee_type_title committee_type_title VARCHAR(50) DEFAULT \'\' COLLATE utf8_general_ci');
        $this->addSql('ALTER TABLE committees CHANGE adhoc adhoc TINYINT(1) DEFAULT \'0\', CHANGE parent_committee_id parent_committee_id INT DEFAULT 0, CHANGE administrative administrative TINYINT(1) DEFAULT \'0\'');
        $this->addSql('ALTER TABLE committees_and_awards CHANGE year year INT DEFAULT 0 NOT NULL, CHANGE username username VARCHAR(16) DEFAULT \'\' NOT NULL COLLATE latin1_swedish_ci, CHANGE text text VARCHAR(100) DEFAULT \'\' NOT NULL COLLATE latin1_swedish_ci');
        $this->addSql('ALTER TABLE department_list CHANGE title title VARCHAR(64) DEFAULT \'\' NOT NULL COLLATE utf8_general_ci');
        $this->addSql('ALTER TABLE election_votes DROP FOREIGN KEY FK_831AB045A708DAFF');
        $this->addSql('ALTER TABLE election_votes ADD CONSTRAINT election_votes_ibfk_1 FOREIGN KEY (election_id) REFERENCES election (election_id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE field_storage CHANGE form_code form_code VARCHAR(16) DEFAULT \'\' NOT NULL COLLATE latin1_swedish_ci, CHANGE username username VARCHAR(16) DEFAULT \'\' COLLATE latin1_swedish_ci, CHANGE field_name field_name VARCHAR(64) DEFAULT \'\' NOT NULL COLLATE latin1_swedish_ci');
        $this->addSql('ALTER TABLE form_filled_in_table CHANGE form_code form_code VARCHAR(8) DEFAULT \'\' NOT NULL COLLATE latin1_swedish_ci, CHANGE username username VARCHAR(16) DEFAULT \'\' NOT NULL COLLATE latin1_swedish_ci');
        $this->addSql('ALTER TABLE grants_applications DROP FOREIGN KEY FK_624EAB38A76ED395');
        $this->addSql('ALTER TABLE grants_applications CHANGE email_sent email_sent INT DEFAULT 0 NOT NULL');
        $this->addSql('ALTER TABLE grants_applications ADD CONSTRAINT grants_applications_ibfk_1 FOREIGN KEY (user_id) REFERENCES user_info_list (user_id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE grants_banned_users CHANGE reason reason VARCHAR(100) DEFAULT \'\' COLLATE utf8_general_ci');
        $this->addSql('ALTER TABLE grants_reviews CHANGE final_review final_review INT DEFAULT 0 NOT NULL');
        $this->addSql('ALTER TABLE issues CHANGE issue_status issue_status INT DEFAULT 0 NOT NULL, CHANGE public public INT DEFAULT 0 NOT NULL');
        $this->addSql('ALTER TABLE issues_committees DROP FOREIGN KEY FK_BF5AAB635E7AA58C');
        $this->addSql('ALTER TABLE issues_committees DROP FOREIGN KEY FK_BF5AAB63ED1A100B');
        $this->addSql('ALTER TABLE issues_committees ADD CONSTRAINT issues_committees_ibfk_1 FOREIGN KEY (issue_id) REFERENCES issues (issue_id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE issues_committees ADD CONSTRAINT issues_committees_ibfk_2 FOREIGN KEY (committee_id) REFERENCES committees (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE issues_files DROP FOREIGN KEY FK_76E0750A5E7AA58C');
        $this->addSql('ALTER TABLE issues_files DROP FOREIGN KEY FK_76E0750A932C6286');
        $this->addSql('ALTER TABLE issues_files CHANGE issue_id issue_id INT UNSIGNED NOT NULL, CHANGE notification_email notification_email INT UNSIGNED DEFAULT 0 NOT NULL, CHANGE issue_file_size issue_file_size INT DEFAULT 0 NOT NULL, CHANGE issue_file_ready issue_file_ready TINYINT(1) DEFAULT \'0\' NOT NULL');
        $this->addSql('ALTER TABLE issues_files ADD CONSTRAINT issues_files_ibfk_1 FOREIGN KEY (issue_id) REFERENCES issues (issue_id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE issues_files ADD CONSTRAINT issues_files_ibfk_3 FOREIGN KEY (issue_file_uploaded_by) REFERENCES user_info_list (user_id) ON UPDATE CASCADE ON DELETE SET NULL');
        $this->addSql('ALTER TABLE keyword_list CHANGE username username VARCHAR(16) DEFAULT \'\' NOT NULL COLLATE latin1_swedish_ci');
        $this->addSql('ALTER TABLE leaves CHANGE username username VARCHAR(16) DEFAULT \'\' NOT NULL COLLATE utf8_general_ci, CHANGE fall fall TINYINT(1) DEFAULT \'0\' NOT NULL, CHANGE winter winter TINYINT(1) DEFAULT \'0\' NOT NULL, CHANGE spring spring TINYINT(1) DEFAULT \'0\' NOT NULL, CHANGE summer summer TINYINT(1) DEFAULT \'0\' NOT NULL');
        $this->addSql('ALTER TABLE login_list DROP FOREIGN KEY FK_82BA735DA76ED395');
        $this->addSql('ALTER TABLE login_list DROP FOREIGN KEY FK_82BA735DF85E0677');
        $this->addSql('DROP INDEX UNIQ_82BA735DF85E0677 ON login_list');
        $this->addSql('ALTER TABLE login_list DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE login_list CHANGE user_id user_id INT UNSIGNED AUTO_INCREMENT NOT NULL, CHANGE username username VARCHAR(16) DEFAULT \'\' NOT NULL COLLATE utf8_general_ci, CHANGE password password VARCHAR(16) DEFAULT \'\' NOT NULL COLLATE utf8_general_ci, CHANGE role role INT DEFAULT 0 NOT NULL');
        $this->addSql('ALTER TABLE login_list ADD CONSTRAINT login_list_ibfk_1 FOREIGN KEY (user_id) REFERENCES user_info_list (user_id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE login_list ADD CONSTRAINT login_list_ibfk_2 FOREIGN KEY (username) REFERENCES user_info_list (username) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE login_list ADD PRIMARY KEY (username)');
        $this->addSql('ALTER TABLE master_keyword_list CHANGE keyword_related keyword_related VARCHAR(160) DEFAULT \'\' NOT NULL COLLATE latin1_swedish_ci');
        $this->addSql('ALTER TABLE modules CHANGE is_admin is_admin TINYINT(1) DEFAULT \'0\' NOT NULL, CHANGE module_file module_file VARCHAR(100) DEFAULT \'\' COLLATE utf8_general_ci');
        $this->addSql('ALTER TABLE nominations CHANGE id id INT DEFAULT 0 NOT NULL, CHANGE username username VARCHAR(16) DEFAULT \'\' NOT NULL COLLATE latin1_swedish_ci');
        $this->addSql('ALTER TABLE notifications DROP FOREIGN KEY FK_6000B0D3D0520624');
        $this->addSql('ALTER TABLE notifications DROP FOREIGN KEY FK_6000B0D329F6EE60');
        $this->addSql('ALTER TABLE notifications CHANGE notification_type_id notification_type_id INT UNSIGNED NOT NULL, CHANGE to_user_id to_user_id INT UNSIGNED NOT NULL, CHANGE `read` `read` TINYINT(1) DEFAULT \'0\' NOT NULL');
        $this->addSql('ALTER TABLE notifications ADD CONSTRAINT notifications_ibfk_1 FOREIGN KEY (notification_type_id) REFERENCES notifications_type (notification_type_id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE notifications ADD CONSTRAINT notifications_ibfk_2 FOREIGN KEY (to_user_id) REFERENCES user_info_list (user_id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE old_grants CHANGE username username VARCHAR(16) DEFAULT \'\' NOT NULL COLLATE utf8_general_ci, CHANGE year year INT DEFAULT 0 NOT NULL, CHANGE award_type award_type VARCHAR(64) DEFAULT \'\' NOT NULL COLLATE utf8_general_ci');
        $this->addSql('ALTER TABLE pps_title_list CHANGE tuc tuc VARCHAR(11) DEFAULT \'\' COLLATE utf8_general_ci COMMENT \'Title Unit Code\'');
        $this->addSql('ALTER TABLE program_list CHANGE title title VARCHAR(64) DEFAULT \'\' NOT NULL COLLATE latin1_swedish_ci');
        $this->addSql('ALTER TABLE report CHANGE archive archive INT DEFAULT 0 NOT NULL');
        $this->addSql('ALTER TABLE role_list CHANGE role_title role_title VARCHAR(30) DEFAULT \'\' NOT NULL COLLATE utf8_general_ci, CHANGE is_admin is_admin TINYINT(1) DEFAULT \'0\' NOT NULL, CHANGE is_professor is_professor TINYINT(1) DEFAULT \'0\' NOT NULL, CHANGE is_voter is_voter TINYINT(1) DEFAULT \'0\' NOT NULL, CHANGE is_reader is_reader TINYINT(1) DEFAULT \'0\' NOT NULL, CHANGE is_cal_editor is_cal_editor TINYINT(1) DEFAULT \'0\' NOT NULL, CHANGE is_supperadmin is_supperadmin TINYINT(1) DEFAULT \'0\' NOT NULL');
        $this->addSql('ALTER TABLE survey_responses CHANGE status status INT DEFAULT 0');
        $this->addSql('ALTER TABLE surveys CHANGE isOpen isOpen INT DEFAULT 0 NOT NULL');
        $this->addSql('ALTER TABLE title_list CHANGE title title VARCHAR(100) DEFAULT \'\' NOT NULL COLLATE utf8_general_ci');
        $this->addSql('ALTER TABLE title_type CHANGE isAdmin isAdmin INT DEFAULT 0 NOT NULL');
        $this->addSql('ALTER TABLE user_info_list DROP FOREIGN KEY FK_1D43A772CD1DE18A');
        $this->addSql('ALTER TABLE user_info_list CHANGE username username VARCHAR(16) DEFAULT \'\' NOT NULL COLLATE utf8_general_ci, CHANGE first_name first_name VARCHAR(20) DEFAULT \'\' NOT NULL COLLATE utf8_general_ci, CHANGE surname surname VARCHAR(20) DEFAULT \'\' NOT NULL COLLATE utf8_general_ci, CHANGE scale scale INT DEFAULT 0 NOT NULL, CHANGE title title INT DEFAULT 0 NOT NULL, CHANGE secondary_title secondary_title INT DEFAULT 0 NOT NULL, CHANGE secondary_college secondary_college INT DEFAULT 0 NOT NULL, CHANGE secondary_department secondary_department INT DEFAULT 0 NOT NULL, CHANGE secondary_fte secondary_fte DOUBLE PRECISION DEFAULT \'0\' NOT NULL, CHANGE email email VARCHAR(40) DEFAULT \'\' COLLATE utf8_general_ci, CHANGE phone phone VARCHAR(24) DEFAULT \'\' COLLATE utf8_general_ci, CHANGE no_mail no_mail TINYINT(1) DEFAULT \'0\' NOT NULL, CHANGE status_id status_id INT DEFAULT 0 NOT NULL, CHANGE program_title program_title INT DEFAULT 0 NOT NULL, CHANGE secondary_program_title secondary_program_title INT DEFAULT 0 NOT NULL');
        $this->addSql('ALTER TABLE user_info_list ADD CONSTRAINT user_info_list_ibfk_1 FOREIGN KEY (department) REFERENCES department_list (department_id) ON UPDATE CASCADE ON DELETE SET NULL');
        $this->addSql('ALTER TABLE user_info_verify DROP FOREIGN KEY FK_C5E3BC80A76ED395');
        $this->addSql('ALTER TABLE user_info_verify CHANGE correct correct INT DEFAULT 0');
        $this->addSql('ALTER TABLE user_info_verify ADD CONSTRAINT user_info_verify_ibfk_1 FOREIGN KEY (user_id) REFERENCES user_info_list (user_id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user_status_list CHANGE user_status user_status VARCHAR(100) DEFAULT \'\' NOT NULL COLLATE utf8_general_ci');
        $this->addSql('ALTER TABLE user_status_record CHANGE username username VARCHAR(16) DEFAULT \'\' COLLATE utf8_general_ci, CHANGE status_id status_id INT DEFAULT 0 NOT NULL');
        $this->addSql('ALTER TABLE vote_item CHANGE item_id item_id INT DEFAULT 0 NOT NULL, CHANGE username username VARCHAR(16) DEFAULT \'\' NOT NULL COLLATE utf8_general_ci, CHANGE votes votes INT DEFAULT 0 NOT NULL, CHANGE paper_votes paper_votes INT DEFAULT 0 NOT NULL');
        $this->addSql('ALTER TABLE webshare CHANGE ticket ticket VARCHAR(64) DEFAULT \'\' NOT NULL COLLATE utf8_general_ci');
        $this->addSql('ALTER TABLE webshare_files DROP FOREIGN KEY FK_6D70E6C097A0ADA3');
        $this->addSql('ALTER TABLE webshare_files CHANGE ticket ticket VARCHAR(64) DEFAULT \'\' NOT NULL COLLATE utf8_general_ci, CHANGE fileHash fileHash VARCHAR(100) DEFAULT \'\' NOT NULL COLLATE utf8_general_ci, CHANGE downloaded downloaded INT DEFAULT 0 NOT NULL');
        $this->addSql('ALTER TABLE webshare_files ADD CONSTRAINT filesList_ibfk_1 FOREIGN KEY (ticket) REFERENCES webshare (ticket) ON UPDATE CASCADE ON DELETE CASCADE');
    }
}
