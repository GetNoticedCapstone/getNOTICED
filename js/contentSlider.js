/* 
    Custom jquery solution we developed to change content when a user clicks on a
    button to continue to next part of the content they are reading. 
    This will be included on adminPage.php, and userEditPage.php.
 */

//load different content boxed, hide screen 2 3 4
$(window).load(function(){
   $("#screen2,#screen3,#screen4").addClass('contentBox').hide(); 
});

//on btn click 1 hide screens 1 3 & 4 display 2 
$('.btn1 a').click(function(){
   $("#screen1,#screen3,#screen4").hide();
   $("#screen2").show();
});
//on btn click 2 hide screens 1 2 & 4 display 3 
$('.btn2 a').click(function(){
   $("#screen1,#screen2,#screen4").hide();
   $("#screen3").show();
});
//on btn click 3 hide screens 1 2 & 3 display 4 
$('.btn3 a').click(function(){
   $("#screen1,#screen2,#screen3").hide();
   $("#screen4").show();
});
$('.btn4 a').click(function(){
   $("#screen2,#screen3,#screen4").hide();
   $("#screen1").show();
});
