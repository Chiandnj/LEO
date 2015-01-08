<div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Withdrawals DataTable</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
  									<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
										<thead>
											<tr>
												<th>Date</th>
												<th>Bank/Account.No</th>
												<th>Amount</th>
												<th>Reasons</th>
												
											</tr>
										</thead>
										<tbody>
										<?php
										foreach ($withdrawal as $row){?>
										
										
						
											<tr class="odd gradeX">
												<td> <?php echo $row ['withdrawal_date'];?></td>
												<td><?php echo $row['withdrawal_bank'];?></td>
												<td><?php echo $row ['withdrawal_amount'];?></td>
												<td> <?php echo $row['withdrawal_reason'];?></td>
												
												
												
											</tr>
											<?php
											}
											?>
							
										
											
											<tr class="odd gradeX">
												<td colspan="3"><strong>Total</strong></td>
												<td><?php echo $total;?></td>
											</tr>
										</tbody>
									</table>
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                        </div>
                        

                