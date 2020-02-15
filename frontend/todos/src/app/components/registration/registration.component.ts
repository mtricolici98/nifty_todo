import {Component, OnInit} from '@angular/core';
import {AbstractControl, FormBuilder, FormControl, FormGroup, ValidationErrors, Validators} from "@angular/forms";

@Component({
  selector: 'app-registration',
  templateUrl: './registration.component.html',
  styleUrls: ['./registration.component.css']
})
export class RegistrationComponent implements OnInit {

  public registrationForm: FormGroup;

  constructor(private formBuilder: FormBuilder) {
    this.registrationForm = this.formBuilder.group({
      "email": new FormControl("", [
        Validators.required,
        Validators.email,
      ]), "name": new FormControl("", [
        Validators.required,
      ]), "password": new FormControl("", [
        Validators.required,
        Validators.minLength(8),
      ]), "c_password": new FormControl("", [
        Validators.required,
        Validators.minLength(8),
        this.validatePasswords
      ])
    });
  }

  ngOnInit(): void {
  }

  onSubmit(data) {
    if (this.registrationForm.valid) {
      console.log(data)
    }
  }

  get name() {
    return this.registrationForm.get('name');
  }

  get email() {
    return this.registrationForm.get('email');
  }

  get password() {
    return this.registrationForm.get('password')
  }

  get c_password() {
    return this.registrationForm.get('c_password')
  }

  validatePasswords(
    control: FormControl
  ): ValidationErrors {
    if(control.parent === undefined)
      return null;
    console.log(control.parent);
    return control.parent.value['password'] !== control.value ? {"passwordUnmatched": true} : null;
  }

}
