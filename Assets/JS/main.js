jQuery(function($) {

	//#main-slider
	$(function(){
		$('#main-slider.carousel').carousel({
			interval: 8000
		});
	});

	$( '.centered' ).each(function( e ) {
		$(this).css('margin-top',  ($('#main-slider').height() - $(this).height())/2);
	});

	$(window).resize(function(){
		$( '.centered' ).each(function( e ) {
			$(this).css('margin-top',  ($('#main-slider').height() - $(this).height())/2);
		});
	});

	//portfolio
	$(window).load(function(){
		$portfolio_selectors = $('.portfolio-filter >li>a');
		if($portfolio_selectors!='undefined'){
			$portfolio = $('.portfolio-items');
			$portfolio.isotope({
				itemSelector : 'li',
				layoutMode : 'fitRows'
			});
			$portfolio_selectors.on('click', function(){
				$portfolio_selectors.removeClass('active');
				$(this).addClass('active');
				var selector = $(this).attr('data-filter');
				$portfolio.isotope({ filter: selector });
				return false;
			});
		}
	});

	//contact form
	var form = $('.contact-form');
	form.submit(function () {
		$this = $(this);
		$.post($(this).attr('action'), function(data) {
			$this.prev().text(data.message).fadeIn().delay(3000).fadeOut();
		},'json');
		return false;
	});

	//goto top
	$('.gototop').click(function(event) {
		event.preventDefault();
		$('html, body').animate({
			scrollTop: $("body").offset().top
		}, 500);
	});	

	//Pretty Photo
	$("a[rel^='prettyPhoto']").prettyPhoto({
		social_tools: false
	});	
	
	// Below are the extended part as User Defined functions
	
	$('#frmSandhanReg').submit(function(){
		if($.trim($('#event').val()) == 'x'){
			$('#event').focus();
		}else if($.trim($('#clgName').val()) == ''){
			$('#clgName').focus();
		}else if($.trim($('#inchargeName').val()) == ''){
			$('#inchargeName').focus();
		}else if($.trim($('#contact').val()) == ''){
			$('#contact').focus();
		}else if($.trim($('#emailID').val()) == ''){
			$('#emailID').focus();
		}else if($.trim($('#pName').val()) == ''){
			$('#pName').focus();
		}else{		
			dataString = $("#frmSandhanReg").serialize();
			alert(dataString);
			$.ajax({
		          type: "POST",
		          url: site_url_+"/events/reg_sandhan",
		          data: dataString,
		          success: function(data){
					$('html, body').animate({
						scrollTop: $("body").offset().top
					}, 500);
					$('#msg_').html(data);
		          }
		    });
		}
	return false;
	});
	
	//updated

	$('#scrollbox3').enscroll({
	    showOnHover: true,
	    verticalTrackClass: 'track3',
	    verticalHandleClass: 'handle3'
	});
	
	$('#frmEnquiry').submit(function(){
		if($('#txtEnqName').val() == ''){
			$('#cntct_msg_').text('Your Name Please...');
		}else if($('#txtEnqEmail'). val() == ''){
			$('#cntct_msg_').text('Your Email Please...');
		}else if($('#txtSubject').val() == ''){
			$('#cntct_msg_').text('Subject Please...');
		}else if($('#txtWriteHere').val() == ''){
			$('#cntct_msg_').text('Please describe the subject...');
		}else{
			form_data = $('#frmEnquiry').serialize();
			url_ = site_url_ + '/web/Contact_Enquiry_email';
			$('#cntct_msg_').html('<img src="'+ base_path +'nitnav/i_m_g_/loading.gif" /> Loading...');
			$.ajax({
				url: url_,
	            type: 'POST',
	            data: form_data,
	            success: function(msg) {
	                $('#cntct_msg_').html(msg);
	                
	                $('#txtEnqName').val('');
	                $('#txtEnqEmail').val('');
	                $('#txtSubject').val('');
	                $('#txtWriteHere').val('');
	            }
			});
		}
	return false;
	});
});


