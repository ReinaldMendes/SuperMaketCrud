<template>
  <div>
    <h2>Login</h2>
    <form @submit.prevent="login" class="login-form">
      <label for="username">Username:</label>
      <input type="text" v-model="username" id="username" placeholder="Enter your username">

      <label for="password">Password:</label>
      <input type="password" v-model="password" id="password" placeholder="Enter your password">

      <button type="submit">login</button>
    </form>
  </div>
</template>

<script>
export default {
  data() {
    return {
      username: '',
      password: ''
    };
  },
  methods: {
    login() {
      // Simule uma chamada de API para autenticar o usuário
      // Aqui você irá implementar a lógica de autenticação real
      if (this.username === 'admin' && this.password === 'admin') {
        // Autenticação bem-sucedida, armazene o token no local storage
        localStorage.setItem('token', 'yourAuthToken');
        // Redirecione para a página de criação de produtos
        this.$router.push('/create');
      } else {
        // Exiba uma mensagem de erro de autenticação
        alert('Invalid username or password');
      }
    }
  }
}
</script>

<style scoped>
.login-form {
  max-width: 400px;
  margin: 0 auto;
  padding: 20px;
  border: 1px solid #ccc;
  border-radius: 5px;
  background-color: #f9f9f9;
}

h2 {
  text-align: center;
}

form {
  display: flex;
  flex-direction: column;
}

label {
  margin-bottom: 10px;
}

input[type="text"],
input[type="password"] {
  padding: 10px;
  margin-bottom: 20px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

button {
  padding: 10px;
  border: none;
  border-radius: 5px;
  background-color: #007bff;
  color: #fff;
  cursor: pointer;
}

button:hover {
  background-color: #0056b3;
}
</style>
