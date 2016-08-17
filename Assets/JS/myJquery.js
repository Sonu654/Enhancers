$(document).ready(function () {
    $(document).on('change', '#imgURL', function () {
        val = $('#imgURL').val();
        var reader = new FileReader();
        alert(reader.readAsDataURL(val));
        $('#passport').attr('src', val);
    });

    $(document).on('change', '#dob', function () {
        dob = $(this).val();
        ts = new Date(dob).getFullYear();
        td = new Date().getFullYear();
        age = td - ts;
        if (age > 15) {
            $('#age').val(age);
            $('#ageError').text('');
        } else {
            $('#age').val('');
            $('#ageError').text('Date of Birth not valid!');
        }
    });

    $(document).on('click', '#ruleAccept', function () {
        if (window.confirm('i have read all rules, regulation/term carefully') == true) {
            window.location.assign('../Enhancers/Payment');
        }

    });

    $(document).on('change', '#payMode', function () {
        if ($(this).val() == 'p02') {
            $('#cheque_no').attr('required', 'required');
            $('#chequeDiv').show();
        }
    });

    /*   $(document).on('change','#dob',function(){
     var dob = $('#dob').val();
     if(dob != ''){
     var today = new Date().getTime();
     dob=date().getTime(dob);
     //today=today.toISOString().slice(0,10).replace(/-/g,"-");
     var dayDiff = Math.floor(today - dob) / (1000 * 60 * 60 * 24 * 365);
     var age = parseInt(dayDiff);
     alert(dob);
     alert(today);
     alert(age);
     $('#age').attr('value',age);
     }
     });*/

    $(document).on('change', '#c_s_p', function () {
        if ($('#c_s_p').attr('checked') == 'checked') {
            $('#p_add').val($('#c_add').val());
            $('#p_ph').val($('#c_ph').val());
            $('#p_mob').val($('#c_mob').val());
        } else {
            $('#p_add').val('');
            $('#p_ph').val('');
            $('#p_mob').val('');
        }

    });

    $(document).on('focus', '#h_per', function () {
        max = $('#h_max').val();
        obt = $('#h_obt').val();
        per = (obt * 100) / max;
        $('#h_per').val(per);
    });


    $(document).on('focus', '#s_per', function () {
        max = $('#s_max').val();
        obt = $('#s_obt').val();
        per = (obt * 100) / max;
        $('#s_per').val(per);
    });


    $(document).on('focus', '#ug_per', function () {
        max = $('#ug_max').val();
        obt = $('#ug_obt').val();
        per = (obt * 100) / max;
        $('#ug_per').val(per);
    });


    $(document).on('focus', '#pg_per', function () {
        max = $('#pg_max').val();
        obt = $('#pg_obt').val();
        per = (obt * 100) / max;
        $('#pg_per').val(per);
    });


    $(document).on('focus', '#ot_per', function () {
        max = $('#ot_max').val();
        obt = $('#ot_obt').val();
        per = (obt * 100) / max;
        $('#ot_per').val(per);
    });








    /* $(document).on('change', '#file', function () {
     file = $(this).val();
     if (file == 'select') {
     alert('please choose a valid file');
     } else {
     $.ajax({
     method: 'post',
     url: sitePath + "/Admin/getTxt",
     data: {'fileName': file}
     })
     
     .done(function (msg) {
     $('#fileTxt').html(msg);
     $('#txtEditFile').val(msg);
     $('#fileTxt').show();
     $('#txtEditFile').hide();
     $('#resp').hide();
     $('#btnEdit').show();
     $('#btnSave').hide();
     $('#btnArea').css('display', 'block');
     });
     }
     });
     
     $(document).on('click', '#btnEdit', function () {
     $('#fileTxt').hide();
     $(this).hide();
     $('#txtEditFile').show();
     $('#btnSave').show();
     });
     
     $(document).on('click', '#btnSave', function () {
     data = $('#txtEditFile').val();
     file = $('#file').val();
     if (file == 'select') {
     alert('please choose a valid file');
     } else {
     $.ajax({
     method: 'post',
     url: sitePath + "/Admin/writeTxt",
     data: {'fileName': file, 'data': data}
     })
     
     .done(function (msg) {
     $('#resp').text(msg);
     $('#resp').show();
     $('#resp').css('color','green');
     });
     }
     });*/
});