function ADsignout() {
  var request = new XMLHttpRequest();

  request.onreadystatechange = function () {
    if (request.readyState == 4) {
      var text5 = request.responseText;
      if (text5 == "success") {
        window.location = "adminSign.php";
      } else {
        alert(text5);
      }
    }
  };

  request.open("GET", "ADSignoutProcess.php", true);
  request.send();
}

var av;
function adminVerification() {
  var email = document.getElementById("e");

  var adminForm = new FormData();
  adminForm.append("e", email.value);

  var req = new XMLHttpRequest();

  req.onreadystatechange = function () {
    if (req.readyState == 4) {
      var t = req.responseText;
      if (t == "success") {
        var adminVerificationModal =
          document.getElementById("veriFicationModal");
        av = new bootstrap.Modal(adminVerificationModal);
        av.show();
      } else {
        window.location = "adminSign.php";
      }
    }
  };
  req.open("POST", "adminVeriFicationProcess.php", true);
  req.send(adminForm);
}

function verify() {
  var VeriFication = document.getElementById("vCode");

  var req = new XMLHttpRequest();

  req.onreadystatechange = function () {
    if (req.readyState == 4) {
      var t = req.responseText;
      if (t == "success") {
        av.hide();
        window.location = "adminpanel.php";
      } else {
        window.location = "adminSign.php";
      }
    }
  };
  req.open("GET", "veriFicationProcess.php?v=" + VeriFication.value, true);
  req.send();
}

function addProduct() {
  var image = document.getElementById("imageuploder");

  var form = new FormData();

  var file_count = image.files.length;

  for (var x = 0; x < file_count; x++) {
    form.append("img" + x, image.files[x]);
  }

  var request = new XMLHttpRequest();

  request.onreadystatechange = function () {
    if (request.readyState == 4) {
      var text7 = request.responseText;

      if (text7 == "Image Saved Successfully") {
        window.location.reload();
        document.getElementById("addmsg").innerHTML = text7;
        document.getElementById("addmsg").className =
          "bi bi-check2-circle fs-5";
        document.getElementById("addalertdiv").className =
          "alert alert-success";
        document.getElementById("addmsgdiv").className = "d-block";
      } else {
        document.getElementById("addmsg").innerHTML = text7;
        document.getElementById("addmsg").className =
          "bi bi-x-octagon-fill fs-5";
        document.getElementById("addalertdiv").className = "alert alert-danger";
        document.getElementById("addmsgdiv").className = "d-block";
      }
    }
  };
  request.open("POST", "Addallprocess.php", true);
  request.send(form);
}

function addAmpProduct() {
  var image = document.getElementById("imageuploder");

  var form = new FormData();

  var file_count = image.files.length;

  for (var x = 0; x < file_count; x++) {
    form.append("img" + x, image.files[x]);
  }

  var request = new XMLHttpRequest();

  request.onreadystatechange = function () {
    if (request.readyState == 4) {
      var text8 = request.responseText;

      if (text8 == "Image Saved Successfully") {
        window.location.reload();
        document.getElementById("addmsg").innerHTML = text8;
        document.getElementById("addmsg").className =
          "bi bi-check2-circle fs-5";
        document.getElementById("addalertdiv").className =
          "alert alert-success";
        document.getElementById("addmsgdiv").className = "d-block";
      } else {
        document.getElementById("addmsg").innerHTML = text8;
        document.getElementById("addmsg").className =
          "bi bi-x-octagon-fill fs-5";
        document.getElementById("addalertdiv").className = "alert alert-danger";
        document.getElementById("addmsgdiv").className = "d-block";
      }
    }
  };
  request.open("POST", "Addampprocess.php", true);
  request.send(form);
}

function addAudProduct() {
  var image = document.getElementById("imageuploder");

  var form = new FormData();

  var file_count = image.files.length;

  for (var x = 0; x < file_count; x++) {
    form.append("img" + x, image.files[x]);
  }

  var request = new XMLHttpRequest();

  request.onreadystatechange = function () {
    if (request.readyState == 4) {
      var text9 = request.responseText;

      if (text9 == "Image Saved Successfully") {
        window.location.reload();
        document.getElementById("addmsg").innerHTML = text9;
        document.getElementById("addmsg").className =
          "bi bi-check2-circle fs-5";
        document.getElementById("addalertdiv").className =
          "alert alert-success";
        document.getElementById("addmsgdiv").className = "d-block";
      } else {
        document.getElementById("addmsg").innerHTML = text9;
        document.getElementById("addmsg").className =
          "bi bi-x-octagon-fill fs-5";
        document.getElementById("addalertdiv").className = "alert alert-danger";
        document.getElementById("addmsgdiv").className = "d-block";
      }
    }
  };
  request.open("POST", "Addaudprocess.php", true);
  request.send(form);
}

