delimiter !!
create trigger tg_user_i
after insert on tb_usuario
for each row
begin
  insert into au_usuario values(null,new.id_usuario,new.nome, new.rs, new.data, new.cpf, new.login, new.operador, new.cad_date, 1, now(), user());
end!!
create trigger tg_user_u
before update on tb_usuario
for each row
begin
   declare $id       int;
   declare $nome     varchar(50);
   declare $rs       varchar(50);
   declare $data     date;
   declare $cpf      varchar(11);
   declare $login    varchar(50);
   declare $operador varchar(50);
   declare $cad      timestamp;
	   if old.rs         != new.rs         then set $rs       = old.rs;         end if;
	   if old.nome       != new.nome       then set $nome     = old.nome;       end if;
	   if old.data       != new.data       then set $data     = old.data;       end if;
	   if old.cpf        != new.cpf        then set $cpf      = old.cpf;        end if;
	   if old.login      != new.login      then set $login    = old.login;      end if;
	   if old.operador   != new.operador   then set $operador = old.operador;   end if;
	   if old.cad_date   != new.cad_date   then set $cad      = old.cad_date;   end if;
   if old.id_usuario = new.id_usuario then
	   insert into au_usuario values(null,old.id_usuario,$nome, $rs,$data,$cpf,$login,$operador,$cad, 2, now(), user());
   else
       #valicao sem uso
  	   insert into au_usuario values(null,old.id_usuario,$nome, $rs,$data,$cpf,$login,$operador,$cad, 4, now(), user());
   end if;
end!!
create trigger tg_user_d
before delete on tb_usuario
for each row
begin
  insert into au_usuario values(null,old.id_usuario,old.nome, old.rs, old.data, old.cpf, old.login, old.operador, old.cad_date, 3, now(), user());
end!!
delimiter ;