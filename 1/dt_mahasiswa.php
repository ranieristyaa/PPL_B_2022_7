				<thead>
					<tr>
						<th>NIM</th>
						<th>Mahasiswa</th>
						<th>Tanggal Lahir</th>
						<th>Jenis Kelamin</th>
						
						<th>Angkatan</th>
						<th>NIP Dosen Wali</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$querymhs = mysqli_query ($konek, "SELECT * FROM mahasiswa");
						if($querymhs == false){
							die ("Terjadi Kesalahan : ". mysqli_error($konek));
						}
							
						while ($mhs = mysqli_fetch_array ($querymhs)){
							
							echo "
								<tr>
									<td>$mhs[NIM]</td>
									<td>$mhs[Nama_Mahasiswa]</td>
									<td>$mhs[Tanggal_Lahir]</td>
									<td>
								";
									if($mhs["JK"] == "L"){
										echo "Laki - laki";
									}
									else{
										echo "Perempuan";
									}
							echo "
									</td>
					
									<td>$mhs[angkatan]</td>
									<td>$mhs[NIP_dosen]</td>
									<td>
										<a href='#' class='open_modal' id='$mhs[NIM]'>Edit</a> |
										<a href='#' onClick='confirm_delete(\"mahasiswa_delete.php?NIM=$mhs[NIM]\")'>Delete</a>
									</td>
								</tr>";
						}
					?>
				</tbody>