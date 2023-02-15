import './bootstrap';
import '../css/app.css'; 

import { createApp } from 'vue'
import App from './App.vue'
import router from './router'
import Error from "@/components/Error.vue";
import Spin from "@/components/Spin.vue";
import { createPinia } from "pinia";
import Vue3EasyDataTable from "vue3-easy-data-table";
import "vue3-easy-data-table/dist/style.css";
import * as ConfirmDialog from "vuejs-confirm-dialog";

const pinia = createPinia()

const app = createApp(App)

app.use(router)
app.use(pinia);
app.use(ConfirmDialog);
app.component("EasyDataTable", Vue3EasyDataTable);
app.component("Error", Error);
app.component("Spin", Spin);
app.mount('#app')
