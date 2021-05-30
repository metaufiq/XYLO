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
                        v-if="isRouteAllowed(route)"
                        >{{ route.meta.navBarTitle }}</a
                    >
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <span class="nav-link active">
                        Login as {{ this.$store.state.userData.email }}
                    </span>
                </li>
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
            routes: routes,
            disabledPath: ["/", "/welcome"]
        };
    },
    mounted() {},
    methods: {
        onLogout() {
            this.$store.commit("clearUserData");
            this.$router.replace("/welcome");
        },
        onNext(route) {
            this.$router.push(route.path);
        },
        isCurrentPath(route) {
            return this.$route.path === route.path;
        },
        isRouteAllowed(route) {
            return (
                !this.disabledPath.includes(route.path) &&
                route.meta.onNavbar &&
                route.meta.access.includes(this.$store.state.userData.role)
            );
        }
    }
};
</script>
