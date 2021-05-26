<template>
    <div class="card">
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input
                    type="email"
                    class="form-control"
                    id="exampleInputEmail1"
                    aria-describedby="emailHelp"
                    placeholder="Enter email"
                />
                <small id="emailHelp" class="form-text text-muted"
                    >We'll never share your email with anyone else.</small
                >
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input
                    type="password"
                    class="form-control"
                    id="exampleInputPassword1"
                    placeholder="Password"
                />
            </div>
            <div class="form-group container">
                <div class="row">
                    <button
                        type="submit"
                        class="btn btn-primary col-md-3 col-sm-4 mr-md-2 mt-2"
                        @click="onLogin"
                    >
                        Login
                    </button>
                    <button
                        type="submit"
                        class="btn btn-success col-md-3 col-sm-4 mt-2"
                        @click="onRegister"
                    >
                        Register
                    </button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: ["userType"],
    methods: {
        onLogin() {
            this.$router.push("/");
        },
        onRegister() {
            this.$router.push("/");
        }
    }
};
</script>
