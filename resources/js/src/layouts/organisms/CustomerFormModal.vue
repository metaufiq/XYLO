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
                newCustomerStatus,
                newCustomerAgent
            } = this.$refs.customerForm;
            switch (this.method) {
                case "add":
                    const input = {
                        name: newCustomerName,
                        phone_number: newCustomerPhoneNumber,
                        status: newCustomerStatus
                    };
                    this.$store.dispatch("addCustomer", input);
                    break;
                case "edit":
                    await customerService.edit(
                        this.customerId,
                        newCustomerName,
                        newCustomerPhoneNumber,
                        newCustomerStatus
                    );
                    break;

                default:
                    break;
            }
            $(this.$refs.customerFormModal).modal("hide");
        }
    }
};
</script>
