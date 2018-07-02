$(document).ready(function(){
   $("#search").click(function(){
       id = $("#category_id").val();
       $.get("getCategoryName.php?id=" + id, 
            function(data, status){
                $("#category_name").text(data);
            });
   }); 
   $("#addNew").click(function(){
       var nName = $("#newName").val();
       $.get("addCategory.php?name=" + nName, function(d, s){
          alert(d + " record(s) has been added to database"); 
       });
   });
});
