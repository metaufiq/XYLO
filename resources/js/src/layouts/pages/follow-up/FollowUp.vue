<template>
    <div>
        <navbar></navbar>
        <customer-form-modal
            :method="this.method"
            :customerName="this.customerName"
            :customerPhoneNumber="this.customerPhoneNumber"
            :customerStatus="this.customerStatus"
            :customerId="this.customerId"
        ></customer-form-modal>
        <div class="container">
            <div class="row justify-content-end pt-3">
                <button
                    type="button"
                    class="btn btn-success"
                    data-toggle="modal"
                    data-target="#customer-form-modal"
                    v-on:click="this.onOpenCustomerAddModal"
                >
                    <i class="far fa-eye"></i>
                    Add New Customer
                </button>
            </div>
            <div class="row justify-content-center mt-2 ">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Contact</th>
                                <th scope="col">Status</th>
                                <th scope="col">Follow Up By</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr
                                v-for="customer in this.$store.state
                                    .customerList"
                                :key="customer.id"
                            >
                                <td>{{ customer.name }}</td>
                                <td>
                                    Phone: {{ customer.phone_number }}<br />
                                    Email: tuafiq@gamdsa.com
                                </td>
                                <td>{{ customer.status }}</td>
                                <td>{{ customer.follow_up_by }}</td>
                                <td>
                                    <button
                                        type="button"
                                        class="btn btn-primary"
                                        v-on:click="
                                            onOpenCustomerEditModal(customer)
                                        "
                                        data-toggle="modal"
                                        data-target="#customer-form-modal"
                                    >
                                        Edit
                                    </button>
                                    <button
                                        type="button"
                                        class="btn btn-danger"
                                        v-on:click="onDeleteCustomer(customer)"
                                    >
                                        Delete
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import CustomerFormModal from "../../organisms/CustomerFormModal.vue";
export default {
    components: { CustomerFormModal },
    data() {
        return {
            customerList: this.$store.state.customerList,
            method: "",
            showModal: false,
            customerId: "",
            customerName: "",
            customerPhoneNumber: "",
            customerStatus: ""
        };
    },
    async mounted() {
        try {
            const params = {
                start: 0,
                length: 10,
                keyword: ""
            };
            this.$store.dispatch("getCustomerList", params);
        } catch (error) {}
    },
    methods: {
        onOpenCustomerAddModal() {
            this.emptyCustomerData();
            this.method = "add";
        },
        emptyCustomerData() {
            this.customerName = "";
            this.customerPhoneNumber = "";
            this.customerStatus = "";
        },
        onOpenCustomerEditModal(customer) {
            this.customerId = customer.id;
            this.customerName = customer.name;
            this.customerPhoneNumber = customer.phone_number;
            this.customerStatus = customer.status;
            this.method = "edit";
        },
        onDeleteCustomer(customer) {
            this.$store.dispatch("deleteCustomer", customer.id);
        }
    }
};
</script>
