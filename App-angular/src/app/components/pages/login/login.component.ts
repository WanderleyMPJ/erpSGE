import { Component, OnInit } from '@angular/core';
import {Router} from "@angular/router";
import {HttpClient} from "@angular/common/http";


@Component({
  selector: 'login',
  templateUrl: './login.component.html',
  styleUrls: ['./login.component.css']
})
export class LoginComponent implements OnInit {

    title = 'SGE - Sistema de Gestão Empresarial';


    credentials = {
        email: 'admin@user.com',
        password: 'secret'
    }

    showMessageError = false;

    constructor(
       private http: HttpClient,
        private router: Router){

    }

    ngOnInit() {
    }

    submit(){
        //generics - Java
       this.http.post<any>('http://localhost:8000/api/login', this.credentials)
           .subscribe((data) => {
                const token = data.token;
                window.localStorage.setItem('token', token);
                this.router.navigate(['home']);
            }, () => this.showMessageError = true);
        return false;
    }

    reset(){

    }

    register(){

    }

}
