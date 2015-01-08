<div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Expenses DataTable</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
  									<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
										<thead>
											<tr>
												<th>Date</th>
												<th>Expense Ref.no</th>
												<th>Bank/Account.No</th>
												<th>Description</th>
												<th>Amount</th>
											
												
												
											</tr>
										</thead>
										<tbody>
										<?php
										foreach ($expense as $row){?>
										
										
						
											<tr class="odd gradeX">
												<td> <?php echo $row ['expense_date'];?></td>
												<td><?php echo $row['expense_ref'];?></td>
												<td> <?php echo $row['expense_bank'];?></td>
												<td><?php echo $row ['expense_description'];?></td>
												<td> <?php echo $row['expense_amount'];?></td>
												
												
												
												
												
											</tr>
											<?php
											}
											?>
							
										
											
											<tr class="odd gradeX">
												<td colspan="4"><strong>Total</strong></td>
												<td><?php echo $total;?></td>
											</tr>
										</tbody>
									</table>
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                        </div>