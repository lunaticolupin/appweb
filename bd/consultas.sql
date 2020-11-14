select ID, NombreCliente, (sum(ImporteDeposito) - sum(ImportePrestamo)) as Saldo from Cliente c
    left join Deposito d on d.IdCliente = c.ID
    left JOIN Prestamo p on p.IdCliente = c.ID
    GROUP BY ID;

select ID, (sum(ImporteDeposito) - sum(ImportePrestamo)) into saldo from Cliente c
    join Deposito d on d.IdCliente = c.ID
    JOIN Prestamo p on p.IdCliente = c.ID
    and c.ID = 2 and d.Fecha >=  '2019-06-01' and d.Fecha <= '2019-12-01' and p.Fecha >= '2019-06-01' and p.Fecha <= '2019-12-01';

    
delimiter //
CREATE FUNCTION obtener_saldo (ClienteId int) RETURNS decimal(10,2) 
BEGIN
	DECLARE saldo decimal(10,2);
    
	select (sum(ImporteDeposito) - sum(ImportePrestamo)) into saldo from Cliente c
    join Deposito d on d.IdCliente = c.ID
    JOIN Prestamo p on p.IdCliente = c.ID
    and c.ID = ClienteId;
    
    RETURN saldo;
END //
delimiter ;

select ID, NombreCliente, obtener_saldo(ID) from Cliente;

delimiter //
CREATE PROCEDURE obtener_saldo_fecha (in ClienteId int, in inicio date, in fin date )
BEGIN
    
	select ID, (sum(ImporteDeposito) - sum(ImportePrestamo)) AS saldo from Cliente c
    join Deposito d on d.IdCliente = c.ID
    JOIN Prestamo p on p.IdCliente = c.ID
    and c.ID = ClienteId and d.Fecha >=  inicio and d.Fecha <= fin and p.Fecha >= inicio and p.Fecha <= fin;
END //
delimiter ;

call obtener_saldo_fecha(2, '2019-06-01', '2019-12-01');

