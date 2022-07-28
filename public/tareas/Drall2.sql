


select d.id,
	   l2.NOMBRE "Tipo de Documento",
	   l3.DESCRIPCION "Tipo de Movimiento",
	   d.FECHAELABORA "Fecha_elaboracion",
	   d.FECHAHORA "fecha de Aplicacion",
	   d.FECHAENTREGA "Fecha de Entrega",
	   d.SUBTOTAL,
	   d.IMPUESTO ,
       d.TOTAL,
       dp.ID "MID del Proyecto",
       dp.FOLIOEXTERNO "OP",
       dp.NOMBREPROYECTO,
       c.CLAVE "clave",
       c.RAZONSOCIAL "Nombre Cliente",
       mdl.clave "Clave del producto",
       mdl.nombre "Nombre del producto"
       from documento d",
       dp.NOMBREPROYECTO,
       c.CLAVE "clave",
       c.RAZONSOCIAL "Nombre Cliente",
       mdl.clave "Clave del producto",
       mdl.nombre "Nombre del producto"
       from documento d
            join documento dp on d.documentolink = dp.id
            join v_cliente c on c.id = dp.clientelink
            join localtipodocto l2 on l2.id = d.localtipodoctolink
            join localtipomovto l3 on l3.id = d.localtipomovtolink
            join documentodetalle dt on dt.documentolink = d.id
            join articulo art on dt.articulolink = art.id
            join modelo  mdl on art.modelolink = mdl.id
          	where c.id = dp.clientelink
          	  AND d.DOCUMENTOLINK = dp.ID
          	  AND d.LOCALTIPODOCTOLINK = l2.ID
          	  AND d.LOCALTIPOMOVTOLINK = l3.ID
          	  AND dp.LOCALTIPODOCTOLINK = '17'
          	  AND d.LOCALSTATUSDOCTOLINK  <> '2'
          	  AND d.TOTAL <> '0'
              and ROWNUM <= 1000 ;
          	  --AND dp.FOLIOEXTERNO = '826';
              
              
              