
export default class FormValidator {

  userValidation = (user, action) => {
    this.formValid = {
      formValid: true,
      fieldErrors: []
    };

    if (action === 'edit' && user.password !== '' && user.password.length < 5) {
      this.pushError('Password');
    }

    if (user.name.length < 5) {
      this.pushError('Name');
    }

    if (user.username.length < 5) {
      this.pushError('Username');
    }

    if (action === 'add' && user.password.length < 5) {
      this.pushError('Password');
    }

    if (user.roleId === '-1') {
      this.pushError('Role');
    }

    return this.formValid;
  }

  timezoneValidation = (timezone) => {
    this.formValid = {
      formValid: true,
      fieldErrors: []
    };
    let diff = parseInt(timezone.differenceGMT)
    if (isNaN(diff) || diff < -12 || diff > 14) {
      this.pushError('GMT Difference');
    }

    if (timezone.name.length < 2) {
      this.pushError('Name');
    }

    if (timezone.city.length < 2) {
      this.pushError('City');
    }
    return this.formValid;
  }

  pushError = (field) => {
    this.formValid.formValid = false;
    this.formValid.fieldErrors.push({
      message: `${field} is invalid`
    });
  }
}