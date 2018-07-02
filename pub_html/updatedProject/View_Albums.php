<!DOCTYPE html>
<!-- Code for viewing albums, photos, or making a comment -->
<html>
    <head>
        <title>View Albums</title>
        <body bgcolor="#E6E6FA">
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href ="main.css" /> 
        <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
        <script src="main.js"></script>
    </head>
    <body>
		
        <h1><center><u>View Photos or Make a Comment</h1></center></u>
                
        <h2>Show all Pictures: </h2>
        <button id="showPictures">Show Album</button>
        <br>
        <ul id="pictureRecords"></ul>               
                
        <h2>Show all Albums: </h2>
        <button id="showAlbum">Show Album</button>
        <br>
        <ul id="albumRecords"></ul>
        
        <h2>Show all Comments: </h2>
        <button id="showComments">Show Comments</button>
        <br>
        <ul id="commentRecords"></ul>
        
        <h2>Add Comment: </h2>
        <input type="text" id="comments" />
        <button id="addComments">Add Comment</button>
        <br>
        <span id="status2"></span>        
        
        <br>
        <br>
       <form action="https://www.cs.drexel.edu/~gj65/Project/Homepage.php">
           <input type="submit" value="Homepage"/></form><br>
    <form action="https://www.cs.drexel.edu/~gj65/Project/Upload_Pictures.php">
        <input type="submit" value="Upload Pictures"/></form>
    </body>
</html>
