<?php

 include 'conn.php';
 
 $sql="SELECT * from electro";
 $query=mysqli_query($check,$sql);
 
 ?>
 <html>
	<head>
		<title>the table</title>
	</head>
	<body bgcolor='powderblue';>
	<center><h1 style="color:blue">ELECTRO NEPAL</h1></center>
	<hr>
	 <h2 style="color:blue"><center>HISTORY</center></h2>
	 <table border="2" style="color:black">
	  <tr>
	    <td>ID  </td>
		<td>Time</td>
		<td>Preading</td>
		<td>Creading</td>
		<td>unit</td>
		<td>exunit</td>
		<td>cost</td>
		<td>status</td>

	  </tr>
	  <?php
	$sn=1;	 
	while($data=mysqli_fetch_assoc($query)){
	?>
	<tr>
	<td><?php echo $sn;?></td>
	<td><?php echo $data['time'];?></td>
	
	<td><?php echo $data['creading'];?></td>
	<td><?php echo $data['unit']=$data['creading']-$data['preading']?></td>
	<td><?php echo $data['exunit'];?></td>
	<td><?php echo $data['cost']=$data['unit']*2?></td>
	<td><?php if($data['unit']>$data['exunit']){ ?>
		 <?php echo $data['status']="normal";} ?>
		 <?php else{?>
		 <?php echo $data['status']="excessive";} ?></td>
	
	</tr>
	<?php $sn++;} ?>
	  
	  
	   
	 </table>
	</body>
	</html>