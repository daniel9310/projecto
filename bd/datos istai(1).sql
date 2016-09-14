use istai;

insert ct_tipousr(tusr_nombre) VALUES('ADMIN');
insert ct_tipousr(tusr_nombre) VALUES('DIFUSION');
insert ct_tipousr(tusr_nombre) VALUES('PLENO');
insert ct_tipousr(tusr_nombre) VALUES('JURIDICO');
insert ct_tipousr(tusr_nombre) VALUES('INFORMATICA');

INSERT ct_usr (usr_username,usr_passwd,usr_tipo,usr_perfil,activo,usr_nombre,usr_apellido) VALUES ('daniel','istai123',1,1,2,'daniel eduardo mendez robles');

insert leyes(descripcion,tipo,fk_user_leyes) values ('Ley general ','General',1);

insert articulos(descripcion,num_art,fk_idleyes_art) values ('En la ley federal y de las entidades federativas se contemplara que los sujetos obligados pongan a disposicion del publico y mantengan actualizada, en los respectivos medios electorinicos, de acuerdo con sus facultades, atribuciones, funciones u objeto social, segun corresponda, la informacion, por lo menos, de los temas, documentos y politicas que a continuacion de señalan:','70',1);

insert fracciones(descripcion,num_frac,fk_idart_frac) values ('El marco normativo aplicable al sujeto obligado, en el que debera incluirse leyes, codigos, reglamentos, decretos de creacion, manuales administrativos, reglas deoperacion, criterios, politicas, entre otros','I',1);
insert fracciones(descripcion,num_frac,fk_idart_frac) values ('Su estructura organica completa, en un formato que permita vincular cada parte de la estructura, las atribuciones y responsabilidades que le corresponde a cada servidor publico, prestado de servicios profesionales o miembro de los sujetos obligados, de conformidad con las disposiciones aplicables.','II',1);
insert fracciones(descripcion,num_frac,fk_idart_frac) values ('Las facultades de cada area;','III',1);
insert fracciones(descripcion,num_frac,fk_idart_frac) values ('Las facultades de cada area;','IV',1);
insert fracciones(descripcion,num_frac,fk_idart_frac) values ('Las facultades de cada area;','V',1);
insert fracciones(descripcion,num_frac,fk_idart_frac) values ('Las facultades de cada area;','VI',1);
insert fracciones(descripcion,num_frac,fk_idart_frac) values ('Las facultades de cada area;','VII',1);
insert fracciones(descripcion,num_frac,fk_idart_frac) values ('Las facultades de cada area;','VIII',1);
insert fracciones(descripcion,num_frac,fk_idart_frac) values ('Las facultades de cada area;','IX',1);
insert fracciones(descripcion,num_frac,fk_idart_frac) values ('Las facultades de cada area;','X',1);
insert fracciones(descripcion,num_frac,fk_idart_frac) values ('Las facultades de cada area;','XI',1);
insert fracciones(descripcion,num_frac,fk_idart_frac) values ('Las facultades de cada area;','XII',1);
insert fracciones(descripcion,num_frac,fk_idart_frac) values ('Las facultades de cada area;','XIII',1);
insert fracciones(descripcion,num_frac,fk_idart_frac) values ('Las facultades de cada area;','XIV',1);
insert fracciones(descripcion,num_frac,fk_idart_frac) values ('Las facultades de cada area;','XV',1);
insert fracciones(descripcion,num_frac,fk_idart_frac) values ('Las facultades de cada area;','XVI',1);
select * from leyes;

/*insert incisos(descripcion,num_inc,fk_idfrac_inc) values ('','',1);*/

insert formatos(nombre,nombrecorto,descripcion) values ('Marco Normativo','LGT_Art_70_Fr_I','Marco Normativo');

insert campoformatos(descripcion,tipo,fk_idformatos_cf) values ('Tipo de Normatividad','text',1);
insert campoformatos(descripcion,tipo,fk_idformatos_cf) values ('Denominacion de ka norma','text',1);
insert campoformatos(descripcion,tipo,fk_idformatos_cf) values ('Fecha de Publicacion en DOF u otro medio','text',1);
insert campoformatos(descripcion,tipo,fk_idformatos_cf) values ('Fecha de ultima modificacion','timestamp',1);
insert campoformatos(descripcion,tipo,fk_idformatos_cf) values ('Hipervinculo al documento de la norma','text',1);
insert campoformatos(descripcion,tipo,fk_idformatos_cf) values ('Fecha de validacion','varchar',1);
insert campoformatos(descripcion,tipo,fk_idformatos_cf) values ('Area responsable de la informacion','varchar',1);
insert campoformatos(descripcion,tipo,fk_idformatos_cf) values ('Año','int',1);
insert campoformatos(descripcion,tipo,fk_idformatos_cf) values ('Fecha de actualizacion','timestamp',1);
insert campoformatos(descripcion,tipo,fk_idformatos_cf) values ('nota','text',1);
select * from formatos;
select * from fracciones; 
insert rela_formatos(activo,fk_idformatos_rel,fk_idfrac_rel) values (1,1,3);
