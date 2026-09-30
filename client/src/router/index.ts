import { createRouter, createWebHistory } from 'vue-router'

import PokedexView from '@/views/PokedexView.vue'
import SpeciesView from '@/views/SpeciesView.vue'

const routes = [
  {
    path: '/pokedex/:region',
    name: 'pokedex',
    props: true,
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
