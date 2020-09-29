create table tb_usuario(
	id_usuario int primary key auto_increment,
    nome       varchar(50) not null,
    rs         varchar(50) not null,
    data       date,
    cpf        varchar(11),
    login       varchar(15),
    operador   varchar(15),
    cad_date   timestamp
);
create index ix_usuario on tb_usuario(id_usuario);
#alter table tb_usuario add constraint fkey_usuario foreign key(login) references mysql.user(user);
alter table tb_usuario add constraint uq_login_unico unique(login);
insert into tb_usuario values(null,'LUIZ JAILTON VIANA DE PAULA','JAILTON DPAULA','1995-01-13','00000000000','root',null,null);
