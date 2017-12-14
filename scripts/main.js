function confirmNAPassword() {
  var password = document.forms["NewAccount"]["napswd"].value;
  var confirm = document.forms["NewAccount"]["napswdcheck"].value;
  if (password != confirm) {
    alert("Passwords do not match!");
    return false;
  }
  return true;
}
