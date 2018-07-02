/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$(document).ready(function(){
    $("#btnAdd").click(function(){
        console.log("it clicks"); 
        name = $("#name").val();
        program_id = $("#program_id").val();
        start_year = $("#start_year").val();
        
        console.log("addStudent.php?name="+name
                +"&program_id="+program_id
                +"&start_year="+start_year);
        $.get("addStudent.php?name="+name
                +"&program_id="+program_id
                +"&start_year="+start_year,
        function(data, status){
            $("#status").text(data+ " record(s)," + name + ", has been added to database."
        );});
       
    });
    
   $("#btnReload").click(function(){
       $.get("getAllStudent.php", function(data, status){
           $("#records").empty();
           
           $.each(data, function(index, record){
               $("#records").append("<li>" + record['id'] + "; "
                   + record['name'] + ", " + record['program_id']
                   + ", " + record['start_year'] + "</li>" );
           
           console.log(index + ", " + record['name']);
       });
       });
   });
});