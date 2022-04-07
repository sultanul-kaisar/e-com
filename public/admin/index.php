<?php require_once("../../resources/config.php") ?>

<?php include(TEMPLATE_BACK.DS. "header.php") ?>
<?php include(TEMPLATE_BACK.DS. "sidebar.php") ?>

       
		
		<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
			<div class="container-fluid">
				<!-- Add Order -->
				<div class="modal fade" id="addOrderModalside">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Add Event</h5>
								<button type="button" class="close" data-dismiss="modal"><span>&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form>
									<div class="form-group">
										<label class="text-black font-w500">Event Name</label>
										<input type="text" class="form-control">
									</div>
									<div class="form-group">
										<label class="text-black font-w500">Event Date</label>
										<input type="date" class="form-control">
									</div>
									<div class="form-group">
										<label class="text-black font-w500">Description</label>
										<input type="text" class="form-control">
									</div>
									<div class="form-group">
										<button type="button" class="btn btn-primary">Create</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xl-3 col-xxl-4">
						<div class="row">
							<div class="col-xl-12 col-md-6">
								<div class="card">
									<div class="card-header border-0 pb-0">
										<h4 class="fs-20">Best Selling</h4>
										<select class="form-control style-1 default-select ">
											<option>This Week</option>
											<option>Next Week</option>
											<option>This Month</option>
											<option>Next Month</option>
										</select>
									</div>
									<div class="card-body">
										<div id="donutChart"></div>
										<div class="d-flex justify-content-between mt-4">
											<div class="pr-2">
												<svg width="20" height="8" viewBox="0 0 20 8" fill="none" xmlns="http://www.w3.org/2000/svg">
													<rect width="20" height="8" rx="4" fill="#214BB8"/>
												</svg>
												<h4 class="fs-18 text-black mb-1 font-w600">21,512</h4>
												<span class="fs-14">Ticket Left</span>
											</div>
											<div class="pr-2">
												<svg width="20" height="8" viewBox="0 0 20 8" fill="none" xmlns="http://www.w3.org/2000/svg">
													<rect width="20" height="8" rx="4" fill="#FE634E"/>
												</svg>
												<h4 class="fs-18 text-black mb-1 font-w600">45,612</h4>
												<span class="fs-14">Ticket Sold</span>
											</div>
											<div class="">
												<svg width="20" height="8" viewBox="0 0 20 8" fill="none" xmlns="http://www.w3.org/2000/svg">
													<rect width="20" height="8" rx="4" fill="#45ADDA"/>
												</svg>
												<h4 class="fs-18 text-black mb-1 font-w600">275</h4>
												<span class="fs-14">Event Held</span>
											</div>
										</div>
									</div>
								</div>
							</div>
							
						</div>
					</div>
				</div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->

		<?php include(TEMPLATE_BACK.DS. "footer.php") ?>


        