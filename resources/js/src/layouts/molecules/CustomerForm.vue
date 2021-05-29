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
            <select class="custom-select" v-model="newCustomerAgent">
                <option
                    v-for="agent in agentList"
                    v-bind:key="agent.id"
                    v-bind:value="agent.id"
                    >{{ agent.email }}</option
                >
            </select>
        </div>
    </div>
</template>

<script>
import agentService from "../../services/agentService";
export default {
    props: ["customerName", "customerPhoneNumber", "customerStatus"],
    data() {
        return {
            agentList: "",
            newCustomerName: this.customerName,
            newCustomerPhoneNumber: this.customerPhoneNumber,
            newCustomerStatus: this.customerStatus,
            newCustomerAgent: ""
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
        }
    },
    async mounted() {
        const params = {
            start: 0,
            length: 10,
            keyword: ""
        };
        const res = await agentService.list(params);
        this.agentList = res.data;
    }
};
</script>
