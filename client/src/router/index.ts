import { createRouter, createWebHistory } from 'vue-router'

import PokedexView from '@/views/PokedexView.vue'
//import PokemonView from '@/views/PokemonView.vue'

const routes = [
  {
    path: '/pokedex/:region',
    name: 'pokedex',
    props: true,
    component: PokedexView,
  },
  // { path: '/pokemon/:nameOrId', name: 'pokemon', component: PokemonView },
]

export default createRouter({
  history: createWebHistory(),
  routes,
})
