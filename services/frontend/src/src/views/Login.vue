<template>
  <div>
    <h1>Login</h1>

    <form @submit.prevent="login">
      <div>
        <label for="email">Email:</label>
        <input type="email" id="email" v-model="email" required>
      </div>

      <div>
        <label for="password">Password:</label>
        <input type="password" id="password" v-model="password" required>
      </div>

      <button type="submit">Login</button>
    </form>

    <p v-if="error">{{ error }}</p>
  </div>
</template>

<script>
import axios from 'axios'

export default {
  data() {
    return {
      email: '',
      password: '',
      error: ''
    }
  },
  methods: {
    async login() {
      try {
        const response = await axios.post('http://192.168.0.131:8181/api/auth/login', {
          email: this.email,
          password: this.password
        })
        // If authentication is successful, store the user token
        // and redirect to the dashboard page
        debugger
        localStorage.setItem('token', response.data.accessToken)
        this.$router.push('/dashboard')
      } catch (error) {
        debugger
        // If authentication fails, show an error message
        this.error = error.response.data.message
      }
    }
  }
}
</script>