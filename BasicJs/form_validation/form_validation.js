function validateRegisterForm() {
  // alert("hello form");
  // get the value from the form
  var error = 0;

  var name = document.register.name.value;
  var username = document.register.username.value;
  var password = document.register.password.value;
  var repassword = document.register.repassword.value;
  var phone = document.register.phone.value;
  var email = document.register.email.value;
  var year = document.register.year.value;
  var month = document.register.month.value;
  var day = document.register.day.value;
  var country = document.register.country.value;
  var gender = document.register.gender.value;

  var success_msg = "";

  // validate the data with error message

  // validation for name
  if (name.trim() == "") {
    document.getElementById("err_name").innerHTML = "Name is Required";
    document.getElementById("name").focus();
    error++;
  } else {
    document.getElementById("err_name").innerHTML = "";
    success_msg += "Hello " + name + "<br>";
  }

  // validation for username
  if (username.trim() == "") {
    document.getElementById("err_username").innerHTML = "User name is Required";
    document.getElementById("username").focus();
    error++;
  } else {
    if (username.length <= 8) {
      document.getElementById("username").focus();
      document.getElementById("err_username").innerHTML =
        "User Name should be of min 8 character";
      error++;
    } else {
      document.getElementById("err_username").innerHTML = "";
      success_msg += "Hello " + username + "<br>";
    }

    success_msg += "Hello " + name + "<br>";
  }

  // validation for password
  if (password.trim() == "") {
    document.getElementById("err_password").innerHTML = "password is Required";
    document.getElementById("password").focus();
    error++;
  } else if (password.length <= 8) {
    document.getElementById("password").focus();
    document.getElementById("err_password").innerHTML =
      "Password should be of min 8 character";
    error++;
  } else {
    document.getElementById("err_password").innerHTML = "";
    // success_msg+= "Hello "+ password + "<br>";
  }

  // validation for repassword
  if (repassword.trim() == "") {
    document.getElementById("err_repassword").innerHTML = "Re Enter password ";
    document.getElementById("repassword").focus();
    error++;
  } else {
    document.getElementById("err_repassword").innerHTML = "";
  }

  // console.log(password, repassword);
  // validation for password match
  if (repassword != password) {
    document.getElementById("err_repassword").innerHTML =
      "Password Not matched  ";
    document.getElementById("repassword").focus();
    error++;
  } else {
    document.getElementById("err_repassword").innerHTML = "";
    success_msg += "Password is " + password + "<br>";
  }

  // validation for phone // 9804493112 ncell // 9867580017 ntc
  var phone_pattern = /^(98[0-3]{1}[0-9]{7}|98[4-6]{1}[0-9]{7})$/;
  if (phone.trim() == "") {
    document.getElementById("err_phone").innerHTML = "Phone No is required ";
    document.getElementById("phone").focus();
    error++;
  } else if (!phone_pattern.test(phone)) {
    error++;
    document.getElementById("err_phone").innerHTML =
      "Phone No must be in number format with 10 digit starting with 98 ";
  } else if (phone.length < 10) {
    document.getElementById("err_phone").innerHTML =
      "Phone No must be 10 digit ";
    error++;
  } else {
    document.getElementById("err_phone").innerHTML = "";
    success_msg += "Phone no  is " + phone + "<br>";
  }

  // validation for email
  var email_pattern = /\S+@\S+\.\S+/;
  if (email.trim() == "") {
    document.getElementById("err_email").innerHTML = "email No is required ";
    document.getElementById("email").focus();
    error++;
  } else if (!email_pattern.test(email)) {
    error++;
    document.getElementById("err_email").innerHTML = "Enter valid email";
    document.getElementById("email").focus();
  } else {
    document.getElementById("err_email").innerHTML = "";
    success_msg += "Email  is " + email + "<br>";
  }

  // // dob validation
  var year_pattern = /^([0-9]{4})$/;
  var month_pattern = /^(0?[1-9]|1[012])$/;
  var day_pattern = /[1-9]|[12]\d|3[01]$/;

  if (year.trim() == "" || month.trim() == "" || day.trim() == "") {
    document.getElementById("err_dob").innerHTML = "DOB is required ";
    document.getElementById("year").focus();
    error++;
  } else if (!year_pattern.test(year)) {
    error++;
    document.getElementById("err_dob").innerHTML = "Enter valid year ";
  } else if (!month_pattern.test(month)) {
    error++;
    document.getElementById("err_dob").innerHTML = "Enter valid month";
    document.getElementById("month").focus();
  } else if (!day_pattern.test(day)) {
    error++;
    document.getElementById("err_dob").innerHTML = "Enter valid day";
    document.getElementById("day").focus();
  } else {
    document.getElementById("err_dob").innerHTML = "";
    success_msg += "DOB is " + year + "/" + month + "/" + day + "<br>";
  }

  // validation for country
  if (document.register.country.selectedIndex == 0) {
    document.getElementById("err_country").innerHTML = "Select Country ";
    document.getElementById("country").focus();
    error++;
  } else {
    document.getElementById("err_country").innerHTML = "";
    success_msg += "Country is " + country + "<br>";
  }

  // validation for gender
  if (
    document.register.gender[0].checked == false &&
    document.register.gender[1].checked == false
  ) {
    document.getElementById("err_gender").innerHTML = "Select gender ";
    // document.getElementById('gender_m').focus();
    error++;
  } else {
    document.getElementById("err_gender").innerHTML = "";
    success_msg += "gender is " + gender + "<br>";
  }

  // validation for checkbox
  // if(!document.register.faculty[].checked){
  //     document.getElementById('err_faculty').innerHTML="Select at least one faculty ";
  //     error++;
  // }
  var faculty_checkbox = document.querySelector(
    'input[name="faculty[]"]:checked'
  );
  if (!faculty_checkbox) {
    document.getElementById("err_faculty").innerHTML =
      "Select at least one faculty ";
  } else {
    document.getElementById("err_faculty").innerHTML = "";
  }

  // validation for checkbox
  if (!document.register.terms.checked) {
    document.getElementById("err_terms").innerHTML =
      "Please Accept Terms and Condition ";
    error++;
  } else {
    document.getElementById("err_terms").innerHTML = "";
  }

  // now  check if there is error and return value
  if (error > 0) {
    return false;
  } else {
    document.write(success_msg);
  }
}
