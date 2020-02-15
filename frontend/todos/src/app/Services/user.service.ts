import {Injectable} from '@angular/core';
import {HttpClient, HttpErrorResponse} from "@angular/common/http";
import {User} from "../Model/user";
import {catchError, map} from "rxjs/operators";
import {BehaviorSubject, throwError} from "rxjs";

@Injectable({
  providedIn: 'root'
})
export class UserService {

  private userUrl = "http://localhost:8000/api/user";
  private user: BehaviorSubject<User>;
  private userFetched: BehaviorSubject<boolean>;

  constructor(private http: HttpClient) {
    this.updateUserData();
    this.userFetched = new BehaviorSubject<boolean>(false);
  }

  public getUser() {
    return this.user;
  }

  public updateUserData() {
    return this.getUserFromAPI().pipe(map((user: User) => {
      this.user.next(user);
      this.userFetched.next(true);
      console.log(this.user.value);
    }));
  }

  public getUserFetchObs() {
    return this.userFetched;
  }

  private getUserFromAPI() {
    return this.http.get<User>(this.userUrl + "/info").pipe(catchError(this.handleError));
  }

  private handleError(err: HttpErrorResponse | any) {
    console.error('An error occurred', err);
    return throwError(err.message || err);
  }

}
