<div class="flash message-succes alignCenter">
	<?php echo $this->Session->flash('good'); ?>
</div>
<div class="flash message-error alignCenter">
	<?php echo $this->Session->flash('bad'); ?>
</div>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<!-- Zero Configuration Table -->
			<div class="panel panel-default">
				<div class="panel-heading">
					<div class="row">
						<div class="col-md-12">
							<div class="col-md-6">Manage List Oder</div>
							<div class="col-md-6 alignRight">
								
							</div>
						</div>
					</div>
				</div>
				<div class="panel-body">
					<table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
						<col width="20%"></col>
						<col width="20%"></col>
						<col width="20%"></col>
						<col width="20%"></col>
						<col width="10%"></col>
						<col width="10%"></col>
						<thead>
							<tr>
							<th>Status</th>
								<th>Name</th>
								<th> Phone</th>
								<th>Address</th>
								<th>Pizza</th>
								<th>cheese</th>
								
								<th></th>
							</tr>
						</thead>
						<tfoot>
							<tr>
							<th>Status</th>
								<th>Name</th>
								<th> Phone</th>
								<th>Address</th>
								<th>Pizza</th>
								<th>cheese</th>
								
								<th></th>
							</tr>
						</tfoot>
						<tbody>
							<?php foreach ($posts as $post): ?>
								<tr>
								<td>
									 	<?php 
									 	if ($post ['Post'] ['status'] == 0){
									 		$status = 'Oder';}
									 		if ($post ['Post'] ['status'] == 1){
									 			$status = "Shipped but didn't pay money yet";}
									 			if ($post ['Post'] ['status'] == 2){
									 				$status = "Shipped and Paid Money";}
									 	
									 	echo $status; ?>
									</td>
									<td>
									 	<?php echo $post ['Post'] ['name']; ?>
									</td>
									<td>
									 	<?php echo $post ['Post'] ['phone']; ?>
									</td>
									<td>
									 	<?php echo $post ['Post'] ['address']; ?>
									</td>
									<td>
									 	<?php echo $post ['Post'] ['pizza']; ?>
									</td>
									<td>
									<?php 
									 	if ($post ['Post'] ['cheese'] == 0){
									 		$cheese = 'None';}
									 		if ($post ['Post'] ['cheese'] == 1){
									 			$cheese = 'Less cheese' ;}
									 			if ($post ['Post'] ['cheese'] == 2){
									 				$cheese ='Just enough cheese';}
									 				if ($post ['Post'] ['cheese'] == 3){
									 					$cheese ='Plenty of cheese';}
									 				
									 	echo $cheese; ?>
									</td>
									
				
									<td align="center">
										<div class="col-md-12">
											<div class="row">
												<a class="">
													<?php echo $this->Html->link (
														'<i class="fa fa-edit"></i> Edit',
														array (
															'action' => 'edit',
															$post ['Post'] ['id'] 
														),
														array(
															'escape' => FALSE
														)
													); ?>
												</a>
											</div>
											<div class="row">
												<a class="">
											 		<?php echo $this->Form->postLink (
											 			'<i class="fa fa-remove"></i> Delete',
											 			array (
															'action' => 'delete',
															$post ['Post'] ['id'] 
														), array (
															'escape' => FALSE,
															'confirm' => 'Are you sure delete?'
														)
													); ?>
												</a>
											</div>
										</div>
									</td>
								</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>