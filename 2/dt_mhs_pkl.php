<thead>
					<tr>
						<th>NIM</th>
						<th>Status</th>
						<th>Nilai</th>
						<th>Scan</th>
                        <th>Actions</th>
					</tr>
				</thead>
				<tbody>
					<?php
					 
					 $queryuser = mysqli_query ($konek, "SELECT NIP FROM dosen WHERE Id_User=".$_SESSION["Id_User"]);
					 $user = mysqli_fetch_array ($queryuser);
					 $NIP = $user["NIP"];
						$querymhs = mysqli_query ($konek, "SELECT p.nim, p.status, p.nilai, p.scan FROM pkl p inner join mahasiswa m on p.nim = m.NIM where m.NIP_dosen=".$NIP. "");
						if($querymhs == false){
							die ("Terjadi Kesalahan : ". mysqli_error($konek));
						}
							
						while ($mhs = mysqli_fetch_array ($querymhs)){
							
							echo "
								<tr>
									<td>$mhs[nim]</td>
									<td>$mhs[status]</td>
									<td>$mhs[nilai]</td>
									<td>$mhs[scan]</td>
								";
								echo "
                        
                                <td>
									<center>
                                    <a href='#' class='open_modal' id='$mhs[nim]'>Edit</a> |
                                    <a href='#' onClick='confirm_delete(\"mhs_skripsi_delete.php?NIM=$mhs[nim]\")'>Delete</a>
									</center>
                                </td>
                            </tr>";
						}
					?>
				</tbody>