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
        addCustomer(state, customer) {
            state.customerList = [...state.customerList, customer];
        },
        deleteCustomer(state, customerId) {
            state.customerList = [...state.customerList].filter((customer) => customer.id != customerId);
        },
        editCustomer(state, customer) {
            let temp = state.customerList.map(x => {
                if (x.id === customer.id) {
                    const tempAgentList = [...state.agentList].filter(agent => agent.id === customer.agent_id)
                    x.agent = tempAgentList.length > 0 ? tempAgentList[0] : x.agent;
                }
                return x;
            });
            state.customerList = temp;
        },
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
            customer.status = '0'
            context.commit('addCustomer', customer)
        },
        async editCustomer(context, customer) {
            await customerService.edit(customer);
            context.commit('editCustomer', customer)
        },
        async deleteCustomer(context, customerId) {
            await customerService.remove(customerId);
            context.commit('deleteCustomer', customerId);
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