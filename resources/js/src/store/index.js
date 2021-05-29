import Vue from 'vue';
import Vuex from 'vuex';
import customerService from '../services/customerService';
Vue.use(Vuex);
const store = new Vuex.Store({
    state: {
        customerList: []
    },
    mutations: {
        addCustomer(state, customer) {
            state.customerList = [...state.customerList, customer];
        },
        deleteCustomer(state, customerId) {
            state.customerList = [...state.customerList].filter((customer) => customer.id != customerId);
        },
        setCustomerList(state, customerList) {
            state.customerList = customerList
        }
    },
    actions: {
        async addCustomer(context, customer) {
            await customerService.add(customer);
            customer.status = '0'
            context.commit('addCustomer', customer)
        },
        async deleteCustomer(context, customerId) {
            await customerService.remove(customerId);
            context.commit('deleteCustomer', customerId);
        },
        async getCustomerList(context, params) {
            const res = await customerService.list(params);
            context.commit('setCustomerList', res.data)
        }
    }
})

export default store