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
						$querymhs = mysqli_query ($konek, "SELECT NIM, status, tgl_sidang, nilai, lama_studi, scan FROM skripsi");
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
                                    <a href='#' class='open_modal' id='$mhs[NIM]'>Edit</a> |
                                    <a href='#' onClick='confirm_delete(\"mhs_skripsi_delete.php?NIM=$mhs[NIM]\")'>Delete</a>
                                </td>
                            </tr>";
						}
					?>
				</tbody>