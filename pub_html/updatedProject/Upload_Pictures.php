<!DOCTYPE html>
<!--Code for uploading pictures and albums, or removing them -->

<html>
    <head>
        <title>Upload Pictures</title>
        <body bgcolor="#E6E6FA">
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href ="main.css" /> 
        <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
        <script src="main.js"></script>
    </head>
    <body>
		
        <h1><center><u>Upload Photos or an Album </h1></center></u>
        
        <h2>Add Picture (Use URL)</h2>
        <input type="text" id="picture" />
        <button id="addPicture">Add Picture</button>
        <br>
        <span id="status1"></span>
        <br>
        <img src="" id="loadPicture" />
        
        <h2>Add Album </h2>
        <input type="text" id="name" />
        <button id="addAlbum">Add Album</button>
        <br>
        <span id="status"></span>        
        
        <h1><center><u>Delete Photos, Albums, or a comment </h1></center></u>
           
        <h2>Enter Picture ID to delete</h2>
        <input type="text" id="picture_id" />
        <button id="deletePicture">Delete Picture</button>
        <br>
        <span id="pictureStatus"></span>
        
        <h2>Enter Album ID to delete</h2>
        <input type="text" id="albumId" />
        <button id ="deleteAlbum">Delete</button>
        <br>
        <span id="albumStatus"></span>
           
        <h2>Enter comment ID to delete</h2>
        <input type="text" id="comments_id" />
        <button id="deleteComments">Delete Comment</button>
        <br>
        <span id="commentsStatus"></span>
        
        <br>
        <br>
       <form action="https://www.cs.drexel.edu/~gj65/Project/Homepage.php">
           <input type="submit" value="Homepage"/></form><br>
    <form action="https://www.cs.drexel.edu/~gj65/Project/View_Albums.php">
        <input type="submit" value="View Albums"/></form>
    </body>
</html>
