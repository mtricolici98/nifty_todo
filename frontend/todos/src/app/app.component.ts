import {Component, OnInit} from '@angular/core';
import {AuthService} from "./Services/auth.service";
import {UserService} from "./Services/user.service";
import {User} from "./Model/user";

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent implements OnInit {
  title = 'todos';

  constructor(private authService: AuthService, private userService: UserService) {

  }

  ngOnInit() {
    console.log(this.userService.getUser());
  }

}
