<div class="container">
    <div class="row">
        <div class="col-sm-2">
        </div>
        <div class="col-sm-10">
            <div class="row details">
                <div class="col-sm-3"></div>
                <div class="col-sm-5" style="text-align: center">
                    <h4>Enhancers Student Registration Recept </h4>
                </div>
                <div class="col-sm-4"></div>
            </div>
            <div class="row details">
                <div class="col-sm-8">
                    <label>Form No: </label>&nbsp;<?php echo $form_no; ?>
                    <br/>
                    <label>Student Name: </label>&nbsp; <?php
                    $info = json_decode($info, true);
                    echo $info[0]['name'];
                    ?>
                    <br>
                    <label>Date of Birth:</label>&nbsp; <?php echo $info[0]['dob'] ?>
                    <br>
                    <label>Age:</label>&nbsp; <?php echo $info[0]['age'] ?> Years
                    <br>
                    <label>Gender:</label>&nbsp; <?php echo $info[0]['gender'] ?>
                    <br>
                    <label>Marital Status:</label>&nbsp; <?php echo $info[0]['marital_status'] ?>
                    <br>
                    <label>Correspond Address:</label>&nbsp; <?php
                    $add = json_decode($address, true);
                    echo $add[0]['corresspond']
                    ?>
                    <br>
                    <label>Permanent Address:</label>&nbsp; <?php echo $add[0]['permanent'] ?>
                    <br>
                    <label>Email Address:</label>&nbsp; <?php echo $add[0]['email'] ?>
                    <br>
                    <label>Mobile :</label>&nbsp; <?php echo $add[0]['c_mob'] ?>
                </div>
                <div class="col-sm-4">
                    <img class="img-responsive passport" id="passport" src="<?php echo base_url() . $info[0]['img_path'] ?>">
                </div>

            </div>
            <div class="row details">
                <h4>Payment Details</h4>
                <?php $payment = json_decode($payment, TRUE); ?>
                <label>Payment Period :</label>&nbsp;<?php echo $payment['period']; ?>
                <br/>
                <label>Payment Mode :</label>&nbsp;<?php echo $payment['mode']; ?>
                <br/>
                <?php if ($payment['mode'] == 'Cheque') {
                    ?>
                    <label>Cheque No.:</label>&nbsp;<?php echo $payment['cheque_no']; ?>
                <?php }
                ?>
            </div>
            <div class="row" style="margin-top:10px">
                <label>Date:</label>&nbsp;<?php echo date('D,d-M-Y');?>
            </div>
            <div class="row" style="margin-top: 50px">
                <div class="col-sm-6">
                    Authorized Signatory
                    <br/>
                    <label>Enhancers</label>
                    <br/>
                    <p>Haldwani</p>
                </div>
                <div class="col-sm-6"style="text-align: right">
                    Student Signature
                    <br/>
                    <label><?php echo $info[0]['name']?></label>
                </div>
            </div>
            <div class="row">
                <p style="text-align: center">This is computer generated recept.<br/>
                    all rights reserved Enhancers.
                </p>
            </div>
            <div class="row">
                <div class="col-sm-5"></div>
                <div class="col-sm-2">
                    <button class="btn btn-primary" onclick="window.print()">Print</button>
                    <button class="btn btn-danger" onclick="window.location.assign('../Enhancers/Complete');">Exit</button>
                </div>
                <div class="col-sm-5"></div>
            </div>
        </div>
    </div>
    <div class="col-sm-2">

    </div>
</div>