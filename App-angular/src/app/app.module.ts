import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';

import { AppComponent } from './app.component';
import { HeaderComponent } from './components/pages/menu/header/header.component';
import { FooterComponent } from './components/pages/menu/footer/footer.component';
import { MenuComponent } from './components/pages/menu/menu/menu.component';
import { SettingsComponent } from './components/pages/menu/settings/settings.component';

@NgModule({
  declarations: [
    AppComponent,
    HeaderComponent,
    FooterComponent,
    MenuComponent,
    SettingsComponent
  ],
  imports: [
    BrowserModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
