

function validate(){
  var success = true;

  if (!validate_firstName()){
    success = false;
  }
  if (!validate_lastName()){
    success = false;
  }
  if (!validate_email()){
    success = false;
  }
  if (!validate_password()){
    success = false;
  }
  if (!validate_confirmPassword()){
    success = false;
  }

  return success;

}

function validate_firstname(){
  var firstName = document.getElementById('firstName');
  var firstName_err = document.getElementById('firstName_err');

  // clear previous error Message
  ClearError(firstName_err);

  // validate it is not null
  if(notEmpty(firstName, firstName_err)){
    return true;
  }

  return false;
}
