<?php
class image
{
    public $Name;
    public $Size;
    public $Owner;
    public $mynd = "https://upload.wikimedia.org/wikipedia/commons/8/82/Mont_Blanc_oct_2004.JPG";


    public function getImageName()
    {
        return 0;
    }
    public function getOwnerName()
    {
       return 0;
    }

	public function getImageSize()
    {
        return 0;
    }

	public function setPath()
    {
      return 0;
    }

	public function setOwnerName()
    {
       return 0;
    }

	public function ShowImageSize()
    {
        return 0;
    }

}

use File\Upload;

if (isset($_POST['upload'])) {
    echo "<pre>";
    print_r($_FILES);
    echo "</pre>";
    $destination = $_SERVER['DOCUMENT_ROOT'] . "/2t/kennitala/VEF2A3U/img/"; 
    require_once 'File/Upload.php';
   
    try {
        $loader = new Upload($destination);
        $loader->upload();
        $result = $loader->getMessages();

    } catch (Exception $e) {
        echo $e->getMessage(); 
    }
}
?>

<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>PHP Solutions 6-2 - Upload File</title>
</head>

<body>
    <?php
       
        if (isset($result)) {
            echo '<ul>';
            foreach ($result as $message) {
                echo "<li>$message</li>";
            }
            echo '</ul>';
        }
    ?>
    <form action="" method="post" enctype="multipart/form-data" id="uploadImage">
        <p>
            <label for="image">Upload image:</label>
            <input type="file" name="image" id="image">
        </p>
        <p>
            <input type="submit" name="upload" id="upload" value="Upload">
        </p>
    </form>
</body>
</html>