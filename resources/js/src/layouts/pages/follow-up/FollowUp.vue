<template>
    <div>
        <navbar></navbar>
        <div class="container">
            <div class="row justify-content-center  pt-5 table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Name</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Status</th>
                            <th scope="col">Follow Up</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>0813123435553</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>
<script>
import customerService from "../../../services/customerService";
export default {
    async mounted() {
        try {
            const res = await customerService.list({
                start: 0,
                length: 5,
                keyword: ""
            });
            console.log(res);
        } catch (error) {}
    }
};
</script>
