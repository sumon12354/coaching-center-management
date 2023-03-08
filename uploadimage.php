<?Php
    $target_dir = "upload/";

    $imagename = basename($_FILES["imagehere"]["name"]);
    $imagepath = $target_dir . $imagename;
    $imageFileType = strtolower(pathinfo($imagename,PATHINFO_EXTENSION));
    $newimagepath = $target_dir . time() . "." . $imageFileType;
    
    move_uploaded_file($_FILES["imagehere"]["tmp_name"], $newimagepath);
?>