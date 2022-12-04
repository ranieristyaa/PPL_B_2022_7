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
                   
						$querymhs = mysqli_query ($konek, "SELECT NIM, Nama_Mahasiswa FROM mahasiswa");
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
										<a href='#' class='open_lihat' id='$mhs[NIM]'>Lihat Detail</a>
										
										</center>
									</td>
								</tr>";
						}
					?>
				</tbody>