<template>
    <div class="container vh-100">
        <div class="row align-content-center vh-100">
            <div class="col-md-7 ">
                <div class="row align-content-center h-100 w-100">
                    <div class="col-12 ">
                        <h1 class="display-1">XYLO</h1>
                        <h3>Best Contact List Management</h3>
                    </div>
                    <div class="col"></div>
                </div>
            </div>
            <div class="col-md-5">
                <auth-tab-form :type="type"></auth-tab-form>
            </div>
        </div>
    </div>
</template>

<script>
import AuthForm from "../molecules/AuthForm";
import AuthTabForm from "../molecules/AuthTabForm.vue";
export default {
    props: ["type"],
    components: { AuthTabForm }
};
</script>
