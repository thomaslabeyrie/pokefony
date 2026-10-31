import { createRouter, createWebHistory, type RouteLocationNormalized } from 'vue-router'
import HomeView from '@/views/HomeView.vue'
import PokedexView from '@/views/PokedexView.vue'
import SpeciesView from '@/views/SpeciesView.vue'
import NotFound from '@/views/NotFoundView.vue'
import RegistrationView from '@/views/RegistrationView.vue'
import LoginView from '@/views/LoginView.vue'

const routes = [
  {
    path: '',
    name: 'home',
    component: HomeView,
  },
  {
    path: '/register',
    name: 'register',
    component: RegistrationView,
  },
  {
    path: '/login',
    name: 'login',
    component: LoginView,
  },
  {
    path: '/pokedex/:pokedex?/:page?',
    name: 'pokedex',
    props: (route: RouteLocationNormalized) => ({
      pokedex: route.params.pokedex || 'national',
      page: Number(route.params.page) || 1,
      query: route.query.pokemon || '',
    }),
    component: PokedexView,
  },
  {
    path: '/species/:name',
    name: 'species',
    props: true,
    component: SpeciesView,
  },
  {
    path: '/:catchAll(.*)',
    name: 'NotFound',
    component: NotFound,
  },
]

export default createRouter({
  history: createWebHistory(),
  routes,
  scrollBehavior() {
    return { top: 0 }
  },
})
