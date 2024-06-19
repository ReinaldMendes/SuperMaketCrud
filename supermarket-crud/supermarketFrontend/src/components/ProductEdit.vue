<!-- src/components/ProductEdit.vue -->

<template>
  <div>
    <h2>Editar Produto</h2>
    <form @submit.prevent="updateProduct">
      <div>
        <label>Nome:</label>
        <input v-model="product.name" required>
      </div>
      <div>
        <label>Preço:</label>
        <input type="number" v-model="product.price" required>
      </div>
      <div>
        <label>Tipo:</label>
        <input v-model="product.type" required>
      </div>
      <div>
        <label>Quantidade:</label>
        <input type="number" v-model="product.quantity" required>
      </div>
      <div>
        <label>Foto (URL):</label>
        <input v-model="product.photo">
      </div>
      <button type="submit">Salvar</button>
    </form>
  </div>
</template>

<script>
export default {
  data() {
    return {
      product: {}
    };
  },
  mounted() {
    this.fetchProduct();
  },
  methods: {
    fetchProduct() {
      const id = this.$route.params.id;
      this.$http.get(`http://localhost:8000/api/products/${id}`)
        .then(response => {
          this.product = response.data;
        })
        .catch(error => {
          console.error(error);
        });
    },
    updateProduct() {
      const id = this.$route.params.id;
      this.$http.put(`http://localhost:8000/api/products/${id}`, this.product)
        .then(() => {
          alert('Produto atualizado com sucesso!');
          this.$router.push('/');
        })
        .catch(error => {
          console.error(error);
        });
    }
  }
}
</script>