function addYTProduct() {
  var image = document.getElementById("imageuploder");
  var link = document.getElementById("link");

  var form = new FormData();
  form.append("link", link.value);

  var file_count = image.files.length;

  for (var x = 0; x < file_count; x++) {
    form.append("img" + x, image.files[x]);
  }

  var request = new XMLHttpRequest();

  request.onreadystatechange = function () {
    if (request.readyState == 4) {
      var text10 = request.responseText;

      if (text10 == "Image Saved Successfully") {
        window.location.reload();
        document.getElementById("addmsg").innerHTML = text10;
        document.getElementById("addmsg").className =
          "bi bi-check2-circle fs-5";
        document.getElementById("addalertdiv").className =
          "alert alert-success";
        document.getElementById("addmsgdiv").className = "d-block";
      } else {
        document.getElementById("addmsg").innerHTML = text10;
        document.getElementById("addmsg").className =
          "bi bi-x-octagon-fill fs-5";
        document.getElementById("addalertdiv").className = "alert alert-danger";
        document.getElementById("addmsgdiv").className = "d-block";
      }
    }
  };
  request.open("POST", "Addytprocess.php", true);
  request.send(form);
}

function addLEDProduct() {
  var image = document.getElementById("imageuploder");

  var form = new FormData();

  var file_count = image.files.length;

  for (var x = 0; x < file_count; x++) {
    form.append("img" + x, image.files[x]);
  }

  var request = new XMLHttpRequest();

  request.onreadystatechange = function () {
    if (request.readyState == 4) {
      var text12 = request.responseText;

      if (text12 == "Image Saved Successfully") {
        window.location.reload();
        document.getElementById("addmsg").innerHTML = text12;
        document.getElementById("addmsg").className =
          "bi bi-check2-circle fs-5";
        document.getElementById("addalertdiv").className =
          "alert alert-success";
        document.getElementById("addmsgdiv").className = "d-block";
      } else {
        document.getElementById("addmsg").innerHTML = text12;
        document.getElementById("addmsg").className =
          "bi bi-x-octagon-fill fs-5";
        document.getElementById("addalertdiv").className = "alert alert-danger";
        document.getElementById("addmsgdiv").className = "d-block";
      }
    }
  };
  request.open("POST", "Addledprocess.php", true);
  request.send(form);
}

function changeProductimg() {
  var image = document.getElementById("imageuploder");

  image.onchange = function () {
    var file_count = image.files.length;

    if (file_count <= 3) {
      for (var x = 0; x < file_count; x++) {
        var file = this.files[x];
        var url = window.URL.createObjectURL(file);

        document.getElementById("i" + x).src = url;
      }
    } else {
      alert("Please Select 3 images or Less than 3 images ");
    }
  };
}

function feedbackpro() {
  var name = document.getElementById("name");
  var email = document.getElementById("email");
  var feed = document.getElementById("feedback");

  var form = new FormData();

  form.append("name", name.value);
  form.append("email", email.value);
  form.append("feedback", feed.value);

  var request = new XMLHttpRequest();

  request.onreadystatechange = function () {
    if (request.readyState == 4 && request.status == 200) {
      var text15 = request.responseText;

      if (text15 == "Submitted Successfully") {
        window.location.reload();
        document.getElementById("addmsg").innerHTML = text15;
        document.getElementById("addmsg").className =
          "bi bi-check2-circle fs-5";
        document.getElementById("addalertdiv").className =
          "alert alert-success";
        document.getElementById("addmsgdiv").className = "d-block";
      } else {
        document.getElementById("addmsg").innerHTML = text15;
        document.getElementById("addmsg").className =
          "bi bi-x-octagon-fill fs-5";
        document.getElementById("addalertdiv").className = "alert alert-danger";
        document.getElementById("addmsgdiv").className = "d-block";
      }
    } else {
    }
  };

  request.open("POST", "feedbackProcess.php", true);
  request.send(form);
}

function UpdatePortfolio() {
  var years = document.getElementById("years");
  var customer = document.getElementById("cus");
  var projects = document.getElementById("projects");
  var research = document.getElementById("re");

  var form = new FormData();
  form.append("years", years.value);
  form.append("cus", customer.value);
  form.append("projects", projects.value);
  form.append("re", research.value);

  var request = new XMLHttpRequest();

  request.onreadystatechange = function () {
    if (request.readyState == 4) {
      var text6 = request.responseText;
      if (text6 == "success") {
        window.location.reload();
        document.getElementById("addmsg").innerHTML = text6;
        document.getElementById("addmsg").className =
          "bi bi-check2-circle fs-5";
        document.getElementById("addalertdiv").className =
          "alert alert-success";
        document.getElementById("addmsgdiv").className = "d-block";
      } else {
        document.getElementById("addmsg").innerHTML = text6;
        document.getElementById("addmsg").className =
          "bi bi-x-octagon-fill fs-5";
        document.getElementById("addalertdiv").className = "alert alert-danger";
        document.getElementById("addmsgdiv").className = "d-block";
      }
    }
  };

  request.open("POST", "UpdatePortfolio.php", true);
  request.send(form);
}
