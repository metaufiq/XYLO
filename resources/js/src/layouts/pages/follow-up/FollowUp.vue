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
                                <th scope="col">No</th>
                                <th scope="col">Name</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Status</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr
                                v-for="customer in customerList"
                                :key="customer.id"
                            >
                                <th scope="row">
                                    {{ customerList.indexOf(customer) + 1 }}
                                </th>
                                <td>{{ customer.name }}</td>
                                <td>{{ customer.phone_number }}</td>
                                <td>{{ customer.status }}</td>
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
import service from "../../../config/services";
import customerService from "../../../services/customerService";
import CustomerFormModal from "../../organisms/CustomerFormModal.vue";
export default {
    components: { CustomerFormModal },
    data() {
        return {
            customerList: [],
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
            const res = await customerService.list({
                start: 0,
                length: 10,
                keyword: ""
            });
            this.customerList = res.data;
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
            customerService.remove(customer.id);
        }
    }
};
</script>
