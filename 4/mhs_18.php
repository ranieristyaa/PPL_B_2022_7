
				<tbody>
					<?php
                    include "../koneksi.php";
					session_start();
					
						$querymhs = mysqli_query ($konek, "SELECT NIM, Nama_Mahasiswa FROM mahasiswa WHERE angkatan=2018 ");
						if($querymhs == false){
							die ("Terjadi Kesalahan : ". mysqli_error($konek));
						}
							
						while ($mhs = mysqli_fetch_array ($querymhs)){
							
							echo "
								<tr>
                                <td style=\"width: 348px;\">$mhs[NIM]</td>
                                <td style=\"width: 594px;\">$mhs[Nama_Mahasiswa]</td>
									<td>
										<center>
										<a href='#' class='open_lihat' id='$mhs[NIM]'>Lihat Detail</a>
										</center>
									</td>
								</tr>";

						}
					include('script_lihat.php');
					?>
				</tbody>