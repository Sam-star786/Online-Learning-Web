<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Profile Photo | Upload</title>
    <style>
        body {
            background-color: lavender;
        }

        .img-box {
            width: 100%;
            background-color: white;
            padding: 20px;
            margin-top: 200px;
            border-radius: 10px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="img-box">
                    <form action="tutorials.php" method="POST" enctype="multipart/form-data">
                    <h2 style="text-align: center;">Chose Category</h2><br>
                        <select name="cat" id="" class="form-control">
                            <option>UI & UX</option>
                            <option>C</option>
                            <option>C++</option>
                            <option>HTML 5, CSS 3, Bootstrap</option>
                            <option>javaScript</option>
                            <option>PHP</option>
                            <option>MySql</option>
                            <option>Laravel</option>
                            <option>Java</option>
                            <option>Graphic Designing</option>
                            <option>Android , IOS Development</option>
                        </select><br>
                        <input style="margin-top:10px" class="btn btn-outline-success btn btn-block" type="submit" name="upload" value="Select Category For Tutorials">


                    </form>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
</body>

</html>