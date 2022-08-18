create database securite;

use securite;

create table vendeur(
id_vendeur int auto_increment primary key not null,
nom_vendeur varchar(50),
prenom_vendeur varchar(50)
);

create table article(
id_article int auto_increment primary key not null,
nom_article varchar(50),
prix_article float
);

create table ticket(
id_ticket int auto_increment primary key not null,
date_ticket date,
id_vendeur int
);

create table ajouter(
id_ticket int,
id_article int,
qtx int,
primary key(id_ticket, id_article)
);
create table utilisateur(
	id_util int primary key auto_increment not null,
    name_util varchar(50) not null,
    first_name_util varchar(50) not null,
    mail_util varchar(50) not null,
	pwd_util varchar(100) not null,
    id_role int
)Engine=InnoDB;

create table role(
	id_role int primary key auto_increment not null,
    name_role varchar(50) not null
)Engine=InnoDB;

alter table utilisateur
add constraint fk_attribuer_role
foreign key(id_role)
references role(id_role);

alter table ticket
add constraint fk_posseder_vendeur
foreign key(id_vendeur)
references vendeur(id_vendeur);

alter table ajouter
add constraint fk_ajouter_article
foreign key(id_article)
references article(id_article);

alter table ajouter
add constraint fk_ajouter_ticket
foreign key(id_ticket)
references ticket(id_ticket);