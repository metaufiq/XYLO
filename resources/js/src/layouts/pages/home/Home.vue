<template>
    <div>
        <navbar></navbar>
        <div class="container vh-100">
            <div
                class="row justify-content-center align-content-center text-center h-100"
            >
                <div class="card">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                        I'm an example component.iini home
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import Navbar from "../../organisms/Navbar.vue";
export default {
    components: { Navbar },
    mounted() {
        console.log("Component mounted.");
    }
};
</script>
