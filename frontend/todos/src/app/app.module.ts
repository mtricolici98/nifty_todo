import {BrowserModule} from '@angular/platform-browser';
import {NgModule} from '@angular/core';
import {AppComponent} from './app.component';
import {HTTP_INTERCEPTORS, HttpClientModule} from "@angular/common/http";
import {AuthenticationInterceptor} from "./interceptors/authentication.interceptor";
import {LoginComponent} from './components/login/login.component';
import {TopnavComponent} from './components/topnav/topnav.component';
import {TodosComponent} from './components/todos/todos.component';
import {TodoViewComponent} from './components/todo-view/todo-view.component';
import {RegistrationComponent} from './components/registration/registration.component';
import {PageNotFoundComponent} from './components/page-not-found/page-not-found.component';
import {AppRoutingModule} from './app-routing.module';
import {BrowserAnimationsModule} from '@angular/platform-browser/animations';
import {BsDropdownModule} from "ngx-bootstrap";
import {FormsModule, ReactiveFormsModule} from "@angular/forms";
import {LoggedInRouteGuard} from "./logged-in-route-guard.service";


@NgModule({
  declarations: [
    AppComponent,
    LoginComponent,
    TopnavComponent,
    TodosComponent,
    TodoViewComponent,
    RegistrationComponent,
    PageNotFoundComponent,
  ],
  imports: [
    BrowserModule,
    HttpClientModule,
    AppRoutingModule,
    BrowserAnimationsModule,
    FormsModule,
    ReactiveFormsModule,
    BsDropdownModule.forRoot()
  ],
  providers: [{
    provide: HTTP_INTERCEPTORS, useClass: AuthenticationInterceptor, multi: true
  }, LoggedInRouteGuard],
  bootstrap: [AppComponent]
})
export class AppModule {
}
