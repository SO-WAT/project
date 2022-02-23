<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="validation.css">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

<?php
//my variables
$nameErr=$locationErr=$phonenumberErr=$ageErr=$genderErr=$regErr=$mailErr="";
$name=$location=$phonenumber=$age=$gender=$reg=$report=$mail="";


//form validation
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if (empty($_POST["name"])){
        $nameErr="Name Required";
    } else{
        $name= test_input($_POST["name"]);
    }

    if (empty($_POST["location"])){
        $locationErr="Input Your Location";
    }else{
        $location=test_input($_POST["location"]);
    }

    if (empty($_POST["phonenumber"])){
        $phonenumberErr="Fill in your Number";
            }else{
        $phonenumber=test_input($_POST["phonenumber"]);
    }
        if (empty($_POST["age"])){
            $ageErr="Add Your Age";
        } else{
            $age=test_input($_POST["age"]);
        }
        if (empty($_POST["gender"])){
            $genderErr="Gender is Required";
        }else{
            $gender=test_input($_POST["gender"]);
        }

        if (empty($_POST["reg"])){
            $regErr="Enter the Correct Reg. No";
    } else{
            $reg=test_input($_POST["reg"]);
    }
    if(empty($_POST["report"])){
        $comment="";
    }else{
        $comment=test_input($_POST["report"]);
    }
    if(empty($_POST["mail"])){
        $mailErr="Enter Correct Email";
    }else{
        $mail=test_input($_POST["mail"]);
    }


}
function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<div class="container">
    <h2 class="text-center text-dark mt-5"><strong>Register Here</strong></h2>
                <div class="text-center mb-5 text-dark"><h4>Let Us Get To You</h4></div>
                <div class="card p=20%">

<!--        <div class="img_container"><img src="sad.jpg" alt=""width=10%" height="20%""></div>-->

            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <div><img src="sad.jpg" class="rounded-circle" alt=""width="20%"></div>
<!--                <fieldset>-->
                    <legend>User Information</legend>
       Name<br>
<!--                <input type="text" name="name">-->
                <span class="error">*<?php echo $nameErr;?></span><br>
                <input type="text" name="name">
                <br><br>
                    Age<br>
                    <span class="error">*<?php echo $ageErr;?></span><br>
                    <input type="number" name="phonenumber">
                    <br><br>

                    Gender<br>
                    <span class="error">*<?php echo $genderErr;?></span><br>
                    <input type="radio" name="gender" value="female">Female
                    <input type="radio" name="gender" value="male">Male
                    <input type="radio" name="gender" value="Prefer not to say">Prefer Not to Say
                    <br><br>

<!--                </fieldset>-->
                Enter Your Location<br>
                <span class="error">*<?php echo $locationErr;?></span><br>
                <input type="text" name="location">
                <br><br>

                Input Your Phone Number<br>
                <span class="error">*<?php echo $phonenumberErr;?></span><br>
                <input type="text" name="phonenumber">
                <br><br>

                Email<br>
                <span class="error">*<?php echo $mailErr;?></span><br>
                <input type="email" name="email">
                <br><br>
                Registration Number<br>
                <span class="error" >*<?php echo $regErr;?></span><br>
                <input type="password" name="reg">
                <span class="input_eye"></span>
                <br><br>
                Report: <textarea name="Report" rows="5" cols="40"></textarea>
                <br><br>

                <input type="submit" name="Sign In" value="Sign In">
                <input type="button" class="nav-btn" value="New User">


</div>

            </form>
        </div>
            </div>
        </div>

</div>


</body>
</html>
