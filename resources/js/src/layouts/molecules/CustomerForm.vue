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
    </div>
</template>

<script>
export default {
    props: ["customerName", "customerPhoneNumber", "customerStatus"],
    data() {
        return {
            newCustomerName: this.customerName,
            newCustomerPhoneNumber: this.customerPhoneNumber,
            newCustomerStatus: this.customerStatus
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
    }
};
</script>
