<template>
  <div class="product-create">
    <h2>Criar Novo Produto</h2>
    <form @submit.prevent="createProduct">
      <div class="form-group">
        <label for="name">Nome do Produto</label>
        <input type="text" v-model="product.name" id="name" required />
      </div>
      <div class="form-group">
        <label for="price">Preço do Produto</label>
        <input type="number" v-model="product.price" id="price" required />
      </div>
      <div class="form-actions">
        <button type="submit" class="btn submit-btn">Criar</button>
        <router-link to="/" class="btn cancel-btn">Cancelar</router-link>
      </div>
    </form>
  </div>
</template>

<script>
/* eslint-disable */
export default {
  data() {
    return {
      product: {
        name: '',
        price: 0
      }
    };
  },
  methods: {
    createProduct() {
      fetch('http://localhost:8000/api/products', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json'
        },
        body: JSON.stringify(this.product)
      })
      .then(response => {
        if (!response.ok) {
          throw new Error('Erro ao criar o produto');
        }
        return response.json();
      })
      .then(data => {
        alert('Produto criado com sucesso!');
        this.$router.push('/'); // Redireciona para a lista de produtos
      })
      .catch(error => {
        console.error(error);
        alert('Erro ao criar o produto');
      });
    }
  }
}
</script>

<style scoped>
.product-create {
  width: 80%;
  margin: 0 auto;
  text-align: center;
}

.product-create h2 {
  margin-bottom: 20px;
}

.form-group {
  margin-bottom: 20px;
}

.form-group label {
  display: block;
  margin-bottom: 5px;
  font-weight: bold;
}

.form-group input {
  width: 100%;
  padding: 10px;
  border: 1px solid #ddd;
  border-radius: 5px;
}

.form-actions {
  display: flex;
  justify-content: center;
  gap: 10px;
  margin-top: 20px;
}

.btn {
  display: inline-block;
  padding: 10px 15px;
  margin: 10px 5px;
  background-color: #007bff;
  color: white;
  text-decoration: none;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  transition: background-color 0.3s;
}

.btn:hover {
  background-color: #0056b3;
}

.submit-btn {
  background-color: #28a745;
}

.submit-btn:hover {
  background-color: #218838;
}

.cancel-btn {
  background-color: #ffc107;
}

.cancel-btn:hover {
  background-color: #e0a800;
}
</style>
