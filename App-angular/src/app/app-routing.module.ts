import {RouterModule, Routes} from "@angular/router";
import {NgModule} from "@angular/core";
import {LoginComponent} from "./components/pages/login/login.component";
import {WelcomeComponent} from "./components/pages/welcome/welcome.component";
import {HomeComponent} from "./components/pages/home/home.component";

const routes: Routes = [
    {
        path: 'welcome', component: WelcomeComponent
    },
    {
        path: 'login', component: LoginComponent
    },
    {
        path: '',
        redirectTo: '/welcome',
        pathMatch: 'full'
    },
    {
        path: 'home', component: HomeComponent
    },
]
@NgModule({
    imports: [RouterModule.forRoot(routes,{enableTracing: true})],
    exports: [RouterModule]
})
export class AppRoutingModule { }
