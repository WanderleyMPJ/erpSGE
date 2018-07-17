import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';

import {FormsModule} from "@angular/forms";


import { HeaderComponent } from './components/pages/menu/header/header.component';
import { FooterComponent } from './components/pages/menu/footer/footer.component';
import { MenuComponent } from './components/pages/menu/menu/menu.component';
import { SettingsComponent } from './components/pages/menu/settings/settings.component';
import { HomeComponent } from './components/pages/home/home.component';
import { LoginComponent } from './components/pages/login/login.component';
import {AppRoutingModule} from "./app-routing.module";
import { WelcomeComponent } from './components/pages/welcome/welcome.component';
import {HttpClientModule} from "@angular/common/http";
import {AppComponent} from "./app.component";

@NgModule({
  declarations: [
    AppComponent,
    HeaderComponent,
    FooterComponent,
    MenuComponent,
    SettingsComponent,
    HomeComponent,
    LoginComponent,
    WelcomeComponent

  ],
  imports: [
    BrowserModule,
      FormsModule,
      HttpClientModule,
      AppRoutingModule,
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
