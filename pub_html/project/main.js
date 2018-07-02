$(document).ready(function(){
    $("#addAlbum").click(function(){
        
        console.log("Clicks");
        name = $("#name").val();
        
        console.log("got name value");
        $.get("addAlbum.php?name="+ name,
        
        function(data, status){
            $("#status").text(data + " record(s)," + name + ", has been added to album.");
        });
    });
    
    $("#showAlbum").click(function(){
        console.log("Clicks");
        $.get("showAlbum.php", function(data, status){
            $("#albumRecords").empty();
            console.log("albumRecords.empty()");
            
            $.each(data, function(index, record){
                $("#albumRecords").append("<li>" + record['id'] + "; " +
                         record['name'] + "</li>");
                 console.log(".each data function");
            });
        });
    });
    
    $("#showPictures").click(function(){
        console.log("Clicks");
        $.get("showPicture.php", function(data, status4){
            $("#pictureRecords").empty();
            console.log("pictureRecords.empty()");
            
            $.each(data, function(index, record){
                $("#pictureRecords").append("<li>" + record['picture_id'] + "; " +
                         record['name'] + "</li>" + "<img src=" + record['name']
                         + " />");
                 console.log(".each data function");
                 
             $("#loadAllPicture").attr("src",name);
            });
           
        });
    });
    
    
    
    $("#showComments").click(function(){
        console.log("Clicks");
        $.get("showComments.php", function(data, status5){
            $("#commentRecords").empty();
            console.log("commentRecords.empty()");
            
            $.each(data, function(index, record){
                $("#commentRecords").append("<li>" + record['comments_id'] + "; " +
                         record['comments'] + "</li>");
                 console.log(".each data function");
            });
        });
    });
    
        $("#addPicture").click(function(){
        
        console.log("Clicks");
        picture = $("#picture").val();
        
        console.log("got picture value");
        console.log("addAlbum.php?picture="+ picture);
        $("#loadPicture").attr("src",picture);
        $.get("addPictures.php?picture="+ picture,
        
        function(data, status1){
            $("#status1").text(data + " record(s)," + picture + ", has been added to album.");
        });
    });
    
    $("#deleteAlbum").click(function(){
       console.log("Clicks");
       albumId = $("#albumId").val();
       
       console.log("got album ID value");
       $.get("deleteAlbum?albumId=" + albumId,
       
       function(data, albumStatus){
           $("#albumStatus").text(data + "record(s)," + albumId + ", has been deleted from album.");
           
       });
    });
    
        $("#deletePicture").click(function(){
       console.log("Clicks");
       picture_id = $("#picture_id").val();
       
       console.log("got picture ID value");
       $.get("deletePictures?picture_id=" + picture_id,
       
       function(data, pictureStatus){
           $("#pictureStatus").text(data + "record(s)," + picture_id + ", has been deleted from album.");
           
       });
    });
    
        $("#addComments").click(function(){
        
        console.log("Clicks");
        comments = $("#comments").val();
        
        console.log("got comments");
        console.log("addComments.php?comments="+ comments);
        
        $.get("addComments.php?comments="+ comments,
        
        function(data, status2){
            $("#status2").text(data + " record(s)," + comments + ", has been added to comments.");
        });
        
       $("#deleteComments").click(function(){
       console.log("Clicks");
       comments_id = $("#comments_id").val();
       
       console.log("got comments ID");
       $.get("deleteComments.php?comments_id=" + comments_id,
       
       function(data, commentsStatus){
           $("#commentsStatus").text(data + "record(s)," + comments_id + ", has been deleted from comments.");
           
            });
        });
        
    });
    
});

