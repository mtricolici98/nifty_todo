import {Component, OnInit} from '@angular/core';
import {AuthService} from "../../Services/auth.service";

@Component({
  selector: 'app-topnav',
  templateUrl: './topnav.component.html',
  styleUrls: ['./topnav.component.css']
})
export class TopnavComponent implements OnInit {

  isLoggedIn;


  constructor(private authService: AuthService) {
    this.isLoggedIn = false;
  }

  ngOnInit(): void {
    this.isLoggedIn = this.authService.isLoggedIn();
    this.authService.getLoginObservable().subscribe((val: boolean) => {
      this.isLoggedIn = val;
    })
  }

  public logOut(): void {
    this.authService.logOut();
  }

}
