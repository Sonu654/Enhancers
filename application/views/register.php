<hr>
<div class="container">
	<form class="form-inline" method="post" action="<?php echo site_url('Enhancers/Registration'); ?>">
		<div class="row">
			<div class="col-sm-6">
				<div class="row">
					<h3>Application for Registration</h3>
				</div>
				<div class="row note">
					<p><b>Note: </b>please read the form carefully before filling it.</p>
					<p>Attach all the required documents as mentationd in educational qualifilication.</p>
					<p>Incomplete application will be rejected.</p>
				</div>
			</div>
			<div class="col-sm-6">
					<div class="form-group">
						<b>Form No.</b>
						<input type="text" name="frm_no" class="form-control" readonly="readonly" value="<?php echo $form_no+1; ?>">
					</div>
					<br>
					<div class="form-group" >
						<b>Registration No.</b>
						<input type="text" name="reg_no" readonly="readonly" class="form-control">
					</div>
			</div>
		</div>
		<div class="row details">
			<h4>(A)Personal Details</h4>
			<div class="col-sm-8">
				<div class="form-group">
					<label for="name">Name (Mr./Ms.) :</label>
					<input type="text" name="frm_name" class="form-control" required="required">
				</div>
				<br>
				<div class="form-group">
					<label for="dob">Date of Birth :</label>
					<input type="date" name="frm_dob" class="form-control" id="dob" required="required">
				</div>
				<br>
				<div class="form-group">
					<label for="age">Age :</label>
					<input type="number" name="frm_age" class="form-control" id="age">
					<br>
						<p>(as in the certificate of 10th examnation)</p>
				</div>
				<br>
				<div class="form-group">
					<label for="gender">Gender (M/F) :</label>
					<input type="radio" name="frm_gender" checked="checked" value="M" class="radio">Male
					<input type="radio" name="frm_gender" value="F" class="radio">Female
				</div>
				<br>
				<div class="form-group">
					<label for="category">category :</label>
					<div class="dropdown">
						 <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Category
  							<span class="caret"></span></button>
 							 <ul class="dropdown-menu">
    
 
					<script>
						cat=<?php echo $cat; ?>;
						for(i=0;i<cat.length;i++){
							document.write("<li><input type='checkbox' name=cat[] value='"+cat[i].cat_id+"'>"+cat[i].cat_name+"</li>");
						}
					</script>
					 </ul>
					</div>
				</div>
				<br>
				<div class="form-group">
					<label for="nationality">Nationality :</label>
					<script>
						nation=<?php echo $nation; ?>;
						for(i=0;i<nation.length;i++)
							document.write('<input type="radio" name="frm_nat" value="'+nation[i].nat_id+'" class="radio">'+nation[i].nationality);
					</script>
				</div>
				<br>
				<div class="form-group">
					<label for="M_status">Marital Status :</label>
					<input type="radio" name="frm_mStatus" checked="checked" value="M" class="radio">Marid
					<input type="radio" name="frm_mStatus" value="U" class="radio">Unmarid
				</div>
			</div>
			<div class="col-sm-4">
				<img class="img-responsive passport" id="passport">
				<div class="form-group">
					<label for="image">upload image :</label>
					<input type="file" name="frm_img" class="form-control" id="imgURL">
				</div>
			</div>
		</div>
		<div class="row details">
			<h4>(B) Contact Details</h4>
			<div class="form-group">
					<label for="correspondence">Correspondence Address:</label>
					<input type="text" name="frm_corrspnd" class="form-control" id="c_add">
			</div>
			<br>
			<div class="form-group">
					<label for="phone">Phone No. :</label>
					<input type="number" name="frm_c_phn" class="form-control" id="c_ph">
			</div>
			<div class="form-group">
					<label for="mobile">Mobile No. :</label>
					<input type="text" name="frm_c_mob" class="form-control" id="c_mob">
			</div>
			<br>
			<div class="form-group">
				<input type="checkbox" class="checkbox" id="c_s_p"><label>Permanent Address is same as Corresspond Address.</label>
			</div>
			<br>
			
			<div class="form-group">
					<label for="permanent">Permanent Address :</label>
					<input type="text" name="frm_per" class="form-control" id="p_add">
			</div>
			<br/>
			<div class="form-group">
					<label for="phone">Phone No. :</label>
					<input type="number" name="frm_p_phn" class="form-control" id="p_ph">
			</div>
			<div class="form-group">
					<label for="mobile">Mobile No. :</label>
					<input type="text" name="frm_p_mob" class="form-control" id="p_mob">
			</div>
			<br>
			<div class="form-group">
				<label for="email">Email id</label>
				<input type="email" name="frm_mail" class="form-control">
			</div>
			
		</div>
		<div class="row details">
			<h4> (C) Family Details:</h4>
			<div class="table-responsive">
				<table class="table table-striped">
					<tr>
						<th>Parent's Name</th>
						<th>Occupation</th>
						<th>Phone No.</th>
						<th>Mobile No.</th>
						<th>Mail ID</th>
					</tr>
					<tr>
						<td><input type="text" name="p1_name" class="form-control"></td>
						<td><input type="text" name="p1_occ" class="form-control"></td>
						<td><input type="number" name="p1_phn" class="form-control"></td>
						<td><input type="number" name="p1_mobile" class="form-control"></td>
						<td><input type="email" name="p1_mail" class="form-control"></td>
					</tr>
					<tr>
						<td><input type="text" name="p2_name" class="form-control"></td>
						<td><input type="text" name="p2_occ" class="form-control"></td>
						<td><input type="number" name="p2_phn" class="form-control"></td>
						<td><input type="number" name="p2_mobile" class="form-control"></td>
						<td><input type="email" name="p2_mail" class="form-control"></td>
					</tr>
				</table>
			</div>
		</div>
		<div class="row details">
			<h4> (D) Educational Details:</h4>
			<div class="table-responsive">
				<table class="table table-striped">
					<tr>
						<th>Examination Passed</th>
						<th>Name of the School / Collage and Bord / University</th>
						<th>Year of Passing</th>
						<th>Specialization</th>
						<th>Marks Obtained</th>
						<th>Maximum Marks</th>
						<th>% of Marks</th>
					</tr>
					<tr>
						<th><input type="hidden" name="exam" value="e01">10th</th>
						<td><input type="text" name="hsc_name" class="form-control"></td>
						<td><input type="text" name="hsc_yr" class="form-control"></td>
						<td><input type="text" name="hsc_sub" class="form-control" readonly></td>
						<td><input type="number" name="hsc_marks" class="form-control" id="h_obt"></td>
						<td><input type="number" name="hsc_max" class="form-control" id="h_max"></td>
						<td><input type="number" name="hsc_per" class="form-control" id="h_per"></td>
					</tr>
					<tr>
						<th><input type="hidden" name="exam" value="e02">12th</th>
						<td><input type="text" name="ssc_name" class="form-control"></td>
						<td><input type="text" name="ssc_yr" class="form-control"></td>
						<td>
							<select class="form-control">
								<option>Select</option>
							<script>
								sp=<?php echo $ssc;?>;
								for(i=0;i<sp.length;i++)
								document.write('<option value="'+sp[i].sp_id+'">'+sp[i].sp_name+'</option>');
							</script>
						</select></td>
						<td><input type="number" name="ssc_marks" class="form-control" id="s_obt"></td>
						<td><input type="number" name="ssc_max" class="form-control" id="s_max"> </td>
						<td><input type="number" name="ssc_per" class="form-control" id="s_per"></td>
					</tr>
					<tr>
						<th><input type="hidden" name="exam" value="e03">Graduation</th>
						<td><input type="text" name="ug_name" class="form-control"></td>
						<td><input type="text" name="ug_yr" class="form-control"></td>
						<td><select class="form-control">
								<option>Select</option>
							<script>
								sp=<?php echo $ug;?>;
								for(i=0;i<sp.length;i++)
								document.write('<option value="'+sp[i].sp_id+'">'+sp[i].sp_name+'</option>');
							</script></td>
						<td><input type="number" name="ug_marks" class="form-control" id="ug_obt"></td>
						<td><input type="number" name="ug_max" class="form-control" id="ug_max"></td>
						<td><input type="number" name="ug_per" class="form-control" id="ug_per"></td>
					</tr>
					<tr>
						<th><input type="hidden" name="exam" value="e04">Post Graduation</th>
						<td><input type="text" name="pg_name" class="form-control"></td>
						<td><input type="text" name="pg_yr" class="form-control"></td>
						<td><select class="form-control">
								<option>Select</option>
							<script>
								sp=<?php echo $pgc;?>;
								for(i=0;i<sp.length;i++)
								document.write('<option value="'+sp[i].sp_id+'">'+sp[i].sp_name+'</option>');
							</script>
						</td>
						<td><input type="number" name="pg_marks" class="form-control" id="pg_obt"></td>
						<td><input type="number" name="pg_max" class="form-control" id="pg_max"></td>
						<td><input type="number" name="pg_per" class="form-control"id="pg_per"></td>
					</tr>
					<tr>
						<th><input type="hidden" name="exam" value="e05">Any other Qualification</th>
						<td><input type="text" name="ot_name" class="form-control"></td>
						<td><input type="text" name="ot_yr" class="form-control"></td>
						<td><input type="text" name="ot_sub" class="form-control"></td>
						<td><input type="number" name="ot_marks" class="form-control" id='ot_obt'></td>
						<td><input type="number" name="ot_max" class="form-control" id="ot_max"></td>
						<td><input type="number" name="ot_per" class="form-control" id="ot_per"></td>
					</tr>
				</table>
			</div>
		</div>
			<!--	<div class="row details">
			<h4> (E) Payment Details:</h4>
			<div class="table-responsive">
				<table class="table table-striped">
					<tr>
						<th>Amount Quaterelay (Rs. 500 only) </th>
						<th>Amount Half Yearly (Rs. 1000 only)</th>
						<th>Amount Yearly (Rs. 2000 only)</th>
						<th>By Cash</th>
						<th>By Chaque</th>
					</tr>
					<tr>
						<td><input type="checkbox" name="amount" class="checkbox"></td>
						<td><input type="checkbox" name="amount" class="checkbox"></td>
						<td><input type="checkbox" name="amount" class="checkbox"></td>
						<td><input type="checkbox" name="mod" class="checkbox"></td>
						<td><input type="checkbox" name="mod" class="checkbox">
							<input type="hidden" name="cheque_no" placeholder="Cheque No" class="form-control">
						</td>
					</tr>
				</table>
			</div>
		</div>-->
		<div class="row">
			<div class="form-group" style="float:right">
				<input class="btn btn-success" value="Next" type="submit">
			</div>

			<div class="form-group">
				<input class="btn btn-danger" value="Reset" type="reset">
			</div>
		</div>
	</form>
</div>