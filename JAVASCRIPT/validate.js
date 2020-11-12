/**
 * Created by mvandeberg on 22/03/15.
 */

/*
 *Validate Signup form
 */
function validate() {

    /*
    * validate each input value
    * function does not return until all fields have been validated, whether they pass or not
    * success is initialised to true and will be set to false if one or more fields are invalid.
    * */

    var success = true;

    if(!validate_username()){
      success = false;
    }
    if(!validate_firstname()){
      success = false;
    }
    if (!validate_lastname()) {
        success = false;
    }
    if (!validate_email()) {
        success = false;
    }
    if (!validate_password()) {
        success = false;
    }
    if (!confirm_password()) {
        success = false;
    }

    // display validation
    /*
    if (!success) {
        alert("details are incomplete or invalid!\nPlease correct the error.");
    }
    */

    return success;
}


function validate_username() {
  var username = document.getElementById('firstname');
  // var username = document.RegistrationForm.username.value;

  if (username==null || username==""){
    alert("Username can't be blank");
    return false;
  }
  else {
    return true;
  }
}

function validate_firstname() {
  // var firstname = document.getElementById('firstname');
  var firstname = document.RegistrationForm.firstname.value;
  //var firstname_err = document.getElementById('firstname_err');

  ClearError(firstname_err);

  if (firstname==null || firstname==""){
    alert("First Name can't blank");
    return false;
  }

  if (notEmpty(firstname, firstname_err)) {
    return true;
  }

  return false;
}

/*
 * validate the surname field
 */
function validate_lastname() {
    /* declare local variables*/
    var surname = document.getElementById('lastname');
    var surname_err = document.getElementById('lastname_err');

    // clear previous error message
    ClearError(lastname_err);

    // validate it is not null
    if (notEmpty(lastname, lastname_err)) {
        return true;
    }

    return false;
}

/*
 * validate the email address field
 */
function validate_email() {

    /* declare local variables*/
    var email = document.getElementById('email');
    var email_err = document.getElementById('email_err');

    // clear previous error
    ClearError(email_err);

    // validate it is not null
    if (notEmpty(email, email_err)) {

        // validate the format
        if (emailValidator(email, email_err)) {
            return true;
        }

    }

    return false;
}

/*
 * validate the password field
 */
function validate_password() {

    /* declare local variables*/
    var min = 8;
    var max = 50;
    var passwd = document.getElementById('passwd');
    var passwd_err = document.getElementById('passwd_err');

    // clear previous error
    ClearError(passwd_err);


    // validate it is not null
    if (notEmpty(passwd, passwd_err)) {

        // valdiate password length
        if (lengthRestriction(passwd, passwd_err, min, max)) {
            return true;
        }

    }

    return false;
}

/*
 * validate the password and confirm password fields match
 */
function confirm_password() {

    /* declare local variables*/
    var confirm = document.getElementById('confirm');
    var cvalue = document.getElementById('confirm').value;
    var confirm_err = document.getElementById('confirm_err');
    var pvalue = document.getElementById('passwd').value;

    // clear previous error
    ClearError(confirm_err);

    // validate passwaords
    if (cvalue != pvalue) {
        // show span error control and display an error message
        document.getElementById('confirm_err').style.visibility = "visible"
        document.getElementById('confirm_err').innerHTML = "Passwords do not match";
        return false;
    }
    return true;
}

/*
 * general validation functions
 */

/*
 * check the length of an elements value
 * elem		: element being checked
 * elem_err	: element displaying error message
 */
function notEmpty(elem, elem_err) {

    /* check the length of the value */
    if (elem.value.length == 0) {

        // show span error control and display an error message
        document.getElementById(elem_err.id).style.visibility = "visible"
        document.getElementById(elem_err.id).innerHTML = "Field Required";
        return false;
    }
    return true;
}

/*
 * check the elements value contains alphacharater
 * elem		: element being checked
 * elem_err	: element displaying error message
 */
function isAlphabet(elem, elem_err) {

    /* declare local variables*/
    var alphaExp = /^[a-zA-Z]+$/;

    if (elem.value.match(alphaExp)) {
        return true;
    } else {
        // show span error control and display an error message
        document.getElementById(elem_err.id).style.visibility = "visible"
        document.getElementById(elem_err.id).innerHTML = "Cannot contain numbers";
        return false;
    }
}

/*
 * check the elements value is a valid date format
 * elem		: element being checked
 * elem_err	: element displaying error message
 */
function isValidDate(date, elem, elem_err) {

    /* declare local variables*/
    var matches = /^(\d{2})[-\/](\d{2})[-\/](\d{4})$/.exec(date);

    if (matches == null) {
        // show span error control and display an error message
        document.getElementById(elem_err.id).style.visibility = "visible"
        document.getElementById(elem_err.id).innerHTML = "Invalid date format";
        return false;
    }
    return true;
}

/*
 * check the elements value is a valid email format
 * elem		: element being checked
 * elem_err	: element displaying error message
 */
function emailValidator(elem, elem_err) {

    /* declare local variables*/
    var emailExp = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if (elem.value.match(emailExp)) {
        return true;
    } else {
        // show span error control and display an error message
        document.getElementById(elem_err.id).style.visibility = "visible"
        document.getElementById(elem_err.id).innerHTML = "Invalid email";
        return false;
    }
}

/*
 * check the elements value neets a specified range
 * elem		: element being checked
 * elem_err	: element displaying error message
 * min		: min range value
 * max		: max range value
 */
function lengthRestriction(elem, elem_err, min, max) {

    /* declare local variables*/
    var uInput = elem.value;
    if (uInput.length >= min && uInput.length <= max) {
        return true;
    } else {
        // show span error control and display an error message
        document.getElementById(elem_err.id).style.visibility = "visible"
        document.getElementById(elem_err.id).innerHTML = "Min of: " + min + " characters";
        return false;
    }
}

/*
 * Clear an existing error message for an element
 * elem		: element having message cleared
 */
function ClearError(elem) {

    if (typeof (elem) === "string") {
        elem = document.getElementById(elem);
    }

    // hide span error control
    elem.style.visibility = "hidden";
}
