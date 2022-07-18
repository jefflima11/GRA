create database GRI;
use gri;
create table marca (
cd_marca int auto_increment,
ds_marca varchar(25) not null,
constraint marca_pk primary key (cd_marca)
);

create table tamanho (
cd_tamanho int auto_increment,
ds_tamanho varchar(10) not null,
constraint tamanho_pk primary key (cd_tamanho)
);

create table tp_peca (
cd_tp_peca int auto_increment,
ds_tp_peca varchar(25) not null,
constraint tp_peca_pk primary key (cd_tp_peca)
);

create table usuario (
cd_usuario int auto_increment,
ds_usuario varchar(30) not null,
ds_senha varchar(200) not null,
nm_usuario varchar(40) not null,
tp_usuario int,
dt_cadastro timestamp not null default current_timestamp,
constraint usuario_pk primary key (cd_usuario)
);

create table hist_pro (
cd_hist_pro int auto_increment,
cd_produto int not null,
cd_marca int not null,
cd_tamanho int not null,
cd_tp_peca int not null,
dh_hist_produto timestamp not null default current_timestamp(),
ds_observacao varchar(255),
constraint hist_pro_pk primary key (cd_hist_pro),
constraint hist_marca_fk foreign key (cd_marca) references marca (cd_marca),
constraint hist_tamanho_fk foreign key (cd_tamanho) references tamanho (cd_tamanho),
constraint hist_tp_peca_fk foreign key (cd_tp_peca) references tp_peca (cd_tp_peca)
);

create table pro_inat (
cd_pro_inat int AUTO_INCREMENT PRIMARY key,
cd_hist_pro int not null,
dt_inativacao date not NULL,
constraint inat_pro_pk FOREIGN KEY (cd_hist_pro) REFERENCES hist_pro (cd_hist_pro)
);

 DELIMITER $$
 create PROCEDURE sp_hist_pro (
 pcd_produto int,
 pcd_marca int,
 pcd_tamanho int,
 pcd_tp_peca int,
 pds_observacao varchar(255)    
 )
 BEGIN
     start transaction;
     if not exists(select cd_produto
				   from hist_pro
				   where cd_hist_pro not
				   in (select cd_hist_pro from pro_inat)
				   and cd_produto = pcd_produto)

	 then insert into hist_pro values (null,pcd_produto,pcd_marca,pcd_tamanho,pcd_tp_peca,current_timestamp(),pds_observacao);		select 'dados registrados' as resultado;
		commit;
     else 
		select 'dados nao registrados';
        rollback;
	end if;
 end $$
 DELIMITER ;

alter table pro_inat
modify column dt_inativacao timestamp not null default current_timestamp();

delimiter $$
create procedure sp_inativacao (
pcd_hist_pro int
)
BEGIN
	Start TRANSACTION;
	if not exists(select cd_hist_pro
				  from pro_inat
				  where cd_hist_pro = pcd_hist_pro)
	then insert into pro_inat values (null,pcd_hist_pro,current_timestamp());

		select 'dados registrados';
		commit;
	ELSE 
		select 'dados nao registrados';							  
		rollback;

	end if;		
END $$
 DELIMITER ;

delimiter $$
create procedure sp_marca (
pds_marca varchar (25)
)
begin

	start transaction;
    
    if not exists(select ds_marca
				  from marca
                  where ds_marca = pds_marca)
                  then insert into marca values (null,pds_marca);
                  select 'dados registrados' as resultado;
                  commit;
	else 
		select 'dados nao registrados' as resultado;
        rollback;
        
	end if ;

end $$
delimiter ;

delimiter $$
create procedure sp_tamanho (
pds_tamanho varchar (25)
)
begin

	start transaction;
    
    if not exists(select ds_tamanho
				  from tamanho
                  where ds_tamanho = pds_tamanho)
                  then insert into tamanho values (null,pds_tamanho);
                  select 'dados registrados' as resultado;
                  commit;
	else 
		select 'dados nao registrados' as resultado;
        rollback;
        
	end if ;
				
end $$
delimiter ;

delimiter $$
create procedure sp_tppeca (
pds_tppeca varchar (25)
)
begin

	start transaction;
    
    if not exists(select ds_tp_peca
				  from tp_peca
                  where ds_tp_peca = pds_tppeca)
                  then insert into tp_peca values (null,pds_tppeca);
                  select 'dados registrados' as resultado;
                  commit;
	else 
		select 'dados nao registrados' as resultado;
        rollback;
        
	end if ;

end $$
delimiter ;


delimiter $$
create procedure sp_usuario(
pds_usuario varchar(30),
pds_senha varchar (200),
pnm_usuario varchar (40),
ptp_usuario int
)
begin

	start transaction;
    
    if not exists(select ds_usuario 
				  from usuario
                  where ds_usuario = pds_usuario
                    and nm_usuario = pnm_usuario) 
				then insert into usuario values (null, pds_usuario, md5(pds_senha),pnm_usuario,ptp_usuario,current_timestamp());
                select "Okay" as resultado ;
    else select "Erro" as resultado;
    
    end if;

end $$

delimiter ;