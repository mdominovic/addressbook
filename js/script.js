$(document).ready(function(){
    //Show loader image
    $('#loaderImage').show();
    
    showContacts(); 
    
    //Add contact
    $(document).on('submit', '#addContact', function(){
        //SHow loader image
        $('#loaderImage').show();
        
        //Post data from form
        $.post("add_contact.php", $(this).serialize())
            .done(function(data){
                console.log(data);
                $('#addModal').foundation('reveal', 'close');
                showContacts(); 
            });
            return false;
    });
    
    //Edit contact
    $(document).on('submit', '#editContact', function(){
        //SHow loader image
        $('#loaderImage').show();
        
        //Post data from form
        $.post("edit_contact.php", $(this).serialize())
            .done(function(data){
                console.log(data);
                $('.editModal').foundation('reveal', 'close');
                showContacts(); 
            });
            return false;
    });
    
    //Delete contact
    $(document).on('submit', '#deleteContact', function(){
        //SHow loader image
        $('#loaderImage').show();
        
        //Post data from form
        $.post("delete_contact.php", $(this).serialize())
            .done(function(data){
                console.log(data);
                showContacts(); 
            });
            return false;
    });
    
});

//Show Contacts
function showContacts(){
    console.log('Showing Contacts...');
    setTimeout("$('#pageContent').load('contacts.php',function(){$('loaderImage').hide();})", 1000);
}

//Close modal
$(document).on('click', '.close-reveal-modal', function(){
   $('.reveal-modal').foundation('reveal', 'close'); 
});