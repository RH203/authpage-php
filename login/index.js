function togglePasswordVisibility() {
  var passwordInput = document.getElementById('password');
  var eyeIcon = document.querySelector('.eye-icon');

  if (passwordInput.type === 'password') {
    passwordInput.type = 'text';
    eyeIcon.style.background = 'url("../assets/icons/eye-hide.png") no-repeat center center';
  } else {
    passwordInput.type = 'password';
    eyeIcon.style.background = 'url("../assets/icons/eye.png") no-repeat center center';
  }
}
