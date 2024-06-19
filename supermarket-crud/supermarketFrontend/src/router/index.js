import Vue from 'vue';
import Router from 'vue-router';
import ProductList from '../components/ProductList.vue';
import ProductCreate from '../components/ProductCreate.vue';
import ProductEdit from '../components/ProductEdit.vue';
import LoginForm from '../components/LoginForm.vue';

Vue.use(Router);

const router = new Router({
  routes: [
    { path: '/', component: ProductList, meta: { requiresAuth: true } },
    { path: '/create', component: ProductCreate, meta: { requiresAuth: true } },
    { path: '/edit/:id', component: ProductEdit, meta: { requiresAuth: true } },
    { path: '/loginForm', component: LoginForm }
  ]
});

// Verifica se o usuário está autenticado antes de navegar para uma rota protegida
router.beforeEach((to, from, next) => {
  const isAuthenticated = localStorage.getItem('token'); // Verifique se há um token de autenticação
  if (to.matched.some(record => record.meta.requiresAuth) && !isAuthenticated) {
    next('/loginForm'); // Redireciona para a página de login se o usuário não estiver autenticado
  } else {
    next(); // Continua a navegação normalmente
  }
});

export default router;
