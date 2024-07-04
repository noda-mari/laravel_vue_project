<template>
    <button @click="btnClick">
        <slot></slot>
    </button>
</template>

<script>
export default {
  name:"BaseButton",
    methods: {
        btnClick() {
      this.$emit('click');
    }
  }
}
</script>

<style scoped>

</style>