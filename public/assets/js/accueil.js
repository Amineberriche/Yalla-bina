function myFunction() {
    var x = document.getElementById("aa");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
  }