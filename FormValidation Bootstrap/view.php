<?php
    include ('./Form.php');
?>
<?php
    $form=new Form();
    $value = $form->Validate();
    echo $value;
    ?>
<?php
$errname = $erremail = $errcomment = $errwebsite = $errgender = " ";
$name = $email = $comment = $website = $gender = " ";
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
if (empty($_POST['name']))
{
$errname = "<span style='color:red';>Name is required</span>";
}

else{
$name = validate($_POST["name"]);
}

if (empty($_POST['email'])) {
$erremail = "<span style='color:red';>Email is required</span>";
} else {
$email = validate($_POST["email"]);
}

if (empty($_POST['website'])) {
$errwebsite = "<span style='color:red';>Website is required</span>";
} else {
$website = validate($_POST["website"]);
}

if (empty($_POST['comment'])) {
$errcomment = "<span style='color:red';>Comment is required</span>";
} else {
$comment = validate($_POST["comment"]);
}

if (empty($_POST['gender'])) {
$errgender = "<span style='color:red';>Gender is required</span>";
} else {
$gender = validate($_POST["gender"]);
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<form action="<?php echo htmlspecialchars($_SERVER['php_self']);?>" method="POST">
    <div class="container offset-2">
        <div class="row mt-5">
            <div class="col-lg-10">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Name</label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" name="name"  value="<?php echo $name;?>" placeholder="Enter Your Name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">E-Mail</label>
                            <div class="col-lg-8">
                                <input type="email" class="form-control" name="email" placeholder="Enter Your Email">
                            </div>
                        </div>
                       <!-- <div class="form-group row">
                            <label class="col-form-label col-lg-2">Password</label>
                            <div class="col-lg-8">
                                <input type="password" class="form-control" name="password" placeholder="Enter Your Password">
                            </div>
                        </div>-->
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Website Address</label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" name="website" placeholder="Enter Your Website Address">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Comment</label>
                            <div class="col-lg-8">
                                <textarea class="form-control" name="comment" placeholder="Comment Here..."></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Gender</label>
                            <div class="col-lg-8">
                                <label class="radio-inline"></label><input type="radio" name="gender" value="male">Male
                                <label class="radio-inline"></label><input type="radio" name="gender" value="female">Female
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2"></label>
                            <div class="col-lg-8">
                                <input type="submit" class="btn btn-block btn-success" name="btn">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
