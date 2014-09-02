/* 
Custom vanilla javascript solution we developed to switch content of
loginPage.php. If user selects signup, only signup fields will be displayed on 
loginPage.php. If user selects login, only the login fields will be displayed on 
loginPage.php.
This functionality allows us to not need to create 2 separate pages. 
This file will only be added to the loginPage.php.
 */
var loginDiv = document.querySelector('#div1'),
    signUpDiv = document.querySelector('#div2');

//on btn click 1 hide screens 1 3 & 4 display 2 
function SwitchToLogin(){
   loginDiv.style.display = 'block';
   signUpDiv.style.display = 'none';
}

//on btn click 1 hide screens 1 3 & 4 display 2 
function SwitchToSignUp(){
   signUpDiv.style.display = 'block';
   loginDiv.style.display = 'none';
}