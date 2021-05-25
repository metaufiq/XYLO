<template>
    <div>
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a
                    class="nav-link active"
                    id="agent-tab"
                    data-toggle="tab"
                    href="#agent"
                    role="tab"
                    aria-controls="agent"
                    aria-selected="true"
                    >Agent</a
                >
            </li>
            <li class="nav-item">
                <a
                    class="nav-link"
                    id="admin-tab"
                    data-toggle="tab"
                    href="#admin"
                    role="tab"
                    aria-controls="admin"
                    aria-selected="false"
                    >Admin</a
                >
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div
                class="tab-pane fade show active"
                id="agent"
                role="tabpanel"
                aria-labelledby="agent-tab"
            >
                <auth-form :type="type" userType="agent"></auth-form>
            </div>
            <div
                class="tab-pane fade"
                id="admin"
                role="tabpanel"
                aria-labelledby="admin-tab"
            >
                <auth-form :type="type" userType="admin"></auth-form>
            </div>
        </div>
    </div>
</template>

<script>
import AuthForm from "./AuthForm.vue";
export default {
    props: ["type"],

    components: { AuthForm }
};
</script>
