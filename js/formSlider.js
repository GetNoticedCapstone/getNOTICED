//load different content boxed, hide screen 2 3 4
$(window).load(function(){
   $("#screen2,#screen3,#screen4,#screen5,#screen6,#screen7").addClass('contentBox').hide();
   $('<p class="label label-warning text-center">Section 1 of 7</p>').appendTo('#pbText');
});

$('.btn1 a').click(function(){
   $("#screen1,#screen3,#screen4,#screen5,#screen6,#screen7").hide();
   $("#screen2").show();
   $("#pBar").css('width','20%');
   $('#pbText').replaceWith('<p class="label label-warning text-center" id="pbText">Section 2 of 7</p>');
   
});

$('.btn2 a').click(function(){
   $("#screen1,#screen2,#screen4,#screen5,#screen6,#screen7").hide();
   $("#screen3").show();
   $("#pBar").css('width','40%');
   $('#pbText').replaceWith('<p class="label label-warning text-center" id="pbText">Section 3 of 7</p>');
});

$('.btn3 a').click(function(){
   $("#screen1,#screen2,#screen3,#screen5,#screen6,#screen7").hide();
   $("#screen4").show();
   $("#pBar").css('width','50%');
   $('#pbText').replaceWith('<p class="label label-warning text-center" id="pbText">Section 4 of 7</p>');
});
$('.btn4 a').click(function(){
   $("#screen1,#screen2,#screen3,#screen4,#screen6,#screen7").hide();
   $("#screen5").show();
   $("#pBar").css('width','70%');
   $('#pbText').replaceWith('<p class="label label-warning text-center" id="pbText">Section 5 of 7</p>');
});
$('.btn5 a').click(function(){
   $("#screen1,#screen2,#screen3,#screen4,#screen5,#screen7").hide();
   $("#screen6").show();
   $("#pBar").css('width','90%');
   $('#pbText').replaceWith('<p class="label label-warning text-center" id="pbText">Section 6 of 7</p>');
});
$('.btn6 a').click(function(){
   $("#screen1,#screen2,#screen3,#screen4,#screen5,#screen6").hide();
   $("#screen7").show();
   $("#pBar").css('width','100%');
   $('#pbText').replaceWith('<p class="label label-warning text-center" id="pbText">Section 7 of 7</p>');
});
$('.btn7 a').click(function(){
   $("#screen1,#screen2,#screen3,#screen4,#screen5,#screen7").hide();
   $("#screen6").show();
   $("#pBar").css('width','90%');
   $('#pbText').replaceWith('<p class="label label-warning text-center" id="pbText">Section 6 of 7</p>');
});
$('.btn8 a').click(function(){
   $("#screen1,#screen2,#screen3,#screen4,#screen6,#screen7").hide();
   $("#screen5").show();
   $("#pBar").css('width','70%');
   $('#pbText').replaceWith('<p class="label label-warning text-center" id="pbText">Section 5 of 7</p>');
});
$('.btn9 a').click(function(){
   $("#screen1,#screen2,#screen3,#screen5,#screen6,#screen7").hide();
   $("#screen4").show();
   $("#pBar").css('width','50%');
   $('#pbText').replaceWith('<p class="label label-warning text-center" id="pbText">Section 4 of 7</p>');
});
$('.btn10 a').click(function(){
   $("#screen1,#screen2,#screen4,#screen5,#screen6,#screen7").hide();
   $("#screen3").show();
   $("#pBar").css('width','40%');
   $('#pbText').replaceWith('<p class="label label-warning text-center" id="pbText">Section 3 of 7</p>');
});
$('.btn11 a').click(function(){
   $("#screen1,#screen2,#screen3,#screen4,#screen5,#screen6").hide();
   $("#screen2").show();
   $("#pBar").css('width','20%');
   $('#pbText').replaceWith('<p class="label label-warning text-center" id="pbText">Section 2 of 7</p>');
});
$('.btn12 a').click(function(){
   $("#screen2,#screen3,#screen4,#screen5,#screen6,#screen7").hide();
   $("#screen1").show();
   $("#pBar").css('width','5%');
   $('#pbText').replaceWith('<p class="label label-warning text-center" id="pbText">Section 1 of 7</p>');
});
