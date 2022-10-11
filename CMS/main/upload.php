<?php
$con = mysqli_connect('localhost','root',"");
mysqli_select_db($con, 'sa');
$statusMsg='';
$targetDir="uploads/";
if(isset($_POST['submit']))
{
  if(!empty($_FILES["file"]["name"]))
  {
    $fileName=basename($_FILES["file"]["name"]);
    $targetFilePath=$targetDir.$fileName;
    $fileType=pathinfo($targetFilePath,PATHINFO_EXTENSION);

    $allowTypes=array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType,$allowTypes))
    {
      if(move_upload_file($_FILES["file"]["tmp_name"],$targetFilePath))
      {
        $insert=$con->query("insert into samp(file_name) values ('$fileName')");
        if($insert)
        {
          $statusMsg = "The file".$fileName."has been uploaded sucessfully";
        }
        else
        {
          $statusMsg="File upload failed";
        }
      }
      else
      {
        $statusMsg="Sorry,there was a error uploading your file";
      }
    }
    else
    {
        $statusMsg="Sorry,only JPG,JPEG,PNG,GIF,& PDF files are allowed to upload.";
    }
  }
    else{
      $statusMsg="Please select a file to upload";
    }
}


 ?>
