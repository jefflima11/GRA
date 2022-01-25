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
cd_usuario varchar(25),
nm_usuario varchar(50) not null,
dt_nascimento date not null,
dt_cadastro timestamp not null default current_timestamp(),
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
                   where cd_produto = pcd_produto
                     and cd_marca = pcd_marca
                     and cd_tamanho = pcd_tamanho
                     and cd_tipo_peca = pcd_tipo_peca
                     and ds_observacao = pds_observacao
                     and cd_hist_pro not in (select cd_hist_pro))


 end $$


 DELIMITER ;
