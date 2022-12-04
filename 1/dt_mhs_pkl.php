<thead>
					<tr>
						<th>NIM</th>
						<th>Status</th>
						<th>Nilai</th>
						<th>Scan</th>
                        <th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$querymhs = mysqli_query ($konek, "SELECT nim, status, nilai, scan FROM pkl");
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
                                    <a href='#' class='open_modal' id='$mhs[nim]'>Edit</a> |
                                    <a href='#' onClick='confirm_delete(\"mhs_pkl_delete.php?nim=$mhs[nim]\")'>Delete</a>
                                </td>
                            </tr>";
						}
					?>
				</tbody>