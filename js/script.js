$(document).ready(function(){
    //Show loader image
    $('#loaderImage').show();
    
    showContacts();    
});

//Show Contacts
function showContacts(){
    console.log('Showing Contacts...');
    setTimeout("$('#pageContent').load('contacts.php',function(){$('loaderImage').hide();})", 1000);
}