
$(window).on('load',function () {
	var windowHeight = $(window).height();
	var windowHeightHalf = windowHeight/2;
	var targetPosition = $('.wk-memberBox');
	var targetHeight = targetPosition.innerHeight();
	var offset = targetPosition.offset();
	var targetPositionMid = offset.top - windowHeightHalf + (targetHeight/2);
	
	
	var sectionHeight01 = $('.wk-flowBox--01').innerHeight();
	var sectionHeight02 = $('.wk-flowBox--02').innerHeight();
	var sectionHeight03 = $('.wk-flowBox--03').innerHeight();
	var sectionHeight04 = $('.wk-flowBox--04').innerHeight();
	var sectionHeight05 = $('.wk-flowBox--05').innerHeight();
	var sectionHeight06 = $('.wk-flowBox--06').innerHeight();
	var sectionHeight07 = $('.wk-flowBox--07').innerHeight();
	

	var diff01 = sectionHeight01 - targetHeight;
	var diff02 = sectionHeight02 - targetHeight;
	var diff03 = sectionHeight03 - targetHeight;
	var diff04 = sectionHeight04 - targetHeight;
	var diff05 = sectionHeight05 - targetHeight;
	var diff06 = sectionHeight06 - targetHeight;
	var diff07 = sectionHeight07 - targetHeight;
	

	var sectionOffset01 = $('.wk-flowBox--01').offset();
	var sectionOffset02 = $('.wk-flowBox--02').offset();
	var sectionOffset03 = $('.wk-flowBox--03').offset();
	var sectionOffset04 = $('.wk-flowBox--04').offset();
	var sectionOffset05 = $('.wk-flowBox--05').offset();
	var sectionOffset06 = $('.wk-flowBox--06').offset();
	var sectionOffset07 = $('.wk-flowBox--07').offset();
	

	var sectionPosition01 = sectionOffset01.top - windowHeightHalf + diff01;
	var sectionPosition02 = sectionOffset02.top - windowHeightHalf + diff02;
	var sectionPosition03 = sectionOffset03.top - windowHeightHalf + diff03;
	var sectionPosition04 = sectionOffset04.top - windowHeightHalf + diff04;
	var sectionPosition05 = sectionOffset05.top - windowHeightHalf + diff05;
	var sectionPosition06 = sectionOffset06.top - windowHeightHalf + diff06;
	var sectionPosition07 = sectionOffset07.top - windowHeightHalf + diff07;
	var sectionPosition07After = sectionOffset07.top - windowHeightHalf + diff07 + 100;
  
	
	$(window).resize(function() {
		windowHeight = $(window).height();
		windowHeightHalf = windowHeight/2;
		targetPosition = $('.wk-memberBox');
		targetHeight = targetPosition.innerHeight();
		offset = targetPosition.offset();
		targetPositionMid = offset.top - windowHeightHalf + (targetHeight/2);


    sectionHeight01 = $('.wk-flowBox--01').innerHeight();
		sectionHeight02 = $('.wk-flowBox--02').innerHeight();
		sectionHeight03 = $('.wk-flowBox--03').innerHeight();
		sectionHeight04 = $('.wk-flowBox--04').innerHeight();
		sectionHeight05 = $('.wk-flowBox--05').innerHeight();
		sectionHeight06 = $('.wk-flowBox--06').innerHeight();
		sectionHeight07 = $('.wk-flowBox--07').innerHeight();


    diff01 = sectionHeight01 - targetHeight;
		diff02 = sectionHeight02 - targetHeight;
		diff03 = sectionHeight03 - targetHeight;
		diff04 = sectionHeight04 - targetHeight;
		diff05 = sectionHeight05 - targetHeight;
		diff06 = sectionHeight06 - targetHeight;
		diff07 = sectionHeight07 - targetHeight;


    sectionOffset01 = $('.wk-flowBox--01').offset();
		sectionOffset02 = $('.wk-flowBox--02').offset();
		sectionOffset03 = $('.wk-flowBox--03').offset();
		sectionOffset04 = $('.wk-flowBox--04').offset();
		sectionOffset05 = $('.wk-flowBox--05').offset();
		sectionOffset06 = $('.wk-flowBox--06').offset();
		sectionOffset07 = $('.wk-flowBox--07').offset();


		sectionPosition01 = sectionOffset01.top - windowHeightHalf + diff01;
		sectionPosition02 = sectionOffset02.top - windowHeightHalf + diff02;
		sectionPosition03 = sectionOffset03.top - windowHeightHalf + diff03;
		sectionPosition04 = sectionOffset04.top - windowHeightHalf + diff04;
		sectionPosition05 = sectionOffset05.top - windowHeightHalf + diff05;
		sectionPosition06 = sectionOffset06.top - windowHeightHalf + diff06;
		sectionPosition07 = sectionOffset07.top - windowHeightHalf + diff07;
		sectionPosition07After = sectionOffset07.top - windowHeightHalf + diff07 + 100;
  
	});
	
	

  $(window).scroll(function () {
		
		if(sectionPosition01 > $(window).scrollTop()) {
			$('.wk-memberBox li:nth-of-type(3)').css('opacity','0');
			$('.wk-memberBox li:nth-of-type(4)').css('opacity','0');
			$('.wk-memberBox li:nth-of-type(5)').css('opacity','0');
			$('.wk-memberBox li:nth-of-type(6)').css('opacity','0');
			$('.wk-memberBox li:nth-of-type(7)').css('opacity','0');
			$('.wk-memberBox li:nth-of-type(8)').css('opacity','0');
		}
		if(sectionPosition02 > $(window).scrollTop() & $(window).scrollTop() > sectionPosition01) {
			
			$('.wk-memberBox li:nth-of-type(1)').find('img').attr('src', $(".wk-memberBox li:nth-of-type(1)").find('img').attr('src').replace(/_01[a-g]{1}/, '_01a'));
			
			$('.wk-memberBox li:nth-of-type(2)').find('img').attr('src', $(".wk-memberBox li:nth-of-type(2)").find('img').attr('src').replace(/_02[a-g]{1}/, '_02a'));
			
			$('.wk-memberBox li:nth-of-type(3)').css('opacity','0');
			$('.wk-memberBox li:nth-of-type(4)').css('opacity','0');
			$('.wk-memberBox li:nth-of-type(5)').css('opacity','0');
			$('.wk-memberBox li:nth-of-type(6)').css('opacity','0');
			$('.wk-memberBox li:nth-of-type(7)').css('opacity','0');
			$('.wk-memberBox li:nth-of-type(8)').css('opacity','0');
			$('.wk-memberBox li:nth-of-type(1) p img').css('transform','scale(1.1)');
			$('.wk-memberBox li:nth-of-type(2) p img').css('transform','scale(1.1)');
		}else if(sectionPosition03 > $(window).scrollTop() & $(window).scrollTop() > sectionPosition02){
			
			$('.wk-memberBox li:nth-of-type(1)').find('img').attr('src', $(".wk-memberBox li:nth-of-type(1)").find('img').attr('src').replace(/_01[a-g]{1}/, '_01b'));
			
			$('.wk-memberBox li:nth-of-type(2)').find('img').attr('src', $(".wk-memberBox li:nth-of-type(2)").find('img').attr('src').replace(/_02[a-g]{1}/, '_02b'));
						
			$('.wk-memberBox li:nth-of-type(3)').css('opacity','0');
			$('.wk-memberBox li:nth-of-type(4)').css('opacity','0');
			$('.wk-memberBox li:nth-of-type(5)').css('opacity','0');
			$('.wk-memberBox li:nth-of-type(6)').css('opacity','0');
			$('.wk-memberBox li:nth-of-type(7)').css('opacity','0');
			$('.wk-memberBox li:nth-of-type(8)').css('opacity','0');
			$('.wk-memberBox li:nth-of-type(1) p img').css('transform','scale(0.9)');
			$('.wk-memberBox li:nth-of-type(2) p img').css('transform','scale(0.9)');
		}else if(sectionPosition04 > $(window).scrollTop() & $(window).scrollTop() > sectionPosition03){
			
			$('.wk-memberBox li:nth-of-type(1)').find('img').attr('src', $(".wk-memberBox li:nth-of-type(1)").find('img').attr('src').replace(/_01[a-g]{1}/, '_01c'));
			
			$('.wk-memberBox li:nth-of-type(2)').find('img').attr('src', $(".wk-memberBox li:nth-of-type(2)").find('img').attr('src').replace(/_02[a-g]{1}/, '_02c'));
			
			$('.wk-memberBox li:nth-of-type(3)').find('img').attr('src', $(".wk-memberBox li:nth-of-type(3)").find('img').attr('src').replace(/_03[a-g]{1}/, '_03a'));
			$('.wk-memberBox li:nth-of-type(4)').find('img').attr('src', $(".wk-memberBox li:nth-of-type(4)").find('img').attr('src').replace(/_04[a-g]{1}/, '_04a'));
			
			$('.wk-memberBox li:nth-of-type(3)').css('opacity','1');
			$('.wk-memberBox li:nth-of-type(4)').css('opacity','1');
			$('.wk-memberBox li:nth-of-type(5)').css('opacity','0');
			$('.wk-memberBox li:nth-of-type(6)').css('opacity','0');
			$('.wk-memberBox li:nth-of-type(7)').css('opacity','0');
			$('.wk-memberBox li:nth-of-type(8)').css('opacity','0');
			$('.wk-memberBox li:nth-of-type(3) p img').css('transform','scale(1.1)');
		}else if(sectionPosition05 > $(window).scrollTop() & $(window).scrollTop() > sectionPosition04){
			
			$('.wk-memberBox li:nth-of-type(1)').find('img').attr('src', $(".wk-memberBox li:nth-of-type(1)").find('img').attr('src').replace(/_01[a-g]{1}/, '_01d'));
			
			$('.wk-memberBox li:nth-of-type(2)').find('img').attr('src', $(".wk-memberBox li:nth-of-type(2)").find('img').attr('src').replace(/_02[a-g]{1}/, '_02d'));

			$('.wk-memberBox li:nth-of-type(3)').find('img').attr('src', $(".wk-memberBox li:nth-of-type(3)").find('img').attr('src').replace(/_03[a-g]{1}/, '_03b'));
			
			$('.wk-memberBox li:nth-of-type(4)').find('img').attr('src', $(".wk-memberBox li:nth-of-type(4)").find('img').attr('src').replace(/_04[a-g]{1}/, '_04b'));
			
			$('.wk-memberBox li:nth-of-type(5)').find('img').attr('src', $(".wk-memberBox li:nth-of-type(5)").find('img').attr('src').replace(/_05[a-g]{1}/, '_05a'));
			
			$('.wk-memberBox li:nth-of-type(5)').css('opacity','1');
			$('.wk-memberBox li:nth-of-type(6)').css('opacity','0');
			$('.wk-memberBox li:nth-of-type(7)').css('opacity','0');
			$('.wk-memberBox li:nth-of-type(8)').css('opacity','0');
			$('.wk-memberBox li:nth-of-type(3) p img').css('transform','scale(0.9)');
			$('.wk-memberBox li:nth-of-type(4) p img').css('transform','scale(1.1)');
			$('.wk-memberBox li p a span').css('color','#fff');
		}else if(sectionPosition06 > $(window).scrollTop() & $(window).scrollTop() > sectionPosition05){
			
			$('.wk-memberBox li:nth-of-type(1)').find('img').attr('src', $(".wk-memberBox li:nth-of-type(1)").find('img').attr('src').replace(/_01[a-g]{1}/, '_01e'));
			
			$('.wk-memberBox li:nth-of-type(2)').find('img').attr('src', $(".wk-memberBox li:nth-of-type(2)").find('img').attr('src').replace(/_02[a-g]{1}/, '_02e'));
			
			$('.wk-memberBox li:nth-of-type(3)').find('img').attr('src', $(".wk-memberBox li:nth-of-type(3)").find('img').attr('src').replace(/_03[a-g]{1}/, '_03c'));
			
			$('.wk-memberBox li:nth-of-type(4)').find('img').attr('src', $(".wk-memberBox li:nth-of-type(4)").find('img').attr('src').replace(/_04[a-g]{1}/, '_04c'));

			$('.wk-memberBox li:nth-of-type(5)').find('img').attr('src', $(".wk-memberBox li:nth-of-type(5)").find('img').attr('src').replace(/_05[a-g]{1}/, '_05b'));

			$('.wk-memberBox li:nth-of-type(6)').find('img').attr('src', $(".wk-memberBox li:nth-of-type(6)").find('img').attr('src').replace(/_06[a-g]{1}/, '_06a'));

						

			$('.wk-memberBox li:nth-of-type(6)').css('opacity','1');
			$('.wk-memberBox li:nth-of-type(7)').css('opacity','0');
			$('.wk-memberBox li:nth-of-type(8)').css('opacity','0');
			$('.wk-memberBox li:nth-of-type(4) p img').css('transform','scale(0.9)');
			$('.wk-memberBox li p a span').css('color','#808080');
		}else if(sectionPosition07 > $(window).scrollTop() & $(window).scrollTop() > sectionPosition06){
			
			$('.wk-memberBox li:nth-of-type(1)').find('img').attr('src', $(".wk-memberBox li:nth-of-type(1)").find('img').attr('src').replace(/_01[a-g]{1}/, '_01f'));
			
			$('.wk-memberBox li:nth-of-type(2)').find('img').attr('src', $(".wk-memberBox li:nth-of-type(2)").find('img').attr('src').replace(/_02[a-g]{1}/, '_02f'));
			
			$('.wk-memberBox li:nth-of-type(3)').find('img').attr('src', $(".wk-memberBox li:nth-of-type(3)").find('img').attr('src').replace(/_03[a-g]{1}/, '_03d'));
			
			$('.wk-memberBox li:nth-of-type(4)').find('img').attr('src', $(".wk-memberBox li:nth-of-type(4)").find('img').attr('src').replace(/_04[a-g]{1}/, '_04d'));
			
			$('.wk-memberBox li:nth-of-type(5)').find('img').attr('src', $(".wk-memberBox li:nth-of-type(5)").find('img').attr('src').replace(/_05[a-g]{1}/, '_05c'));

			$('.wk-memberBox li:nth-of-type(6)').find('img').attr('src', $(".wk-memberBox li:nth-of-type(6)").find('img').attr('src').replace(/_06[a-g]{1}/, '_06b'));

			$('.wk-memberBox li:nth-of-type(7)').find('img').attr('src', $(".wk-memberBox li:nth-of-type(7)").find('img').attr('src').replace(/_07[a-g]{1}/, '_07a'));

			
			$('.wk-memberBox li:nth-of-type(7)').css('opacity','1');
			$('.wk-memberBox li:nth-of-type(8)').css('opacity','0');
			$('.wk-memberBox li:nth-of-type(5) p img').css('transform','scale(1.1)');
			$('.wk-memberBox li p a span').css('color','#808080');
		}else if( ($(window).scrollTop() < sectionPosition07After) && ($(window).scrollTop() > sectionPosition07)){
			
			$('.wk-memberBox li:nth-of-type(1)').find('img').attr('src', $(".wk-memberBox li:nth-of-type(1)").find('img').attr('src').replace(/_01[a-g]{1}/, '_01g'));
			
			$('.wk-memberBox li:nth-of-type(2)').find('img').attr('src', $(".wk-memberBox li:nth-of-type(2)").find('img').attr('src').replace(/_02[a-g]{1}/, '_02g'));
			
			$('.wk-memberBox li:nth-of-type(3)').find('img').attr('src', $(".wk-memberBox li:nth-of-type(3)").find('img').attr('src').replace(/_03[a-g]{1}/, '_03e'));
			
			$('.wk-memberBox li:nth-of-type(4)').find('img').attr('src', $(".wk-memberBox li:nth-of-type(4)").find('img').attr('src').replace(/_04[a-g]{1}/, '_04e'));
			
			$('.wk-memberBox li:nth-of-type(5)').find('img').attr('src', $(".wk-memberBox li:nth-of-type(5)").find('img').attr('src').replace(/_05[a-g]{1}/, '_05d'));
			
			$('.wk-memberBox li:nth-of-type(6)').find('img').attr('src', $(".wk-memberBox li:nth-of-type(6)").find('img').attr('src').replace(/_06[a-g]{1}/, '_06c'));

			$('.wk-memberBox li:nth-of-type(7)').find('img').attr('src', $(".wk-memberBox li:nth-of-type(7)").find('img').attr('src').replace(/_07[a-g]{1}/, '_07b'))
			;
			$('.wk-memberBox li:nth-of-type(8)').find('img').attr('src', $(".wk-memberBox li:nth-of-type(8)").find('img').attr('src').replace(/_08[a-g]{1}/, '_08a'));

			
			$('.wk-memberBox li:nth-of-type(8)').css('opacity','1');
			$('.wk-memberBox li:nth-of-type(1) p img').css('transform','scale(0.9)');
			$('.wk-memberBox li:nth-of-type(2) p img').css('transform','scale(0.9)');
			$('.wk-memberBox li:nth-of-type(3) p img').css('transform','scale(0.9)');
			$('.wk-memberBox li:nth-of-type(4) p img').css('transform','scale(0.9)');
			$('.wk-memberBox li:nth-of-type(5) p img').css('transform','scale(0.9)');
			$('.wk-memberBox li:nth-of-type(6) p img').css('transform','scale(1.1)');
			$('.wk-memberBox li p a span').css('color','#808080');
		}else if($(window).scrollTop() > sectionPosition07After){
			$('.wk-memberBox li:nth-of-type(6)').find('img').attr('src', $(".wk-memberBox li:nth-of-type(6)").find('img').attr('src').replace(/_06[a-g]{1}/, '_06c'));
			$('.wk-memberBox li:nth-of-type(6) p img').css('transform','scale(0.9)');
		}else {
			
		}
	});
	

	$(window).scroll(function () {
		//var scr_count = $(window).scrollTop();
		//console.log(scr_count);
		//console.log(targetPositionMid);
		if((sectionPosition07 + targetHeight/2) > $(window).scrollTop() & $(window).scrollTop() > targetPositionMid) {
			$('.wk-memberBox').addClass('fixed');
			$('.wk-memberBox').removeClass('fixedEnd');
		} else if($(window).scrollTop() > (sectionPosition07 + targetHeight/2)){
			$('.wk-memberBox').removeClass('fixed');
			$('.wk-memberBox').addClass('fixedEnd');
		}else {
			$('.wk-memberBox').removeClass('fixed');
			$('.wk-memberBox').removeClass('fixedEnd');
		}
	});

});