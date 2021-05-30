<template>
    <div
        class="modal fade"
        ref="customerFormModal"
        id="customer-form-modal"
        tabindex="-1"
        role="dialog"
        aria-labelledby="customer-form-modal-label"
        aria-hidden="true"
    >
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="customer-form-modal-label">
                        {{ camelSentence(this.method) }} Customer
                    </h5>
                    <button
                        type="button"
                        class="close"
                        data-dismiss="modal"
                        aria-label="Close"
                    >
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <customer-form
                        :customerName="this.customerName"
                        :customerPhoneNumber="this.customerPhoneNumber"
                        :customerStatus="this.customerStatus"
                        :customerAgent="this.customerAgent"
                        ref="customerForm"
                    ></customer-form>
                </div>
                <div class="modal-footer">
                    <button
                        type="button"
                        class="btn btn-danger"
                        data-dismiss="modal"
                    >
                        Close
                    </button>
                    <button
                        type="button"
                        class="btn btn-success"
                        v-on:click="onSubmit"
                    >
                        Submit
                    </button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import customerService from "../../services/customerService";
export default {
    props: [
        "method",
        "customerId",
        "customerName",
        "customerPhoneNumber",
        "customerAgent",
        "customerStatus"
    ],
    methods: {
        camelSentence(str) {
            return (" " + str)
                .toLowerCase()
                .replace(/[^a-zA-Z0-9]+(.)/g, function(match, chr) {
                    return chr.toUpperCase();
                });
        },
        async onSubmit() {
            const {
                newCustomerName,
                newCustomerPhoneNumber,
                newCustomerStatusId,
                newCustomerAgentId
            } = this.$refs.customerForm;
            let params = {};
            switch (this.method) {
                case "add":
                    params = {
                        name: newCustomerName,
                        phone_number: newCustomerPhoneNumber,
                        agent_id: newCustomerAgentId,
                        status_id: newCustomerStatusId
                    };
                    this.$store.dispatch("addCustomer", params);
                    break;
                case "edit":
                    params = {
                        id: this.customerId,
                        name: newCustomerName,
                        phone_number: newCustomerPhoneNumber,
                        agent_id: newCustomerAgentId,
                        status_id: newCustomerStatusId
                    };
                    this.$store.dispatch("editCustomer", params);
                    break;

                default:
                    break;
            }
            params = {
                start: 0,
                length: 10,
                keyword: ""
            };
            this.$store.dispatch("getCustomerList", params);
            $(this.$refs.customerFormModal).modal("hide");
        }
    }
};
</script>
