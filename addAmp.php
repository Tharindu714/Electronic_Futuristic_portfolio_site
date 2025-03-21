<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Amplifier Photos </title>

  <link rel="stylesheet" href="mystyle.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
<link rel="stylesheet" href="bootstrap.css">

    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon" />
    <link rel="icon" href="images/favicon.png" type="image/x-icon" />

</head>

<body style="background-image:url(images/main-slider/13.jpg)">
  <div class="container-fluid">
    <div class="row gy-3">
    <?php
session_start();
require "connection.php";

if (isset($_SESSION["Aduser"])) {

?>
        <hr class="border border-1 border-light" />

        <div class="col-12 mt-1">
          <div class="row">
            <div class="col-12 text-center bg-dark">
              <h2 class=" text-primary title1 fw-bolder mb-1 ">ADD Amplifier PHOTOS</h2>
            </div>
            <hr class="border border-1 border-light" />
            <div class="col-12">

                <div class="col-12">
                  <div class="row">

                    <div class="col-12">
                      <div class="row">

                        <div class="col-12">
                          <div class="row">


                            <div class="col-12">
                              <div class="row">
                                <div class="col-12 text-center">
                                  <label class="form-label fw-bold text-light text-uppercase" style="font-size:20px;">Add Amplifier Images</label>
                                </div>

                                <div class="col-9 offset-3">
                                  <div class="row gap-2">
                                    <div class="col-3 border border-success rounded">
                                      <img src="images/addproductimg.svg" class="img-fluid bg-transparent" style="width:200px; height:300px;" id="i0" />
                                    </div>

                                    <div class="col-3 border border-success rounded">
                                      <img src="images/addproductimg.svg" class="img-fluid bg-transparent" style="width:200px; height:300px;" id="i1" />
                                    </div>

                                    <div class="col-3 border border-success rounded">
                                      <img src="images/addproductimg.svg" class="img-fluid bg-transparent" style="width:200px; height:300px;" id="i2" />
                                    </div>
                                  </div>
                                </div>
                                <div class="offset-lg-3 col-12 col-lg-7 d-grid mt-3">
                                  <input type="file" class="d-none" id="imageuploder" multiple />
                                  <label for="imageuploder" class="col-12 btn btn-outline-success border border-3 border-success text-uppercase fw-bold" onclick="changeProductimg();">Upload Images</label>
                                </div>
                              </div>
                            </div>
                            <br>
                            <div class="col-12 text-center">
                              <div class="offset-lg-3 col-12 col-lg-7 d-grid mt-3 mb-3">
                                <button class="btn btn-outline-primary fw-bold" onclick="addAmpProduct();">ADD & SAVE</button>
                              </div>

                              <div class="offset-lg-3 col-12 col-lg-7 d-grid mt-3 mb-3">
                                <button class="btn btn-outline-danger fw-bold" onclick='window.location = "adminpanel.php"'>Back to Admin Dashboard</button>
                              </div>
                            </div>

                          </div>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>

              </div>


            </div>
          </div>

        </div>
    </div>

    <div class="col-12 d-none" id="addmsgdiv">
      <div class="alert alert-success" role="alert" id="addalertdiv">
        <i class="bi bi-check2-circle fs-5" id="addmsg">

        </i>
      </div>
    </div>

    <?php
} else {
    header("location:adminpanel.php");
}
?>

  </div>
  </div>

  <script src="main.js"></script>
  <script src="bootstrap.bundle.js"></script>
</body>

</html>