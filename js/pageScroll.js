// created for the page scroll feature for main page
// 8/5/14

/*
 * Bootstrap takes care of the responsive navigation toggling,
 * create a scrollToID function first, and then call that function any time a .scroll-link or .scroll-top is clicked. 
 * The jQuery knows which page section to scroll to based on the data-id attribute assigned to the link
 *  if .scroll-top links are clicked you’ll scroll right back up to the top
 *  script to help close the menu in mobile views, otherwise the menu would stay open and require manually closing it after scroll.
 *  add a class of .open to detect when the nav is toggled, and then toggle some Bootstrap classes to tell the nav to close when a link is clicked
 */

$(document).ready(function(){
    //nav click event
    $('.gnScroll').on('click', function(event){
        event.preventDefault();
        var sectionID = $(this).attr("data-id");
        scrollToID('#' + sectionID, 750);
    });
    //scroll to top event
    $('.scrollTop').on('click', function(event){
        event.preventDefault();
        $('html,body').animate({scrollTop:0}, 'slow');
    });
    //for mobile nav toggle
    $('.nav-toggle').on('click', function(event){
        event.preventDefault();
        $('#mainNav').toggleClass("open");
    });
});

//for main scroll functionality
function scrollToID(id, speed){
    var newOffSet = 50;
    var targOffset = $(id).offset().top - newOffSet;
    var mainNav = $('mainNav');
    $('html,body').animate({scrollTop:targOffset}, speed);
    if (mainNav.hasClass("open")){
        mainNav.css("height", "1px").removeClass("in").addClass("collapse");
        mainNav.removeClass("open");
    }
}
if(typeof console === "undefined"){
    console = {
        log: function() {}
    };
}