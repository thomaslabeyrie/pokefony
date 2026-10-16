import { createRouter, createWebHistory, type RouteLocationNormalized } from 'vue-router'
import PokedexView from '@/views/PokedexView.vue'
import SpeciesView from '@/views/SpeciesView.vue'

const routes = [
  {
    path: '/pokedex/:region?/:page?',
    name: 'pokedex',
    props: (route: RouteLocationNormalized) => ({
      region: route.params.region || 'national',
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
