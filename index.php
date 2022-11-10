<?php
define('XMLlocal', 'sucursales.xml'); 
$data = simplexml_load_file(XMLlocal);
echo "<h1>Sucursales</h1>";
//bucle para recorrer los elementos del array
foreach($data as $item){
?>
<table border="1">
		<tr>
			<td>Ciudad: </td>
			<td>
				<?php echo $item->ciudad; ?>	
			</td>
		</tr>
		<tr>
			<td>Telefono: </td>
			<td>
				<?php echo $item->telefono; ?>	
			</td>
		</tr>
</table><br>
<?php    
}
?>
