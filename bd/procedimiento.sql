CREATE DEFINER=`root`@`localhost` PROCEDURE `insert_user`(
    in vusr_username varchar(40),
    in vusr_passwd varchar(30),
    in vusr_perfil varchar(30),
    in vactivo tinyint,
    in vusr_nombre varchar(70),
    in vusr_apellido varchar(70),
    in vfk_tipousuario int
)
BEGIN
	insert into ct_usr(usr_username,    usr_passwd ,    usr_perfil ,    activo ,    usr_nombre , usr_apellido,    fk_tipousuario ) 
    values(vusr_username,vusr_passwd,vusr_perfil,vactivo,vusr_nombre,vusr_apellido, vfk_tipousuario);
END