<template>
    <div>
        <h3 class="text-center text-primary">Sign Up</h3>
        <div class="row justify-content-md-center">
            <div class="col-md-4">
                <form @submit.prevent="register">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" v-model="user.name">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" v-model="user.email">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" v-model="user.password">
                    </div>
                    <div class="row col">
                        <button type="submit" class="btn btn-primary">Register</button>
                        <router-link to="/" class="nav-item nav-link">Sign In</router-link>
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
                    name: "",
                    email: "",
                    password: ""
                }
            }
        },
        methods: {
            register() {
                this.axios
                    .post('http://vuecrud.test/api/user/register', this.user)
                    .then(response => (
                        this.$router.push({name: 'login'})
                    ))
                    .catch(error => console.log(error))
                    .finally(() => this.loading = false)
            }
        }
    }
</script>