<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Booking Form</title>
    <link rel="stylesheet" href="web.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <script src="https://kit.fontawesome.com/e96a554ea8.js" crossorigin="anonymous"></script>
</head>
<!--<body style="background-image: url("https://unsplash.com/photos/Kq-3NXLaC1A");-->
<body style="background-color: brown")">
<div class="container">
<h1 class="py-10 bg-warning text-center rounded"><i class="fa-solid fa-book-open"></i></> Booking Now</h1>


    <form method="post" action="index2.php">
        <fieldset>
            <legend>Personal Details</legend>
            <div class="row g-3">
            <div class="col-md-4">
            <div class="input-group mb-2">
                <div class="input-group-text"><i class="fa-solid fa-id-badge"></i></div>
               <div><input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Username">
               </div>
            </div>
            </div>
            <div class="col-md-4">
                <div class="input-group mb-2">
                    <div class="input-group-prepend"></div>
                    <div class="input-group-text"><i class="fa-solid fa-earth-americas"></i></div>
                    <select id="inputState" class="form-select">
<!--                        <input type="text" placeholder="Select Type">-->
                        <option selected>Resident</option>
                        <option>Non-Resident</option>
                    </select>
                </div>
            </div>
            </div>

                <div class="col-md-2 py-10px">
                    <div class="input-group mb-2">
                    <label for="date">Visiting Date</label>
                    <input type="date" id="date" name="date">
                </div>
                </div>

<br><br>
            <div class="row g-3">

                <div class="col-md-5">
                    <div class="input-group mb-2">
                        <div class="input-group-text"><i class="fa-solid fa-square-envelope"></i></div>
                        <div><input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Email Address">
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="input-group mb-2">
                        <div class="input-group-text"><i class="fa-solid fa-mobile"></i></div>
                        <div><input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Contact">
                        </div>
                    </div>
                </div>


            </div>
        </fieldset>
        <br>
        <div class="col-12">
            <label for="destination" class="form-label">Select Package</label>
            <select id="inputState" class="form-select" placeholder="Guide">
                <option>Personal Tour Guide</option>
                <option> Group Tour Guide</option>
            </select>
        </div>
<br><br><br>
        <div class="d-grid col-6 mx-auto"><button type="button" class="btn btn-warning btn-lg" "dat-toggle='tooltip' data-placement='bottom' title='Next'"><i class="fa-solid fa-check"></i></button></div>


    </form>
</div>









<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>
</html>
