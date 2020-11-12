

function validate (Register) {

  // if (Register.username.value == "1") {
  //   window.alert ("No username entered.");
  //   return false;
  // }

  
  return true;
}


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
