import Vue from 'vue'
import VueRouter from 'vue-router'
import mainApp from './mainApp'

export const router = new VueRouter({ 
    mode: 'history', 
    
    routes: [ 
        {
            path: '/', 
            component: mainApp,
    
            // children: [
            //     {
            //         path: '',
            //         components: {body: ShopComponent, header: HeaderComponent},
            //     },
            // ]
        },
    ]
})