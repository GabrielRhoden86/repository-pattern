<template>
    <header class="header-content">
      <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="text-gray-700 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button" aria-controls="dropdown" aria-expanded="false">
        Dropdown button
        <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
        </svg>
      </button>
      <!-- Dropdown menu -->
      <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700" role="menu" aria-labelledby="dropdownDefaultButton">
        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200">
          <li>
            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Dashboard</a>
          </li>
          <li>
            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Settings</a>
          </li>
          <li>
            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Earnings</a>
          </li>
          <li>
            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Sign out</a>
          </li>
        </ul>
      </div>
      <div class="header-buttons">
        <Botao texto="Clique Aqui" @click="botao1Click" />
        <Botao @click="botao2Click" />
        <Botao texto="Confirmar" @click="botao3Click" />
      </div>
    </header>
  </template>



<script>
import Botao from '@/Components/Botao.vue';
export default {
  name: "Header",
  components: {
    Botao
  },
  data() {
    return {
      msg: "Item Header!",
    };
  },
  methods: {
    botao1Click() {
      alert('Botão 1 clicado!');
    },
    botao2Click() {
      alert('Botão 2 clicado!');
    },
    botao3Click() {
      alert('Botão 3 clicado!');
    },
  },
};
</script>

