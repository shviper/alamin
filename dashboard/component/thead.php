					<?php
	
					$who = $_SESSION["who"];
					if ($who == 1) {
						echo '<div class="col-sm-6">
						
						<a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Delete</span></a>						
					</div>';
					}else {
						echo '';
					}
					?>
				</div>
			</div>
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>
							<span class="custom-checkbox">
								<input type="checkbox" id="selectAll">
								<label for="selectAll"></label>
							</span>
						</th>
						<th>Id</th>
						<th>Email</th>
						<th>Password</th>
						<?php
						if ($who == 1) {
						echo '<th>Hacker Name</th>
						<th>Actions</th>';
						}
						?>
						
					</tr>
				</thead>