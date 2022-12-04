<thead>
					<tr>
						<th>NIM</th>
						<th>Mahasiswa</th>
						<th>Action</th>
					</tr>
				</thead>	
				<tbody>
					<?php
					include "../koneksi.php";
                   
					$queryuser = mysqli_query ($konek, "SELECT NIP FROM dosen WHERE Id_User=".$_SESSION["Id_User"]);
					$user = mysqli_fetch_array ($queryuser);
					$NIP = $user["NIP"];
						$querymhs = mysqli_query ($konek, "SELECT m.NIM, m.Nama_Mahasiswa FROM mahasiswa m INNER JOIN irs i ON m.NIM=i.NIM WHERE NIP_dosen=".$NIP. "");
						if($querymhs == false){
							die ("Terjadi Kesalahan : ". mysqli_error($konek));
						}
							
						while ($mhs = mysqli_fetch_array ($querymhs)){
							
							echo "
								<tr>
									<td>$mhs[NIM]</td>
									<td>$mhs[Nama_Mahasiswa]</td>
									<td>
										<center>
										<a href='#' class='open_detail' id='$mhs[NIM]'>Detail</a> ||
										<a href='#' onClick='confirm_verif(\"verif.php?NIM=$mhs[NIM]\")'>Verifikasi</a>
										</center>
									</td>
								</tr>";
						}
					?>
				</tbody>