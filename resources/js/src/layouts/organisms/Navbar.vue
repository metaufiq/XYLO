<template>
    <nav class="navbar navbar-expand-lg navbar-dark bg-success sticky-top">
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
                <li
                    class="nav-item"
                    v-for="route in routes"
                    v-bind:key="route.path"
                >
                    <a
                        class="nav-link"
                        href="#"
                        v-on:click="onNext(route)"
                        v-bind:class="{
                            active: isCurrentPath(route),
                            disabled: isCurrentPath(route)
                        }"
                        v-if="route.path != '/' && route.path != '/welcome'"
                        >{{ route.meta.navBarTitle }}</a
                    >
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
import routes from "../../routes";
export default {
    data() {
        return {
            routes: routes
        };
    },
    methods: {
        onLogout() {
            this.$router.push("/welcome");
        },
        onNext(route) {
            this.$router.push(route.path);
        },
        isCurrentPath(route) {
            return this.$route.path === route.path;
        }
    }
};
</script>
