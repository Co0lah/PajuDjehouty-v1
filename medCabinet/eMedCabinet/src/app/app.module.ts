import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';

import { AddPatientComponent } from './patient/add-patient/add-patient.component';
import { ListPatientComponent } from './patient/list-patient/list-patient.component';
import { ListMedecinComponent } from './medecin/list-medecin/list-medecin.component';
import { AddMedecinComponent } from './medecin/add-medecin/add-medecin.component';
import { AddCategorieComponent } from './categorie/add-categorie/add-categorie.component';
import { ListCategorieComponent } from './categorie/list-categorie/list-categorie.component';
import { ListDomaineComponent } from './domaine/list-domaine/list-domaine.component';
import { AddDomaineComponent } from './domaine/add-domaine/add-domaine.component';
import { AddSpecialiteComponent } from './specialite/add-specialite/add-specialite.component';
import { ListSpecialiteComponent } from './specialite/list-specialite/list-specialite.component';
import { AddConsultationComponent } from './consultation/add-consultation/add-consultation.component';
import { ListConsultationComponent } from './consultation/list-consultation/list-consultation.component';
import { AddRdvComponent } from './rdv/add-rdv/add-rdv.component';
import { ListRdvComponent } from './rdv/list-rdv/list-rdv.component';
import { AddHoraireComponent } from './horaire/add-horaire/add-horaire.component';
import { ListHoraireComponent } from './horaire/list-horaire/list-horaire.component';
import { AddReglementComponent } from './reglement/add-reglement/add-reglement.component';
import { ListReglementComponent } from './reglement/list-reglement/list-reglement.component';
import { AddMedicamentComponent } from './medicament/add-medicament/add-medicament.component';
import { ListMedicamentComponent } from './medicament/list-medicament/list-medicament.component';
import { AddOrdonnanceComponent } from './ordonnance/add-ordonnance/add-ordonnance.component';
import { ListOrdonnanceComponent } from './ordonnance/list-ordonnance/list-ordonnance.component';
import { AddQualiteComponent } from './qualite/add-qualite/add-qualite.component';
import { ListQualiteComponent } from './qualite/list-qualite/list-qualite.component';

import { TemplateComponent } from './template/template.component';
import { BrowserAnimationsModule } from '@angular/platform-browser/animations';
import { MatToolbarModule } from '@angular/material/toolbar';


@NgModule({
  declarations: [
    AppComponent,
    AddPatientComponent,
    ListPatientComponent,
    ListMedecinComponent,
    AddMedecinComponent,
    AddCategorieComponent,
    ListCategorieComponent,
    ListDomaineComponent,
    AddDomaineComponent,
    AddSpecialiteComponent,
    ListSpecialiteComponent,
    AddConsultationComponent,
    ListConsultationComponent,
    AddRdvComponent,
    ListRdvComponent,
    AddHoraireComponent,
    ListHoraireComponent,
    AddReglementComponent,
    ListReglementComponent,
    AddMedicamentComponent,
    ListMedicamentComponent,
    AddOrdonnanceComponent,
    ListOrdonnanceComponent,
    AddQualiteComponent,
    ListQualiteComponent,
    TemplateComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    BrowserAnimationsModule,
    MatToolbarModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
