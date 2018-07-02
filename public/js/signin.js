document.body.onload = () => {
  const { signupForm } = document.forms

  signinForm.onsubmit = function onFormSubmit() {
    return validateSigninForm()
  }

  function validateSigninForm() {
    const { email, password } = signinForm.elements

    if (!validateEmail(email.value)) return false
    if (!validatePassword(password.value)) return false

    return true
  }

  function validateEmail(email) {
    var re = /^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/
    if (re.test(email)) return true

    swal('Error', 'El mail ingresado no es un email válido', 'error')
    return false
  }

  function validatePassword(password) {
    if (password) return true

    swal('Error', 'Ingrese una contraseña', 'error')
    return false
  }



}