<?php
include("config1.php");
    $type=$name=$link=$image=$rating=$time_in_minute=$description=$actors='';
    if(isset($_POST['add']))
    {
        $type= $_POST['type'];
        $name= $_POST['name'];
        $link= $_POST['link'];
        $image= $_FILES['image']["name"];
        
        $target_dir = "uploads/";
        $target_file = $target_dir.basename($_FILES["image"]["name"]);

        move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);

        $rating= $_POST['rating'];
        $time_in_minute= $_POST['time_in_minute'];
        $description= $_POST['description'];
        $actors= $_POST['actors'];

            $result=mysqli_query($conn, "INSERT INTO horror (type, name, link, image,rating,time_in_minute,description,actors) values('$type','$name','$link','$image','$rating','$time_in_minute','$description','$actors')");
            if($result)
            {
                echo "sucess";
            }
            else{
                echo "failed";
            }
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Add movie info in db</title>
        <link rel="stylesheet" type="text/css" href="css/StoreMovieInfo.css">
    </head>
    <body>
        <h1 style="text-align: center;">Store Movie Info in DB</h1>
        <div class="container">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
                <label>Type/Category:</label>
                <input type="text" name="type" id="type"><br>
                <label>Name:</label>
                <input type="text" name="name" id="name"><br>
                <label>Link:</label>
                <input type="text" name="link" id="link"><br>
                <label>Image:</label>
                <input type="file" name="image" id="image"><br>
                <label>Rating:</label>
                <input type="text" name="rating" id="rating"><br>
                <label>Time in Minute:</label>
                <input type="text" name="time_in_minute" id="time_in_minute"><br>
                <label>Description:</label>
                <input type="text" name="description" id="time_in_minute"><br>
                <label>Actor/Actress:</label>
                <input type="text" name="actors" id="time_in_minute"><br>
                <div class="buttonRoot">
                    <button class="button" name="add">Add</button>
                    <button name="edit">clear</button>
                </div>
            </form>
            
            
        </div>
    </body>
</html>
