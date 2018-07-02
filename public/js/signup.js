document.body.onload = () => {
  const { signupForm } = document.forms

  signupForm.onsubmit = function onFormSubmit() {
    return validateSignupForm()
  }

  function validateSignupForm() {
    const { email, password, password_confirmation,
     nombre, apellido, termsCondition } = signupForm.elements

    if (!validateEmail(email.value)) return false
    if (!validatePassword(password.value)) return false
    if (!validatePasswordRepeat(password.value, password_confirmation.value)) return false
    if (!validateNombre(nombre.value)) return false
    if (!validateApellido(apellido.value)) return false
    if (!validateTermsCondition(termsCondition.checked)) return false

    return true
  }

  function validateEmail(email) {
    var re = /^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/
    if (re.test(email)) return true

    swal('Error', 'Ingrese un email válido', 'error')
    return false
  }

  function validatePassword(password) {
    const re = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{6,}$/
    if (re.test(password)) return true

    swal('Error', 'Ingrese una contraseña válida', 'error')
    return false
  }

  const validatePasswordRepeat = (password, repeat) => {
    if (password === repeat) return true

    swal('Error', 'Las contraseñas no son iguales', 'error')
    return false
  }

  function validateNombre(nombre) {
    if (nombre.length > 0) return true

    swal('Error', 'Ingrese su nombre', 'error')
    return false
  }

  function validateApellido(apellido) {
    if (apellido.length > 0) return true

    swal('Error', 'Ingrese su apellido', 'error')
    return false
  }

  function validateTermsCondition(termsConditionChecked) {
    if (termsConditionChecked) return true

    swal('Error', 'Debe aceptar los términos y condiciones', 'error')
    return false
  }

}
