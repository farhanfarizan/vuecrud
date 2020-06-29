<template>
    <div>
        <h3 class="text-center text-primary">Sign In</h3>
        <div class="row justify-content-md-center">
            <div class="col-md-4">
                <form @submit.prevent="login">
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" v-model="user.email">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" v-model="user.password">
                    </div>
                    <div class="row col">
                        <button type="submit" class="btn btn-primary">Login</button>
                        <router-link to="/register" class="nav-item nav-link">Sign Up</router-link>
                    </div>                    
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                user: {
                    email: "",
                    password: ""
                }
            }
        },
        methods: {
            login() {

            }
        }
    }
</script>