import Vue from 'vue'
import VueRouter from 'vue-router'
import mainApp from './mainApp'
import HomeComponent from './pages/HomeComponent.vue'

export const router = new VueRouter({ 
    mode: 'history', 
    
    routes: [ 
        {
            path: '/', 
            component: mainApp,
    
            children: [
                {
                    path: '',
                    component: HomeComponent,
                },
            ]
        },
    ]
})