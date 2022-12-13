 $(document).on('click','a.nav-link', function(e){
   e.preventDefault();
   var pageURL=$(this).attr('href');
   
   var page = pageURL; 
    history.pushState(null, '', page);
     // alert(page);
    $.ajax({    
       type: "GET",
       url: page, 
       data:{page:page},            
       dataType: "html",                  
       success: function(data){ 
  // alert(data);
         // document.getElementById("pageContent").innerHTML = data;
        $('#pageContent').html(data);    
               
       }
   });
});