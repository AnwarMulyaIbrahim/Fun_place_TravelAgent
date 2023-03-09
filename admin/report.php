<body onload="javascript:window.print()" style="margin: 0; width: 1000px;">
	<div style="margin-left: 20px; ">
		<img src="../asset/logo3.png" style="width: 10%; float: left;">
		<table width="90%" cellspacing="0" cellpadding="0">
			<tr>
				<td><div align="center"><font size="7"><b>CV. TOUR ANGENT FUN PLACE</b></font></div></td>
			</tr>
			<tr>
				<td><div align="center"><font size="5">1600 Pennsylvania Avenue NW in Washington, D.C.</font></div></td>
			</tr>
			<tr>
				<td><div align="center"><font size="4" color="blue">United States 1-800-275-2273 , Email : FunPlace@gmail.com</font></div></td>
			</tr>
		</table>
		<p>&nbsp;</p>
		<label><font size="5"><center><b>Data Of Clients Transaction This Month</b></center></font></label><br>
		
		<table style="border: 1px solid gray;" width="100%" cellpadding="0" cellspacing="0">
			<tr>
				<th style="border-right: 1px solid gray;">no</th>
				<th style="border-right: 1px solid gray;">Name</th>
				<th style="border-right: 1px solid gray;">Email</th>
				<th style="border-right: 1px solid gray;">Phone Num.</th>
				<th style="border-right: 1px solid gray;">Person</th>
				<th style="border-right: 1px solid gray;">Payment</th>
				<th style="border-right: 1px solid gray;">City</th>
				<th style="border-right: 1px solid gray;">Total</th>
			</tr>
			<tr>
			<?php 

			include'../database.php';
			$db = new database();
			$data_trans = $db->data_trans();



			$no = 1;
			foreach ($data_trans as $row) {
			# code...
		

		 	?>
			<tr>
			<td style="border-right: 1px solid gray; border-top: 1px solid gray; padding: 3px 5px;"><?php echo $no++; ?></td>
			<td style="border-right: 1px solid gray; border-top: 1px solid gray; padding: 3px 5px;"><?php echo "$row[name_f]&nbsp$row[name_l]"; ?></td>
			<td style="border-right: 1px solid gray; border-top: 1px solid gray; padding: 3px 5px;"><?php echo "$row[email]"; ?></td>
			<td style="border-right: 1px solid gray; border-top: 1px solid gray; padding: 3px 5px;"><?php echo "+"."$row[phone]"; ?></td>
			<td style="border-right: 1px solid gray; border-top: 1px solid gray; padding: 3px 5px;"><?php echo "$row[person]"; ?></td>
			<td style="border-right: 1px solid gray; border-top: 1px solid gray; padding: 3px 5px;"><?php echo "$row[payment]"; ?></td>
			<td style="border-right: 1px solid gray; border-top: 1px solid gray; padding: 3px 5px;"><?php echo "$row[city]"; ?></td>
			<td style="border-right: 1px solid gray; border-top: 1px solid gray; padding: 3px 5px;"><?php echo "$".number_format($row['total']); ?></td>
			</tr>
			<?php 
			}
		 	?>
		 	</tr>
		</table>
		<p>&nbsp;</p>
		<table align="right" width="90%" cellspacing="0" cellpadding="0">
			<tr>
				<td width="80%"></td>
				<td align="center">Cirebon, <?php echo date("d F Y"); ?></td>
			</tr>
			<tr>
				<td width="80%"></td>
				<td align="center">CEO CV. Tour Agent Fun Place</td>
			</tr>
			<tr>
				<td width="80%"></td>
				<td align="center">&nbsp;</td>
			</tr>
			<tr>
				<td width="80%"></td>
				<td align="center"><img src="../asset/dawi.png" width="30%"></td>
			</tr>
			<tr>
				<td width="80%"></td>
				<td align="center"><u>Anwar Mulya Ibrahim, S.P,M.kom</u></td>
			</tr>
		</table>
	</div>
	

</body>