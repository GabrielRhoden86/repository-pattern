<template>
  <button
    @click="handleClick" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
    {{ texto }}
  </button>
</template>

  <script>
export default {
  props: {
    texto: {
      type: String,
      default: "Botão Default", // Texto padrão caso nenhum seja passado
    },
  },
  methods: {
    handleClick() {
      this.$emit("click"); // Certifique-se de que isso só está sendo chamado uma vez
    },
  },
};
</script>


