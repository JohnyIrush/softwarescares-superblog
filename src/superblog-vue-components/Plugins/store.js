import Vue from 'vue';
import Vuex from 'vuex';

Vue.use(Vuex);

export const store = new Vuex.Store({
    state: {
        products:[
            {name:"Banana", price:20},
            {name:"Orange", price:40},
            {name:"Apple", price:60},
            {name:"Watermellon", price:80},

        ],
        categoryEditMode: false,
        preCategoryData: []

    },
    getters:{
        saleProducts: state =>{
            var saleProducts = state.products.map(product=>{
                return {
                    name: '**' + product.name + '**',
                    price: product.price/2,
                }
            });
            return saleProducts;
        }
    },
    mutations:{
        reducePrice: (state,payload) =>{
                state.products.forEach(product => {
                    product.price -= payload;
                });
        },
        testEvent: (state)=>{
            const Event = new Vue(); 
            Event.$emit('test','1')
        }
    },
    actions: {
        reducePrice: 
        (context,payload) =>{
            setTimeout(() => {
                context.commit('reducePrice',payload)
            }, 2000);
        },
        testEvent:(context) =>{
            context.commit('testEvent');
        }
    }
})