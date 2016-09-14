select u.usr_username, l.tipo, a.num_art,  fr.num_frac, form.nombre, form.nombrecorto, cf.descripcion,cf.campoRelleno, cf.tipo
from rela_formatos 
inner join fracciones as fr on id_frac=fk_idfrac_rel
inner join articulos as a on id_art =fk_idart_frac
inner join leyes as l on id_leyes = fk_idleyes_art
inner join ct_usr as u on id_usr = fk_user_leyes
inner join formatos as form on id_formatos=fk_idformatos_rel
inner join campoformatos as cf on id_campo=fk_idformatos_cf
where id_usr=1 and id_formatos=1

