<template>
  <div class="product-list">
    <h2>Lista de Produtos</h2>
    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>Nome</th>
          <th>Preço</th>
          <th>Ações</th> <!-- Adiciona uma coluna para as ações -->
        </tr>
      </thead>
      <tbody>
        <tr v-for="product in products" :key="product.id">
          <td>{{ product.id }}</td>
          <td>{{ product.name }}</td>
          <td>{{ product.price }}</td>
          <td> <!-- Adiciona botões de edição e exclusão nesta célula -->
            <button @click="editProduct(product)" class="btn edit-btn">Editar</button>
            <button @click="deleteProduct(product.id)" class="btn delete-btn">Excluir</button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<script>
export default {
  data() {
    return {
      products: []
    };
  },
  mounted() {
    // Aqui você fará uma chamada para o backend para buscar os produtos
    // Substitua esta linha com sua lógica para buscar os produtos do banco de dados
    this.fetchProducts();
  },
  methods: {
    fetchProducts() {
      // Aqui você fará uma chamada para o backend para buscar os produtos
      // e preencher a lista de produtos com os dados retornados
      // Por enquanto, estou apenas adicionando alguns dados de exemplo
      this.products = [
        { id: 1, name: 'Produto 1', price: 19.99 },
        { id: 2, name: 'Produto 2', price: 29.99 },
        { id: 3, name: 'Produto 3', price: 39.99 }
      ];
    },
    editProduct(product) {
      // Implemente a lógica para editar o produto
      console.log('Editar produto:', product);
    },
    deleteProduct(productId) {
      // Implemente a lógica para excluir o produto
      console.log('Excluir produto ID:', productId);
    }
  }
};
</script>

<style scoped>
/* Estilos opcionais para a lista de produtos */
.product-list {
  width: 80%;
  margin: 0 auto;
}

table {
  width: 100%;
  border-collapse: collapse;
}

th, td {
  border: 1px solid #ddd;
  padding: 8px;
  text-align: left;
}

th {
  background-color: #f2f2f2;
}

.btn {
  padding: 8px 12px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  transition: background-color 0.3s;
}

.btn:hover {
  opacity: 0.8;
}

.edit-btn {
  background-color: #ffc107;
  color: #212529;
}

.delete-btn {
  background-color: #dc3545;
  color: #fff;
}
</style>
