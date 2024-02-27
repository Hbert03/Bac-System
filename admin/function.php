<?php
include('conn.php');


$conn->query("SET SESSION wait_timeout = 600");
$conn->query("SET GLOBAL max_allowed_packet = " . (128 * 1024 * 1024));

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    if(isset($_POST['submit'])) {
        if(isset($_FILES['fileUpload'])) {
            $uploadDir = '../pdf/';
            $uploadStatus = true;
    
            // Loop through each file
            for($i = 0; $i < count($_FILES['fileUpload']['name']); $i++) {
                $file = $_FILES['fileUpload'];
                
                if($file['error'][$i] !== UPLOAD_ERR_OK) {
                    echo "Error uploading file.";
                    $uploadStatus = false;
                    continue;
                }
    
                $fileName = $file['name'][$i];
                $fileTmpName = $file['tmp_name'][$i];
                $uploadedFile = $uploadDir . basename($fileName);
    
                if (move_uploaded_file($fileTmpName, $uploadedFile)) {
                    $fileData = file_get_contents($uploadedFile);
                    $fileData = mysqli_real_escape_string($conn, $fileData);
    
                    $files_id = $_POST['file']; // Check how you want to handle file IDs
                    $fileName = mysqli_real_escape_string($conn, $fileName);
    
                    $query = "INSERT INTO tbl_bac_upload (files_id, file_data, file_name) VALUES ('$files_id', '$fileData', '$fileName')";
    
                    if (mysqli_query($conn, $query)) {
                        $_SESSION['status'] = "Files Saved";
                        $_SESSION['status_a'] = "success";
                    } else {
                        $_SESSION['status'] = "Files Not Saved";
                        $_SESSION['status_a'] = "error";
                    }
                } else {
                    $_SESSION['status'] = "Error uploading files.";
                    $_SESSION['status_a'] = "error";
                    $uploadStatus = false;
                }
            }
    
            if($uploadStatus) {
                header("Location: index.php");
                exit();
            } else {
                header("Location: index.php");
                exit();
            }
        } 
    }
    
    if(isset($_POST['delete'])) {
        $fileId = $_POST['id'];
        $query = "DELETE FROM tbl_bac_upload WHERE id = '$fileId'";
        if (mysqli_query($conn, $query)) {
            echo "Deleted Successfully";
        } else {
            echo "Failed to delete file.";
        }
        exit(); 
    }

    if (isset($_POST['update'])) {
        $fileId = $_POST['id'];
        $category = $_POST['bac_list'];
        $filename = $_POST['file_name'];

        $query1 = "SELECT file_name FROM tbl_bac_upload WHERE id = '$fileId'";
        $oldFilenameResult = mysqli_query($conn, $query1);
        $oldFilenameRow = mysqli_fetch_assoc($oldFilenameResult);
        $oldFilename = $oldFilenameRow['file_name'];
        $oldFilePath = '../pdf/'  . $oldFilename;
        $newFilePath = '../pdf/' . $filename;
        if (rename($oldFilePath, $newFilePath)) {

            $query = "UPDATE tbl_bac_upload
                      SET files_id = '$category', file_name = '$filename'
                      WHERE id = '$fileId'";
            if (mysqli_query($conn, $query)) {
                echo "Updated Successfully";
            } else {
                echo "Failed to update file in the database.";
             
                rename($newFilePath, $oldFilePath); 
            }
        } else {
            echo "Failed to rename the file in the file system.";
        }
        exit();
    }
    
}    



// login
if (isset($_POST['user']) && isset($_POST['password'])) {

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $user = validate($_POST['user']);
    $pass = validate($_POST['password']);

    $pass = md5($pass);

    $sql = "SELECT * FROM tbl_user WHERE useraccount='$user' AND password ='$pass'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['user_id'] = $row['user_id'];
        header("Location: index.php");
        exit();

    
    } else {
        $_SESSION['login'] = "INVALID!";
        $_SESSION['login_code'] = "error";
        header("Location: login.php");
        exit();
    }
} else {
    $_SESSION['login'] = "Try Again";
    $_SESSION['login_code'] = "error";
    header("Location: login.php");
    exit();
}





$_SESSION = array();
session_destroy();
header("Location: login.php");
exit;
?>
