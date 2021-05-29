import Vue from 'vue';
import Vuex from 'vuex';
import customerService from '../services/customerService';
import agentService from '../services/agentService';

Vue.use(Vuex);
const store = new Vuex.Store({
    state: {
        customerList: [],
        agentList: []
    },
    mutations: {
        setCustomerList(state, customerList) {
            state.customerList = customerList
        },
        setAgentList(state, agentList) {
            state.agentList = agentList
        }
    },
    actions: {
        async addCustomer(context, customer) {
            await customerService.add(customer);
        },
        async editCustomer(context, customer) {
            await customerService.edit(customer);
        },
        async deleteCustomer(context, customerId) {
            await customerService.remove(customerId);
        },
        async getCustomerList(context, params) {
            const res = await customerService.list(params);
            context.commit('setCustomerList', res.data)
        },

        async getAgentList(context) {
            const params = {
                start: 0,
                length: 10,
                keyword: ""
            };
            const res = await agentService.list(params);
            context.commit('setAgentList', res.data)
        }
    }
})

export default store