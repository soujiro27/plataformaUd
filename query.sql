select up.usuario_id, u.email, u.password 
from usuarios_perfiles as up 
inner join usuarios as u on up.usuario_id=u.usuario_id;

-------------------------------------------------------------
select up.usuario_id, u.email, u.password, p.nombre as perfil
from usuarios_perfiles as up 
inner join usuarios as u on up.usuario_id=u.usuario_id
inner join perfiles as p on up.perfil_id=p.perfil_id where u.email='coordi@ud.com' and u.password='123';

------------------------------------------------------------------
