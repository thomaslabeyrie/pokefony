import { createRouter, createWebHistory, type RouteLocationNormalized } from 'vue-router'
import PokedexView from '@/views/PokedexView.vue'
import SpeciesView from '@/views/SpeciesView.vue'

const routes = [
  {
    path: '/pokedex/:pokedex?/:page?',
    name: 'pokedex',
    props: (route: RouteLocationNormalized) => ({
      pokedex: route.params.pokedex || 'national',
      page: Number(route.params.page) || 1,
    }),
    component: PokedexView,
  },
  {
    path: '/species/:name',
    name: 'species',
    props: true,
    component: SpeciesView,
  },
]

export default createRouter({
  history: createWebHistory(),
  routes,
})
