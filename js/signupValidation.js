// XML HTTP Request
var xhr = new XMLHttpRequest();

xhr.onreadystatechange = function() { 
    if ( xhr.readyState === 4 && xhr.status === 200 ) {  
        callback();  
   } 
};  

var websiteField = document.querySelector('#websiteURL');
var websiteInfo = document.querySelector('.nameTaken');

websiteField.addEventListener('blur',makeAJAXCall);


function makeAJAXCall(){
       
    xhr.open('POST', 'nametaken.php', true);
    xhr.setRequestHeader('Content-type','application/x-www-form-urlencoded');
    xhr.send('websiteURL='+websiteField.value);

}


function callback() {
        var response = JSON.parse(xhr.responseText);  

        websiteInfo.innerHTML = response.taken;
       
}