<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Booking Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <script src="https://kit.fontawesome.com/e96a554ea8.js" crossorigin="anonymous"></script>
</head>
<body style="background-color: lightblue;">
<div class="container">
<h1 class="py-10 bg-warning text-center rounded"><i class="fa-solid fa-book-open"></i></> Booking Now</h1>
<div class="wrapper ">

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
        <div class="d-grid col-6 mx-auto">
                <button type="button" class="btn btn-warning btn-lg" "dat-toggle='tooltip' data-placement='bottom'
            title='Next'"><i class="fa-solid fa-check"></i></button>
        </div>


    </form>
</div>

<!--        <fieldset>-->
<!--            <label> Booked Individuals</label>-->
<!--            <div class="row g-3">-->
<!--            <div class="col-md-4">-->
<!--                <div class="input-group mb-2">-->
<!--                    <div class="input-group-text"><i class="fa-solid fa-id-badge"></i></div>-->
<!--                    <div><input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Name">-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-md-4">-->
<!--<!--                <div class="input-group mb-2">-->-->
<!--                <label for="inputState" class="form-label">Select Age</label>-->
<!--                <select id="inputState" class="form-select">-->
<!--<!--                    <select id="idage" name="age">-->-->
<!--                        <option value="0-5 Years">0-5 Years</option>-->
<!--                        <option value="10-18 Years">10-18 Years</option>-->
<!--                        <option value="Adult">Above 18 Years</option>-->
<!--                        <option value="Aged">Below 60</option>-->
<!--                    </select>-->
<!--                </div>-->
<!--            <fieldset class="col-md-4">-->
<!--                <legend class="col-form-label col-sm-2 pt-0">Gender</legend>-->
<!--                <div class="col-sm-10">-->
<!--                    <div class="form-check">-->
<!--                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>-->
<!--                        <label class="form-check-label" for="gridRadios1">-->
<!--                            Female-->
<!--                        </label>-->
<!--                    </div>-->
<!--                    <div class="form-check">-->
<!--                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">-->
<!--                        <label class="form-check-label" for="gridRadios2">-->
<!--                            Male-->
<!--                        </label>-->
<!--                    </div>-->
<!--                    <div class="form-check">-->
<!--                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3">-->
<!--                        <label class="form-check-label" for="gridRadios3">-->
<!--                            Prefer Not to Say-->
<!--                        </label>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!---->
<!--        </fieldset>-->
<!--        </div>-->
<!--<div class="d-flex">-->
<!--<!--    <button id="btn-create", class="btn btn-success",text="Create" name="create"">"<i class="fa-solid fa-mobile"</button>-->-->
<!--    <button type="button" class="btn btn-warning" "dat-toggle='tooltip' data-placement='bottom' title='Create'"><i class="fa-solid fa-plus"></i></button>-->
<!--    <button type="button" class="btn btn-warning" "dat-toggle='tooltip' data-placement='bottom' title='View'"><i class="fa-solid fa-eye"></i></button>-->
<!--    <button type="button" class="btn btn-warning" "dat-toggle='tooltip' data-placement='bottom' title='View'"><i class="fa-solid fa-trash-can"></i></button>-->
<!---->
<!--   -->
<!---->
<!---->
<!--</div>-->

    </form>
</div>








<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>
</html>
