create database php_pdo_crud_proeftoets;
use php_pdo_crud_proeftoets;

create table RichestPeople (
	`Id` int(11) not null auto_increment,
    `Name` varchar(200),
    `Networth` varchar(200),
    `Age` tinyint(4),
    `MyCompany` varchar(200),
    primary key (`id`))
    ENGINE=InnoDB;
    
insert into RichestPeople (`Name`,`Networth`,`Age`,`MyCompany`)
values ('Elon Musk','261000000000',50,'Tesla'), 
		('Jeff Bezos','183000000000',58,'Amazon'), 
		('Bernard Arnault','142000000000',73,'Louis Vuitton Moët Hennessy'), 
		('Bill Gates','130000000000',66,'Microsoft'), 
		('Warren Buffet','126000000000',91,'Berkshire Hathaway');
        