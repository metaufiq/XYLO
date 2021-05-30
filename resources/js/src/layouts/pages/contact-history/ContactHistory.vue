<template>
    <div>
        <navbar></navbar>
        <div class="container pt-5">
            <div
                class="row justify-content-center  mt-3 p-4 card"
                v-for="followUpHistory in this.$store.state.followUpHistoryList"
                v-bind:key="followUpHistory.id"
            >
                <h5 class="card-text">
                    Agent
                    <span class="font-weight-bold">{{
                        followUpHistory.agent.email
                    }}</span>
                    follow up
                    <span class="font-weight-bold">{{
                        followUpHistory.customer.name
                    }}</span>
                    with status
                    <span class="badge badge-secondary">{{
                        followUpHistory.status.status
                    }}</span>
                </h5>
                <span>{{ new Date(followUpHistory.updated_at) }}</span>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    mounted() {
        this.$store.dispatch("getFollowUpHistoryList");
    }
};
</script>
