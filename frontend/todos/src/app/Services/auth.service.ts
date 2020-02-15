import {Injectable} from '@angular/core';
import {HttpClient} from "@angular/common/http";
import {map} from "rxjs/operators";
import {BehaviorSubject} from "rxjs";

@Injectable({
  providedIn: 'root'
})
export class AuthService {

  private authUrl = "http://localhost:8000/api/auth";
  private authToken: BehaviorSubject<string>;
  private loginObservable: BehaviorSubject<boolean>;

  constructor(private http: HttpClient) {
    this.authToken = new BehaviorSubject<string>(localStorage.getItem("accessToken"))
    this.loginObservable = new BehaviorSubject<boolean>(this.isLoggedIn());
  }

  public login(email: String, pass: String) {
    return this.http.post(this.authUrl + "/login", {"email": email, "password": pass}).pipe(map
      ((data: any) => {
        this.setToken(data.success.token);
      })
    )
  }

  public logOut() {
    this.authToken.next(null);
    this.loginObservable.next(false);
    localStorage.removeItem("accessToken")
  }

  public getAuthTokenValue() {
    return this.authToken.value;
  }

  public getAuthTokenSubject() {
    return this.authToken;
  }

  public getLoginObservable() {
    return this.loginObservable;
  }

  private setToken(token: string) {
    this.authToken.next(token);
    this.loginObservable.next(true);
    localStorage.setItem("accessToken", this.authToken.value)
  }

  isLoggedIn() {
    return this.authToken.value != null;
  }
}
