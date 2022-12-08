    <tr>

						<td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox1" name="options[]" value="<?php echo $row['id'] ?>">
								<label for="checkbox1"></label>
							</span>
						</td>
						<td><?php echo $row['id'] ?></td>
						<td><?php echo  $row['username']?></td>
						<td><?php echo $row['password'] ?></td>
						<?php
						if ($who == 1) {
						echo '<td>'.$row['fname'].' '.$row['lname'] .'</td>';
						?>
						<td>
						
							<a onclick="return confirm('are you sure!')" href="../action/delete.php?id=<?php echo $row['id'] ?>&table=<?php echo $table ?>" class="delete" ><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a> 
						</td>
						<?php
						}
						?>
						
					</tr>