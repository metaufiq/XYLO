<template>
    <div class="form">
        <div class="form-group">
            <label>Name</label>
            <input
                type="text"
                class="form-control"
                aria-describedby="customer name"
                placeholder="Name"
                v-model="newCustomerName"
            />
        </div>
        <div class="form-group">
            <label>Phone Number</label>
            <input
                type="text"
                class="form-control"
                aria-describedby="customer phone number"
                placeholder="Phone Number"
                v-model="newCustomerPhoneNumber"
            />
        </div>
        <div class="form-group">
            <label>Assign To Agent:</label>
            <select class="custom-select" v-model="newCustomerAgentId">
                <option
                    v-for="agent in this.$store.state.agentList"
                    v-bind:key="agent.id"
                    v-bind:value="agent.id"
                    >{{ agent.email }}</option
                >
            </select>
        </div>
        <div class="form-group">
            <label>Status Follow Up:</label>
            <select class="custom-select" v-model="newCustomerStatus">
                <option
                    v-for="status in customerStatusList"
                    v-bind:key="status.id"
                    v-bind:value="status.id"
                    >{{ status.status }}</option
                >
            </select>
        </div>
    </div>
</template>

<script>
import customerService from "../../services/customerService";
export default {
    props: [
        "customerName",
        "customerPhoneNumber",
        "customerStatus",
        "customerAgent"
    ],
    data() {
        return {
            agentList: [],
            newCustomerName: this.customerName,
            newCustomerPhoneNumber: this.customerPhoneNumber,
            newCustomerStatus: this.customerStatus,
            newCustomerAgentId: this.customerAgent.id,
            customerStatusList: []
        };
    },
    watch: {
        customerName: function(val) {
            this.newCustomerName = val;
        },
        customerPhoneNumber: function(val) {
            this.newCustomerPhoneNumber = val;
        },
        customerStatus: function(val) {
            this.newCustomerStatus = val;
        },
        customerAgent: function(val) {
            this.newCustomerAgentId = val.id;
        }
    },
    async mounted() {
        this.$store.dispatch("getAgentList");
        const params = {
            start: 0,
            length: 10,
            keyword: ""
        };
        const res = await customerService.listStatus(params);
        this.customerStatusList = res.data;
    }
};
</script>
