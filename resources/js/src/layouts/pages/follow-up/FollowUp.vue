<template>
    <div>
        <navbar></navbar>
        <div class="container">
            <div class="row justify-content-center  pt-5 table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Name</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Status</th>
                            <th scope="col">Follow Up</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="customer in customerList" :key="customer.id">
                            <th scope="row">
                                {{ customerList.indexOf(customer) + 1 }}
                            </th>
                            <td>{{ customer.name }}</td>
                            <td>{{ customer.phone_number }}</td>
                            <td>{{ customer.status }}</td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>
<script>
import customerService from "../../../services/customerService";
export default {
    data() {
        return {
            customerList: []
        };
    },
    async mounted() {
        try {
            const res = await customerService.list({
                start: 0,
                length: 5,
                keyword: ""
            });
            this.customerList = res.data;
        } catch (error) {}
    }
};
</script>
