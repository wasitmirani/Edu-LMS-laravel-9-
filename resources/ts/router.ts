// require('./helper');
import { createRouter, createWebHistory } from 'vue-router'



let getComponent=(file_name:String)=>{
    const route=import(`./vue/backend/pages/${file_name}Component.vue`);
    return route;
}




const routes = [
    // { path: "/:catchAll(.*)",
    // name: "NotFound",
    // component: () => getComponent("error/404") },
    // { path: "/unauthorized/user", component: () => setComponent("error/401"),name: "unauthorized" },
    {
        path: "/",
        redirect: { path: '/home/dashboard' }
    },
    {
        path: "/home/dashboard", component:()=>getComponent("dashboard/MasterDashboard"), name: "Dashboard",
        meta: { permissions: "dashboard-view" }
    },



];


export default createRouter({
    history: createWebHistory(),
    routes
})
