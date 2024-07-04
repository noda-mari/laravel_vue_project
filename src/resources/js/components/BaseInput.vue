<template>
  <div>
    <input
      class="form-input"
      :value="value"
      @input="$emit('update:value', $event.target.value)"
    />
  </div>
</template>
    
<script>
export default {
  name:"BaseInput",
  props: ["value"],
  emits: ['update:value'],
};
</script>
    
<style scope>
.form-input {
  padding: 1rem;
}
</style>