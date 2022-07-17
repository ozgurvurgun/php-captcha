<?php
session_start();
if (isset($_SESSION['rand'])) {
    $secur = $_SESSION['rand'];
} else {
    $secur = substr(md5(rand(0, 90)), 0, 6); //f457c5
    @$_SESSION['rand'] = $secur;
}
?>
<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>

<body style="font-family:  'Raleway', sans-serif;padding-top:55px">
    <section class="p-5 text-center homepage">
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <form method="POST">
                        <div class="mb-4">
                            <label style="font-size:20px ;" for="security" class="form-label text-warning"><b><?php echo $secur; ?></b></label>
                            <input type="text" class="form-control mt-2" id="security" name="input" placeholder="" required>
                            <label for="" class="form-label mt-3"><b>Enter the verification code</b> </label>
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-success btn-lg mb-5">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <?php
    if (isset($_POST["input"])) {
        if ($_POST["input"] == $_SESSION["rand"]) {
            echo "<script>alert('Transaction successful')</script>";
            unset($_SESSION["rand"]);
        } else {
            echo "<script>alert('You entered the verification code incorrectly')</script>";
            unset($_SESSION["rand"]);
        }
        echo "<script>window.location.href='exit.php'</script>";
    }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>


</html>