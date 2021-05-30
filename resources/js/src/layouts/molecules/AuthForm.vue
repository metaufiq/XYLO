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
                    v-model="email"
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
                    v-model="password"
                />
            </div>
            <div class="form-group container">
                <span class="text-danger">{{ this.errorMessage }}</span>
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
import authService from "../../services/authService";

export default {
    props: ["userType"],
    data() {
        return {
            email: "",
            password: "",
            errorMessage: ""
        };
    },
    methods: {
        async onLogin() {
            try {
                const data = {
                    email: this.email,
                    password: this.password
                };
                const res = await authService.login(data);
                this.onValidate(res);
                this.$store.commit("setUserData", res.data);
                this.$router.push("/");
            } catch (error) {
                this.errorMessage = "Wrong Email/Password";
            }
        },
        async onRegister() {
            this.$router.push("/");
        },
        onValidate(res) {
            if (res.data.role !== this.userType) {
                throw Error("Wrong Password/Email");
            }
        }
    }
};
</script>
