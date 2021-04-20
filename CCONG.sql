use mysql;
create user 'admin'@'localhost' identified by "Fjeclot21@";
create database CCONG;
use CCONG;
grant all privileges on CCONG.*to 'admin'@'localhost';
