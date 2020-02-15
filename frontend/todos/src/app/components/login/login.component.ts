import {Component, OnInit} from '@angular/core';
import {Form, FormBuilder, FormControl, FormGroup, Validators} from "@angular/forms";
import {AuthService} from "../../Services/auth.service";
import {Router} from "@angular/router";

@Component({
  selector: 'app-login',
  templateUrl: './login.component.html',
  styleUrls: ['./login.component.css'],
})
export class LoginComponent implements OnInit {

  public loginForm: FormGroup;

  constructor(private formBuilder: FormBuilder, private authService: AuthService, private router: Router) {
    this.loginForm = this.formBuilder.group({
      "email": new FormControl("", [
        Validators.required,
        Validators.email,
      ]), "password": new FormControl("", [
        Validators.required,
        Validators.minLength(4)
      ])
    });
  }

  ngOnInit(): void {
    if(this.authService.isLoggedIn()){
      this.authService.logOut();
    }
  }

  onSubmit(data) {
    if (this.loginForm.valid) {
      this.authService.login(this.email.value, this.password.value).subscribe(
        (val: any) => {
          if (val) {
            console.log(val)
          }
          this.router.navigate(['/']);
        }
      )
    }
  }

  get email() {
    return this.loginForm.get('email');
  }

  get password() {
    return this.loginForm.get('password')
  }
}
