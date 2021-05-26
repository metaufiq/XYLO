<template>
    <nav class="navbar navbar-expand-lg navbar-dark bg-success">
        <a class="navbar-brand" href="">XYLO</a>
        <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="">Contact Management</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Follow Up Customer</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">History</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#" v-on:click="onLogout"
                        >Logout</a
                    >
                </li>
            </ul>
        </div>
    </nav>
</template>

<script>
export default {
    methods: {
        onLogout() {
            this.$router.push("/welcome");
        }
    }
};
</script>
