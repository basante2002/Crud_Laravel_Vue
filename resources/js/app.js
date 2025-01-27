import './bootstrap';
import { createApp } from 'vue'; 

import CilinicTable from './Components/Clinic/ClinicTable.vue'
import ClinicForm from './Components/Clinic/ClinicForm.vue'
import PatientTable from './Components/Patient/PatientTable.vue'
import PatientForm from './Components/Patient/PatientForm.vue'

const app = createApp({});

app.component('clinic-table',CilinicTable)
app.component('clinic-form',ClinicForm)
app.component('patient-table',PatientTable)
app.component('patient-form',PatientForm)

app.mount('#app')