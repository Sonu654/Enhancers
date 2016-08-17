<hr>
<div class="container">
    <?php echo form_open_multipart('Enhancers/Registration','class="form-inline"');?>
        <div class="row">
            <div class="col-sm-6">
                <div class="row">
                    <h3>Application for Registration</h3>
                </div>
                <div class="row note">
                    <p><b>Note: </b>please read the form carefully before filling it.</p>
                    <p>Attach all the required documents as mentioned in educational qualification.</p>
                    <p>Incomplete application will be rejected.</p>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <b>Form No.</b>
                    <input type="text" name="frm_no" class="form-control"  value="<?php echo $form_no + 1; ?>">
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
                    <input type="number" name="frm_age" class="form-control" id="age" require="require" readonly>
                    <p class="error" id="ageError"></p>
                    <br>
                    <p>(as in the certificate of 10th examination)</p>
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
                    <div class="dropdown form-group">
                        <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Category
                            <span class="caret"></span></button>
                        <ul class="dropdown-menu">


                            <script>
                                cat =<?php echo $cat; ?>;
                                for (i = 0; i < cat.length; i++) {
                                    document.write("<li><input type='checkbox' name=cat[] value='" + cat[i].cat_id + "'>" + cat[i].cat_name + "</li>");
                                }
                            </script>
                        </ul>
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <label for="nationality">Nationality :</label>
                    <script>
                        nation =<?php echo $nation; ?>;
                        for (i = 0; i < nation.length; i++)
                            document.write('<input type="radio" name="frm_nat" value="' + nation[i].nat_id + '" class="radio">' + nation[i].nationality + '&nbsp; &nbsp; &nbsp;');
                    </script>
                </div>
                <br>
                <div class="form-group">
                    <label for="M_status">Marital Status :</label>
                    <input type="radio" name="frm_mStatus" checked="checked" value="M" class="radio">Married
                    &nbsp; &nbsp; &nbsp
                    <input type="radio" name="frm_mStatus" value="U" class="radio">Unmarried
                </div>
            </div>
            <div class="col-sm-4">
                <img class="img-responsive passport" id="passport">
                <div class="form-group">
                    <label for="image">upload image :</label>
                    <input type="file" name="frm_img" class="form-control" id="imgURL" required="required">
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
                <input type="checkbox" class="checkbox" id="c_s_p"><label>Permanent Address is same as Correspondence Address.</label>
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
                        <td><input type="text" name="parent[0][parent_name]" class="form-control"></td>
                        <td><input type="text" name="parent[0][occupation]" class="form-control"></td>
                        <td><input type="number" name="parent[0][phone]" class="form-control"></td>
                        <td><input type="number" name="parent[0][mob]" class="form-control"></td>
                        <td><input type="email" name="parent[0][mail]" class="form-control"></td>
                    </tr>
                    <tr>
                        <td><input type="text" name="parent[1][parent_name]" class="form-control"></td>
                        <td><input type="text" name="parent[1][occupation]" class="form-control"></td>
                        <td><input type="number" name="parent[1][phone]" class="form-control"></td>
                        <td><input type="number" name="parent[1][mob]" class="form-control"></td>
                        <td><input type="email" name="parent[1][mail]" class="form-control"></td>
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
                        <th>Name of the School / Collage and Board / University</th>
                        <th>Year of Passing</th>
                        <th>Specialization</th>
                        <th>Marks Obtained</th>
                        <th>Maximum Marks</th>
                        <th>% of Marks</th>
                    </tr>
                    <tr>
                        <th><input type="hidden" name="exam[0][edu_id]" value="e01">10th</th>
                        <td><input type="text" name="exam[0][university]" class="form-control"></td>
                        <td><input type="text" name="exam[0][year]" class="form-control"></td>
                        <td><input type="text" name="exam[0][sp_id]" class="form-control" readonly></td>
                        <td><input type="number" name="exam[0][marks_obtained]" class="form-control" id="h_obt"></td>
                        <td><input type="number" name="exam[0][marks_max]" class="form-control" id="h_max"></td>
                        <td><input type="number" name="exam[0][per_marks]" class="form-control" id="h_per" readonly="readonly"></td>
                    </tr>
                    <tr>
                        <th><input type="hidden" name="exam[1][edu_id]" value="e02">12th</th>
                        <td><input type="text" name="exam[1][university]" class="form-control"></td>
                        <td><input type="text" name="exam[1][year]" class="form-control"></td>
                        <td>
                            <select class="form-control" name="exam[1][sp_id]">
                                <option>Select</option>
                                <script>
                                    sp =<?php echo $ssc; ?>;
                                    for (i = 0; i < sp.length; i++)
                                        document.write('<option value="' + sp[i].sp_id + '">' + sp[i].sp_name + '</option>');
                                </script>
                            </select></td>
                        <td><input type="number" name="exam[1][marks_obtained]" class="form-control" id="s_obt"></td>
                        <td><input type="number" name="exam[1][marks_max]" class="form-control" id="s_max"> </td>
                        <td><input type="number" name="exam[1][per_marks]" class="form-control" id="s_per" readonly="readonly"></td>
                    </tr>
                    <tr>
                        <th><input type="hidden" name="exam[2][edu_id]" value="e03">Graduation</th>
                        <td><input type="text" name="exam[2][university]" class="form-control"></td>
                        <td><input type="text" name="exam[2][year]" class="form-control"></td>
                        <td><select class="form-control" name="exam[2][sp_id]">
                                <option>Select</option>
                                <script>
                                    sp =<?php echo $ug; ?>;
                                    for (i = 0; i < sp.length; i++)
                                        document.write('<option value="' + sp[i].sp_id + '">' + sp[i].sp_name + '</option>');
                                </script>
                            </select>
                        </td>
                        <td><input type="number" name="exam[2][marks_obtained]" class="form-control" id="ug_obt"></td>
                        <td><input type="number" name="exam[2][marks_max]" class="form-control" id="ug_max"></td>
                        <td><input type="number" name="exam[2][per_marks]" class="form-control" id="ug_per" readonly="readonly"></td>
                    </tr>
                    <tr>
                        <th><input type="hidden" name="exam[3][edu_id]" value="e04">Post Graduation</th>
                        <td><input type="text" name="exam[3][university]" class="form-control"></td>
                        <td><input type="text" name="exam[3][year]" class="form-control"></td>
                        <td><select class="form-control" name="exam[3][sp_id]">
                                <option>Select</option>
                                <script>
                                    sp =<?php echo $pg; ?>;
                                    for (i = 0; i < sp.length; i++)
                                        document.write('<option value="' + sp[i].sp_id + '">' + sp[i].sp_name + '</option>');
                                </script>
                            </select>
                        </td>
                        <td><input type="number" name="exam[3][marks_obtained]" class="form-control" id="pg_obt"></td>
                        <td><input type="number" name="exam[3][marks_max]" class="form-control" id="pg_max"></td>
                        <td><input type="number" name="exam[3][per_marks]" class="form-control"id="pg_per" readonly="readonly"></td>
                    </tr>
                    <tr>
                        <th><input type="hidden" name="exam[4][edu_id]" value="e05">Any other Qualification</th>
                        <td><input type="text" name="exam[4][university]" class="form-control"></td>
                        <td><input type="text" name="exam[4][year]" class="form-control"></td>
                        <td><input type="text" name="exam[4][sp_id]" class="form-control" readonly="readonly"></td>
                        <td><input type="number" name="exam[4][marks_obtained]" class="form-control" id='ot_obt'></td>
                        <td><input type="number" name="exam[4][marks_max]" class="form-control" id="ot_max"></td>
                        <td><input type="number" name="exam[4][per_marks]" class="form-control" id="ot_per" readonly="readonly"></td>
                    </tr>
                </table>
            </div>
        </div>
        <!---->
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