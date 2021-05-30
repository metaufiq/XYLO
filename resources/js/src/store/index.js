import Vue from 'vue';
import Vuex from 'vuex';
import customerService from '../services/customerService';
import agentService from '../services/agentService';
import historyService from '../services/historyService';

Vue.use(Vuex);
const store = new Vuex.Store({
    state: {
        customerList: [],
        agentList: [],
        userData: {},
        followUpHistoryList: []
    },
    mutations: {
        setCustomerList(state, customerList) {
            state.customerList = customerList
        },
        setFollowUpHistoryList(state, followUpHistoryList) {
            state.followUpHistoryList = followUpHistoryList
        },
        setAgentList(state, agentList) {
            state.agentList = agentList
        },
        setUserData(state, userData) {
            localStorage.setItem("userData", JSON.stringify(userData));
            state.userData = userData;
        },
        clearUserData() {
            localStorage.removeItem('userData')
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
        async getCustomerList(context) {
            const params = {
                user_id: JSON.parse(localStorage.getItem('userData')).id,
                user_role: JSON.parse(localStorage.getItem('userData')).role,
            }

            const res = await customerService.list(params);
            context.dispatch('getFollowUpHistoryList');
            context.commit('setCustomerList', res.data)
        },
        async getFollowUpHistoryList(context) {
            const params = {
                user_id: JSON.parse(localStorage.getItem('userData')).id,
                user_role: JSON.parse(localStorage.getItem('userData')).role,
            }
            const res = await historyService.list(params);
            context.commit('setFollowUpHistoryList', res.data)
        },
        async getAgentList(context) {
            const params = {
                start: 0,
                length: 10,
                keyword: ""
            };
            const res = await agentService.list(params);
            context.commit('setAgentList', res.data)
        },
    }
})

export default store