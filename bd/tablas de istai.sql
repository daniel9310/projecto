create database istai;

use istai;

create table ct_tipousr (
	id_tipousr int primary key auto_increment,
    tusr_nombre varchar(40)
);

create table ct_usr (
	id_usr int primary key auto_increment,
    usr_username varchar(40),
    usr_passwd varchar(30),
    usr_perfil varchar(40),
    fecha_mod timestamp,
    activo tinyint,
    usr_nombre varchar(70),
    usr_apellido varchar(50),
    fk_tipousuario int,
    foreign key (fk_tipousuario) references ct_tipousr (id_tipousr)
);

create table leyes (
	id_leyes int primary key auto_increment,
	descripcion text,
    tipo varchar(40),
    fk_user_leyes int,
    foreign key (fk_user_leyes) references ct_usr (id_usr)
);
create table articulos (
	id_art int primary key auto_increment,
	descripcion text,
	num_art varchar(30),
    fk_idleyes_art int,
    foreign key (fk_idleyes_art) references leyes (id_leyes)
);
create table fracciones (
	id_frac int primary key auto_increment,
	descripcion text,
	num_frac varchar(30),
    fk_idart_frac int,
    foreign key (fk_idart_frac) references articulos (id_art)
);
create table incisos (
	id_inc int primary key auto_increment,
	descripcion text,
	num_inc varchar(30),
    fk_idfrac_inc int,
    foreign key (fk_idfrac_inc) references fracciones(id_frac)
);

create table formatos (
	id_formatos int primary key auto_increment,
	nombre varchar(70),
	nombrecorto varchar(30),
    descripcion text
);
create table campoformatos (
	id_campo int primary key auto_increment,
	descripcion text,
	tipo varchar(30),
    campo varchar(50),
    fk_idformatos_cf int,
    foreign key (fk_idformatos_cf) references formatos (id_formatos)
);

create table rela_formatos (
	id_relacion int primary key auto_increment,
    activo int,
    fk_idformatos_rel int,
    fk_idfrac_rel int,
    foreign key (fk_idformatos_rel) references formatos (id_formatos),
    foreign key (fk_idfrac_rel) references fracciones (id_frac)
);

create table pln_convocatorias(
	cnv_id int auto_increment primary key,
    cnv_fecha varchar(20),
    cnv_anio int,
    cnv_fechareg timestamp,
    activo int,
    cnv_usrid int,
    cnv_archivo varchar(100)
);

create table pln_actas(
	act_id int auto_increment primary key,
    act_descripcion varchar(100),
    act_fecha varchar(20),
    act_anio int,
    activo int,
    act_archivo varchar(100),
    act_num int
);

create table pln_acuerdos(
	acr_id int auto_increment primary key,
    acr_expedientes varchar(40),
    acr_archivo varchar(100),
    acr_anio int,
    acr_fecha varchar(20),
    acr_fechareg timestamp,
    activo int
);

create table pln_resoluciones(
	rsl_id int auto_increment primary key,
    rsl_expediente varchar(40),
    rsl_sobligado varchar(60),
    rsl_recurrente varchar(40),
    rsl_fecha varchar(20),
    rsl_archivo varchar(100),
    activo int,
    rsl_fechareg timestamp,
    rsl_anio int
);

create table pln_rrfacil(
	rr_id int auto_increment primary key,
    rr_solicitante varchar(40),
    rr_social varchar(60),
    rr_rrepresentante varchar(40),
    rr_email varchar(50),
    rr_so varchar(60),
    rr_acto text,
    rr_hechos text,
    rr_pruebas text,
    rr_sol varchar(40),
    rr_pdf text,
    rr_fechareg timestamp,
    rr_status int
);

create table pln_rrpruebas(
	rp_id int auto_increment primary key,
    fk_rr_id int,
    rp_namefile int,
    rp_fechareg timestamp,
    foreign key (fk_rr_id) references pln_rrfacil (rr_id)
    
);

create table glr_galeria(
	glr_id int auto_increment primary key,
    glr_descripcion text,
    glr_fecha varchar(20),
    activo int,
    glr_fechareg timestamp,
    seccion int,
    glr_nombre varchar(40)
);

create table glr_gfotos(
	glrf_id int auto_increment primary key,
    glrf_foto varchar(50),
    glrf_description text,
    glrf_fechareg timestamp,
    activo int,
    glrf_portada int,
    fk_idglr int,
    foreign key (fk_idglr) references glr_galeria (glr_id)
    
);
