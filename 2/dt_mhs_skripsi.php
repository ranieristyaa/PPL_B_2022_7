<thead>
					<tr>
						<th>NIM</th>
						<th>Status</th>
						<th>Tanggal Sidang</th>
						<th>Nilai</th>
						<th>Lama Studi</th>
						<th>Scan</th>
                        <th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
					 
					 $queryuser = mysqli_query ($konek, "SELECT NIP FROM dosen WHERE Id_User=".$_SESSION["Id_User"]);
					 $user = mysqli_fetch_array ($queryuser);
					 $NIP = $user["NIP"];
						$querymhs = mysqli_query ($konek, "SELECT s.NIM, s.status, s.tgl_sidang, s.nilai, s.lama_studi, s.scan FROM skripsi s inner join mahasiswa m on s.NIM = m.NIM where m.NIP_dosen=".$NIP. "");
						if($querymhs == false){
							die ("Terjadi Kesalahan : ". mysqli_error($konek));
						}
							
						while ($mhs = mysqli_fetch_array ($querymhs)){
							
							echo "
								<tr>
									<td>$mhs[NIM]</td>
									<td>$mhs[status]</td>
									<td>$mhs[tgl_sidang]</td>
									<td>$mhs[nilai]</td>
									<td>$mhs[lama_studi]</td>
									<td>$mhs[scan]</td>
								";
                            echo "
                        
                                <td>
								<center>
                                    <a href='#' class='open_modal' id='$mhs[NIM]'>Edit</a> |
                                    <a href='#' onClick='confirm_delete(\"mhs_skripsi_delete.php?NIM=$mhs[NIM]\")'>Delete</a>
									</center>
									</td>
                            </tr>";
						}
					?>
				</tbody>