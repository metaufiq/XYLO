<template>
    <div class="form">
        <div class="form-group">
            <label>Name</label>
            <input
                type="text"
                class="form-control"
                aria-describedby="customer name"
                placeholder="Name"
            />
        </div>
        <div class="form-group">
            <label>Phone Number</label>
            <input
                type="text"
                class="form-control"
                aria-describedby="customer phone number"
                placeholder="Phone Number"
            />
        </div>
    </div>
</template>

<script>
export default {
    props: ["onSubmit"]
};
</script>
