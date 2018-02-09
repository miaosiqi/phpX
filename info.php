<?php
    var_dump($_SERVER['REQUEST_URI']);

    $route = [
        'dd' => 12,
        $_SERVER['REQUEST_URI'] => 'testController.php'
    ];

    require($route[$_SERVER['REQUEST_URI']]);

    require_once('function.php');
    require_once('testController.php');
    require_once('testModel.php');
    require_once('testView.php');

    C('test','show');
    $testController = new testController();
    $testController -> show();

?>



My name is <?php echo $_POST['name']; ?>
<?php
if ((($_FILES["file"]["type"] == "image/gif")
    || ($_FILES["file"]["type"] == "image/jpeg")
    || ($_FILES["file"]["type"] == "image/png"))
    && ($_FILES["file"]["size"] < 120000))
{
    if ($_FILES["file"]["error"] > 0)
    {
        echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
    }
    else
    {
        echo "Upload: " . $_FILES["file"]["name"] . "<br />";
        echo "Type: " . $_FILES["file"]["type"] . "<br />";
        echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
        echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";

        if (file_exists("upload/" . $_FILES["file"]["name"]))
        {
            echo $_FILES["file"]["name"] . " already exists. ";
        }
        else
        {
            move_uploaded_file($_FILES["file"]["tmp_name"],
                "upload/" . $_FILES["file"]["name"]);
            echo "Stored in: " . "upload/" . $_FILES["file"]["name"];
        }
    }
}
else
{
    echo "Invalid file";
}
?>
