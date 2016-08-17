<hr>
<div class="container">
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6" style="border:solid 1px; border-radius: 5px">
            <div class="row">
                <div class="col-sm-6">
                    <label>Your Form No:</label>&nbsp;<?php echo $form_no; ?>
                </div>
                <div class="col-sm-6">
                    <label>Your Name: </label>&nbsp;<?php echo $std_name; ?>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <h4> Payment Details:</h4>
                    <p><ul>
                        <li>Amount Quarterly (Rs. 500 only) </li>
                        <li>Amount Half Yearly (Rs. 1000 only) </li>
                        <li>Amount Yearly (Rs. 2000 only)</li>

                    </ul><p>
                    <form class="form-inline" action="<?php echo site_url('Enhancers/PaymentInfo');?>" method="post">
                        <div class="row">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-8">
                                <div class="form-group">
                                    <label>Select Payment Period</label>
                                    <select name="period" class="form-control">
                                        <option>Select</option>
                                        <script>
                                            period =<?php echo $payPeriod; ?>;
                                            for (i = 0; i < period.length; i++)
                                                document.write('<option value="' + period[i].period_id + '">' + period[i].period + '</option>');
                                        </script>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Select Payment Mode</label>
                                    <select name="mode" class="form-control" id="payMode">
                                        <option>Select</option>
                                        <script>
                                            mode =<?php echo $payMode; ?>;
                                            for (i = 0; i < mode.length; i++)
                                                document.write('<option value="' + mode[i].mode_id + '">' + mode[i].mode + '</option>');
                                        </script>
                                    </select>
                                </div>    
                            </div>
                            <div class="col-sm-2">

                            </div>


                        </div>
                        <div class="row">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-8">
                                <div class="form-group" id="chequeDiv" style="display: none">
                                    <label>Enter Cheque No.:</label>
                                    <input type="text" class="form-control" name="cheque_no" id="cheque_no">
                                </div>
                            </div>
                            <div class="col-sm-2"></div>

                        </div>
                        <div class="row">
                            <div class="col-sm-9"></div>
                            <div class="col-sm-3" >
                                <input type="submit" class="btn btn-danger" style="float:right; margin: 5px;" value="Next">
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
        <div class="col-sm-3"></div>

    </div>
</div>