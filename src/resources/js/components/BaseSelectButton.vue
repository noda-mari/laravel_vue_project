<template>
    <select
      :value="modelValue"
      @change="$emit('update:modelValue', $event.target.value)"
    >
      <option
        v-for="(option, index) in options"
        :key="index"
        :selected="option === modelValue"
      >
        {{ option }}
      </option>
    </select>
  </template>
  
  <script>
  export default {
    props: ['options', 'modelValue'],
  };
  </script>