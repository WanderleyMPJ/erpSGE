import { Component } from '@angular/core';
import pace from 'pace';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent {
  title = 'SGE - Sistema de Gestão Empresarial';

    ngOnInit(): void{
        pace.start({
            document: false
        })
    }
}
