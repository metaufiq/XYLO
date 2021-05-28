<template>
    <div
        class="modal fade"
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
    props: ["method", "customerName", "customerPhoneNumber", "customerStatus"],
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
                newCustomerStatus
            } = this.$refs.customerForm;
            switch (this.method) {
                case "add":
                    await customerService.add(
                        newCustomerName,
                        newCustomerPhoneNumber,
                        newCustomerStatus
                    );
                    break;

                default:
                    break;
            }
        }
    }
};
</script>
