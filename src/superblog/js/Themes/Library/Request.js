class Request{

    constructor(){
        
    } 
    
}

$(document).ready(function(){
    //console.log('Hi');
    //alert('Hi');
    $('#upload-submit').click(function(e){
         e.preventDefault();
         //alert('Hi');
         $.ajaxSetup({

             headers:{
                 'X-CSRF-TOKEN' : $("meta[name='csrf-token']").attr('content')
             }

         });

         $.ajax({
             url: "/upload",
             method: 'POST',
             data: {file:$('#file').val()},
             success: function(result){
                 alert('success');
             }

         })
    })
})

