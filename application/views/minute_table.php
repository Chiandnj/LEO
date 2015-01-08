<div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Meeting Minutes</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
  									<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
										<thead>
											<tr>
												<th>Date uploaded</th>
												<th>Title</th>
												<th>Description</th>
												<th>Download File</th>
												
												
											</tr>
										</thead>
										<tbody>
										<?php
										foreach ($file as $row){?>
										
										
						
											<tr class="odd gradeX">
												<td> <?php echo $row ['minute_date'];?></td>
												<td> <?php echo $row ['title'];?></td>
												<td><?php echo $row['description'];?></td>
												<td><a href="<?php echo base_url().$row['userfile']?>"><i class='icon-download'></i>Download</a></td>
												
												
												
												
												
											</tr>
											<?php
											}
											?>
							
										
											
											
										</tbody>
									</table>
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                        </div>
                        

                