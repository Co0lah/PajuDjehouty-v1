import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';

import { AddPatientComponent } from './patient/add-patient/add-patient.component';
import { ListPatientComponent } from './patient/list-patient/list-patient.component';
import { AddMedecinComponent } from './medecin/add-medecin/add-medecin.component';
import { ListMedecinComponent } from './medecin/list-medecin/list-medecin.component';
import { AddCategorieComponent } from './categorie/add-categorie/add-categorie.component';
import { ListCategorieComponent } from './categorie/list-categorie/list-categorie.component';
import { AddDomaineComponent } from './domaine/add-domaine/add-domaine.component';
import { ListDomaineComponent } from './domaine/list-domaine/list-domaine.component';
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

const routes: Routes = [
  {
    path: '', component: TemplateComponent, children: [
      { path: 'patient', component: AddPatientComponent },
      { path: 'patients', component: ListPatientComponent },
      { path: 'medecin', component: AddMedecinComponent },
      { path: 'medecins', component: ListMedecinComponent },
      { path: 'categorie', component: AddCategorieComponent },
      { path: 'categories', component: ListCategorieComponent },

      { path: 'domaine', component: AddDomaineComponent },
      { path: 'domaines', component: ListDomaineComponent },
      { path: 'specialite', component: AddSpecialiteComponent },
      { path: 'specialites', component: ListSpecialiteComponent },
      { path: 'consultation', component: AddConsultationComponent },
      { path: 'consultations', component: ListConsultationComponent },

      { path: 'rdv', component: AddRdvComponent },
      { path: 'rdvs', component: ListRdvComponent },
      { path: 'horaire', component: AddHoraireComponent },
      { path: 'horaires', component: ListHoraireComponent },
      { path: 'reglement', component: AddReglementComponent },
      { path: 'reglements', component: ListReglementComponent },

      { path: 'medicament', component: AddMedicamentComponent },
      { path: 'medicaments', component: ListMedicamentComponent },
      { path: 'ordonnance', component: AddOrdonnanceComponent },
      { path: 'ordonnances', component: ListOrdonnanceComponent },
      { path: 'qualite', component: AddQualiteComponent },
      { path: 'qualites', component: ListQualiteComponent },
    ]
  }
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
