
				<tbody>
					<?php
                    include "../koneksi.php";
					session_start();
					$queryuser = mysqli_query ($konek, "SELECT NIP FROM dosen WHERE Id_User=".$_SESSION["Id_User"]);
					$user = mysqli_fetch_array ($queryuser);
					$NIP = $user["NIP"];
						$querymhs = mysqli_query ($konek, "SELECT NIM, Nama_Mahasiswa FROM mahasiswa WHERE angkatan=2017 and NIP_dosen=".$NIP. "");
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
										<a href='#' class='open_lihat' id='$mhs[NIM]'>Lihat</a>
										</center>
									</td>
								</tr>";

						}
					include('script_lihat.php');
					?>
				</tbody>