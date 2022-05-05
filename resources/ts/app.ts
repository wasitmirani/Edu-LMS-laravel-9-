require('./bootstrap');

import { createApp } from "vue";
import router from "./router";


const app =createApp({
    mounted(){
    }
});
app.use(router).mount('#app');
