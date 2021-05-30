<template>
    <div>
        <navbar></navbar>
        <div class="container pt-5">
            <div
                class="row justify-content-center  mt-3 p-4 card"
                v-for="followUpHistory in followUpHistoryList"
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
import historyService from "../../../services/historyService";
export default {
    data() {
        return {
            followUpHistoryList: []
        };
    },
    mounted() {
        this.getFollowUpHistory();
    },
    methods: {
        async getFollowUpHistory() {
            const params = {
                user_id: this.$store.state.userData.id,
                user_role: this.$store.state.userData.role
            };
            const res = await historyService.list(params);
            this.followUpHistoryList = res.data;
        }
    }
};
</script>
