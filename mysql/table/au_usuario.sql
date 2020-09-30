create table au_usuario(
	id_user_aud  int primary key auto_increment,
	id_usuario   int,
    nome         varchar(50),
    rs           varchar(50),
    data         date,
    cpf          varchar(11),
    login        varchar(15),
    operador     varchar(15),
    cad_date     timestamp,
    tipo         enum('1','2','3'),
    dt_audt      timestamp,
    operador_aud varchar(50)
);