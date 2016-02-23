<?php 

function llenar_base_autos($mysql)
{
$mysql->Query("INSERT INTO auto VALUES (1, 'PEUGEOT', 'PARTNET', '1995', 4, 4500, 'auto1.jpg')");
$mysql->Query("INSERT INTO auto VALUES (2, 'PEUGEOT', 'M1007', '1996', 4, 8500, 'auto2.jpg')");
$mysql->Query("INSERT INTO auto VALUES (3, 'TOYOTA', 'M1X05', '1995', 6, 11500, 'auto3.jpg')");
$mysql->Query("INSERT INTO auto VALUES (4, 'PEUGEOT', 'H1X07', '1999', 6, 18500, 'auto4.jpg')");
$mysql->Query("INSERT INTO auto VALUES (5, 'MERCEDES', 'HY50D', '2001', 5, 10500, 'auto5.jpg')");
$mysql->Query("INSERT INTO auto VALUES (6, 'PEUGEOT', 'T1007', '2002', 6, 8520, 'auto6.jpg')");
$mysql->Query("INSERT INTO auto VALUES (7, 'FIAT', 'R1007', '2005', 7, 16500, 'auto7.jpg')");
$mysql->Query("INSERT INTO auto VALUES (8, 'BMW', 'T1007', '2002', 8, 5000, 'auto8.jpg')");
$mysql->Query("INSERT INTO auto VALUES (9, 'NISSAN', 'YHY03', '2006', 2, 12000, 'auto9.jpg')");
$mysql->Query("INSERT INTO auto VALUES (10, 'PEUGEOT', 'G1004', '2004', 3, 10500, 'auto10.jpg')");
$mysql->Query("INSERT INTO auto VALUES (11, 'NISSAN', 'A1004', '2004', 4, 9500, 'auto11.jpg')");
$mysql->Query("INSERT INTO auto VALUES (12, 'PEUGEOT', 'G1001', '2002', 5, 10500, 'auto1.jpg')");
$mysql->Query("INSERT INTO auto VALUES (13, 'TOYOTA', 'AV007', '20 S02', 6, 14500, 'auto13.jpg')");
$mysql->Query("INSERT INTO auto VALUES (14, 'PEUGEOT', 'HT100', '2003', 4, 19500, 'auto14.jpg')");
$mysql->Query("INSERT INTO auto VALUES (15, 'PEUGEOT', 'Q1007', '2002', 8, 9500, 'auto15.jpg')");
$mysql->Query("INSERT INTO auto VALUES (16, 'VOLKSWAGEN', 'N1007', '1996', 4, 8500, 'auto16.jpg')");
$mysql->Query("INSERT INTO auto VALUES (17, 'PEUGEOT', 'M1X05', '1995', 6, 11500, 'auto1.jpg')");
$mysql->Query("INSERT INTO auto VALUES (18, 'TOYOTA', 'H1X07', '1999', 6, 18500, 'auto2.jpg')");
$mysql->Query("INSERT INTO auto VALUES (19, 'PEUGEOT', 'HY50D', '2001', 5, 10500, 'auto5.jpg')");
$mysql->Query("INSERT INTO auto VALUES (20, 'PEUGEOT', 'T1007', '2002', 6, 8520, 'auto6.jpg')");
$mysql->Query("INSERT INTO auto VALUES (21, 'PEUGEOT', 'R1007', '2005', 7, 16500, 'auto7.jpg')");
$mysql->Query("INSERT INTO auto VALUES (22, 'PEUGEOT', 'T1007', '2002', 8, 5000, 'auto8.jpg')");
$mysql->Query("INSERT INTO auto VALUES (23, 'NISSAN', 'YHY03', '2006', 2, 12000, 'auto9.jpg')");
$mysql->Query("INSERT INTO auto VALUES (24, 'PEUGEOT', 'G1004', '2004', 3, 10500, 'auto10.jpg')");
$mysql->Query("INSERT INTO auto VALUES (25, 'PEUGEOT', 'A1004', '2004', 4, 9500, 'auto11.jpg')");
$mysql->Query("INSERT INTO auto VALUES (26, 'PEUGEOT', 'G1001', '2002', 5, 10500, 'auto12.jpg')");
$mysql->Query("INSERT INTO auto VALUES (27, 'PEUGEOT', 'AV007', '2002', 6, 14500, 'auto13.jpg')");
$mysql->Query("INSERT INTO auto VALUES (28, 'PEUGEOT', 'HT100', '2003', 4, 19500, 'auto14.jpg')");
$mysql->Query("INSERT INTO auto VALUES (29, 'PEUGEOT', 'Q1007', '2002', 8, 9500, 'auto15.jpg')");
$mysql->Query("INSERT INTO auto VALUES (30, 'MERCEDES BENZ', 'Q1007', '2002', 8, 9500, 'auto17.jpg')");
$result = $mysql->Query("select * from auto");	
return $result;
}

?>