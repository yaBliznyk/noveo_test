-- ###
-- ### Copy createdb.sql.example to createdb.sql
-- ### then uncomment then set database name and username to create you need databases
-- #
-- # example: .env MYSQL_USER=appuser and need db name is myshop_db
-- #
-- #    CREATE DATABASE IF NOT EXISTS `myshop_db` ;
-- #    GRANT ALL ON `myshop_db`.* TO 'appuser'@'%' ;
-- #
-- ###
-- ### this sql script is auto run when percona container start and $DATA_SAVE_PATH/percona not exists.
-- ###
-- ### if your $DATA_SAVE_PATH/percona is exists and you do not want to delete it, you can run by manual execution:
-- ###
-- ###     docker-compose exec percona bash
-- ###     mysql -u root -p < /docker-entrypoint-initdb.d/createdb.sql
-- ###

CREATE DATABASE IF NOT EXISTS `noveo` COLLATE 'utf8_general_ci';

CREATE DATABASE IF NOT EXISTS `noveo_test` COLLATE 'utf8_general_ci' ;

GRANT ALL PRIVILEGES ON *.* TO 'noveo'@'%' IDENTIFIED BY 'noveo';

FLUSH PRIVILEGES ;