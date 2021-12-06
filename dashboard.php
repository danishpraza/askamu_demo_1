


<div id="layoutSidenav_content">
	<main>
	
		
		
		<!-- Main page content-->
		<div class="container-xl px-4 mt-3">

			<div class="row">

				<div class="col-xxl-4 col-xl-12 mb-4">
					<div class="card h-100 bg_black_light_1">
						<div class="card-body h-100 p-2">
							<div class="row">
								<div class="col-md-6">
									<h5 class="text-white">Hi, Danish Welcome Back</h5>
									<h6 class="text-muted">dddddddddddd</h6>
								</div>
								<div class="col-md-6" align="right">
									<div class="btn-group">
										<div class="dropdown no-caret">
											<button class="btn btn-light btn-sm dropdown-toggle text-capitalize" id="dropdownMenuButton" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											Settings &nbsp; <i class="fas fa-cogs"></i>
											</button>
											<div class="dropdown-menu dropdown-menu-end animated--fade-in-up" aria-labelledby="dropdownMenuButton">
											<a class="dropdown-item" href="#!">Account Setting</a>
											<a class="dropdown-item" href="#!">Website Setting</a>
											</div>
										</div>
									</div><!-- btn-group -->
								</div>
							</div>
						</div>
					</div>
				</div>
				
				
				<div class="col-xl-5 col-xxl-12">
					<div class="card mb-4 bg_black_light_1">
						<div class="card-header text-white pt-1 pb-2 border-bottom">New Users</div>
						<div class="card-body p-2">
							<?php
							for($i=1; $i<=9; $i++)
							{
							?>
							<div class="d-flex align-items-center justify-content-between mb-4">
								<div class="d-flex align-items-center flex-shrink-0 me-3">

									<div class="avatar avatar-online avatar-xl me-3 bg-gray-200 ">
										<img class="avatar-img img-fluid" src="assets/img/illustrations/profiles/profile-5.png" alt="" />
									</div>
									<div class="d-flex flex-column fw-bold">
										<a class="text-white line-height-normal mb-1" href="#!">
											Georgina Findlay
										</a>
										<div class="small text-muted line-height-normal">+91 9304223650</div>
									</div>
								</div>
								<div class="dropdown no-caret">

									<span><i class="text-muted">12:30 PM</i></span>

									<button class="btn btn-transparent-dark btn-icon dropdown-toggle shadow-0 text-white" id="dropdownPeople5" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<i class="fas fa-ellipsis-v text-white"></i>
									</button>
									<div class="dropdown-menu dropdown-menu-end animated--fade-in-up" aria-labelledby="dropdownPeople5">
										<a class="dropdown-item" href="#!">Action</a>
										<a class="dropdown-item" href="#!">Another action</a>
										<a class="dropdown-item" href="#!">Something else here</a>
									</div>
								</div><!--// d-flex align-items-center -->
							</div><!-- d-flex  -->
							<?php
							}
							?>
						</div><!--// card-body -->

						<div class="card-footer position-relative border-top">
							<a class="stretched-link text-white" href="#!">
								<div class="text-xs d-flex align-items-center justify-content-between">
									View More Reports
									<i class="fas fa-long-arrow-alt-right"></i>
								</div>
							</a>
						</div>

					</div><!--// card -->
				</div><!--// col-xl-5 -->
				
				
				<div class="col-xl-7 col-xxl-12">
					<div class="card mb-4 bg_black_light_1">
						<div class="card-header text-white pt-1 pb-2 border-bottom">New Service Listing</div>
						<div class="card-body pt-2 p-0 pb-3">
							<table id="datatablesSimple" class="table-sm">
								<thead class="text-white">
									<tr>
										<th>Sno</th>
										<th>Title</th>
										<th>Status</th>
										<th>Plan</th>
										<th>Actions</th>
									</tr>
								</thead>
								<tfoot class="text-white">
									<tr>
										<th>Sno</th>
										<th>Title</th>
										<th>Status</th>
										<th>Plan</th>
										<th>Actions</th>
									</tr>
								</tfoot>
								<tbody class="text-white">
									<?php
									for($i=1; $i<=20; $i++)
									{
									?>
									<tr>
										<td>Tiger Nixon</td>
										<td>System Architect</td>
										<td>Edinburgh</td>
										<td><div class="badge bg-primary text-white rounded-pill">Full-time</div></td>
										<td align="right">
										<button class="btn btn-datatable btn-icon btn-transparent-dark me-2 text-white">
											<i class="fas fa-chevron-circle-right text-white"></i>
										</button>
										</td>
									</tr>
									<?php
									}
									?>
								</tbody>
							</table>
						</div><!--// card-body -->

						<div class="card-footer position-relative border-top">
							<a class="stretched-link text-white" href="#!">
								<div class="text-xs d-flex align-items-center justify-content-between">
									View More Reports
									<i class="fas fa-long-arrow-alt-right"></i>
								</div>
							</a>
						</div>

					</div><!--// card -->
				</div><!--// col-xl-7 -->
				
				
				
				<div class="col-xl-8 mt-3">

					<div class="accordion" id="AccordionExample01">
	
						<div class="accordion-item bg_black_light_1">
							<h2 class="accordion-header bg_black_light_1" id="headingOne">
								<button class="accordion-button bg_black_light_1 text-white" type="button" data-mdb-toggle="collapse" data-mdb-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
									<strong>Today's Status </strong>
								</button>
							</h2>
							<div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-mdb-parent="#AccordionExample01">
								<div class="accordion-body">
								
								</div><!--// accordion-body --->
							</div><!--// collapseOne -->
						</div><!--// accordion-item -->
						
						
						<div class="accordion-item bg_black_light_1">
							<h2 class="accordion-header" id="headingTwo">
								<button class="accordion-button collapsed bg_black_light_1 text-white" type="button" data-mdb-toggle="collapse" data-mdb-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"
								>
								<strong>Announcement</strong>
	
								</button>
							</h2>
							<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-mdb-parent="#AccordionExample01">
								<div class="accordion-body">
								
								</div><!--// accordion-body -->
							</div><!--// collapseTwo -->
						</div><!--// accordion-item -->
						
						
						<div class="accordion-item bg_black_light_1">
							<h2 class="accordion-header" id="headingThree">
								<button class="accordion-button collapsed bg_black_light_1 text-white" type="button" data-mdb-toggle="collapse" data-mdb-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
									<strong>Dashboard</strong>
								</button>
							</h2>
							<div id="collapseThree" class="accordion-collapse collapse show" aria-labelledby="headingThree" data-mdb-parent="#AccordionExample01">
								<div class="accordion-body pb-0 pt-0">
									<div class="row">
										<?php
										for($i=1; $i<=5; $i++)
										{
										?>
										<div class="col-md-4 p-1 mb-1">
											<div class="card bg-indigo text-white h-100">
												<div class="card-body">
													<div class="d-flex justify-content-between align-items-center">
														<div class="me-3">
															<div class="text-white-75 small">Users</div>
															<div class="text-lg fw-bold">5454</div>
														</div>
														<i class="fas fa-users feather-xl text-white-50"></i>
													</div>
													
												</div>
												<div class="card-footer d-flex align-items-center justify-content-between small pt-1 pb-1">
													<a class="text-white stretched-link" href="#!">View Report</a>
													<div class="text-white"><i class="fas fa-angle-right"></i></div>
												</div>
											</div>
										</div>
										<?php
										}
										?>
									
									</div><!--// row -->
								</div><!--// accordion-body -->
							</div><!--// collapseThree -->
						</div><!--// accordion-item -->
						
	
					</div><!--// accordion -->
					
				
				</div><!--// col-xl-8-->
				
				
				<div class="col-xl-4 mt-4">
					<div class="card bg_black_light_1">
						<div class="card-header p-2 text-white"><i class="fas fa-circle fa-sm me-1 text-green"></i>Live Report</div>

						 <div class="card bg-green border-0 mb-2">
							<div class="card-body">
								<h5 class="text-white">Active Users</h5>
								<div class="mb-4">
									<span class="display-6 text-white">
										<strong>351531 M</strong>
									</span>
									<br>
									<span class="text-white-50"><em>6416531231</em></span>
								</div>
								<div class="progress bg-white-25 rounded-pill" style="height: 0.5rem">
									<div class="progress-bar bg-white w-75 rounded-pill" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
						</div>	

						 <div class="card bg-green border-0 mb-2">
							<div class="card-body">
								<h5 class="text-white">Online Users</h5>
								<div class="mb-4">
									<span class="display-6 text-white">
										<strong>351531 M</strong>
									</span>
									<br>
									<span class="text-white-50"><em>6416531231</em></span>
								</div>
								<div class="progress bg-white-25 rounded-pill" style="height: 0.5rem">
									<div class="progress-bar bg-white w-75 rounded-pill" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
						</div>	
						<div class="card-footer position-relative border-top-0">
						<a class="stretched-link" href="#!">
						<div class="text-xs d-flex align-items-center justify-content-between">
						View More Reports
						<i class="fas fa-long-arrow-alt-right"></i>
						</div>
						</a>
						</div>
					</div><!--// card -->		
				</div><!--// col-xl-4 -->
					
			</div>		
			</div>
			
	</main>
	
	
</div><!--// layoutSidenav_content -->
