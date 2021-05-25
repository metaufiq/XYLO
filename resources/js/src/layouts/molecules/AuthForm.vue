<template>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">
                {{ this.type == "login" ? "Login" : "Register" }} As
                {{ this.userType == "admin" ? "Admin" : "Agent" }}
            </h5>
            <form>
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
                <button type="submit" class="btn btn-primary">
                    Submit
                </button>
            </form>
        </div>
    </div>
</template>

<script>
export default {
    props: ["userType", "type"]
};
</script>
