<template>
  <div>
    <div class="header">
      <div class="logo__img"></div>
      <h1>My dictionary</h1>
    </div>
    <div class="word__add-box">
      <BaseInput v-model:value="word" />
      <BaseInput v-model:value="meaning" />
      <BaseInput v-model:value="example_sentence" />
      <BaseSelectButton />
      <BaseButton @click="wordAdd(word)">登録</BaseButton>
    </div>
    {{ categoryLists }}
  </div>
</template>

<script>
import axios from "axios";
import BaseInput from "./components/BaseInput.vue";
import BaseButton from "./components/BaseButton.vue";
import BaseSelectButton from "./components/BaseSelectButton.vue";

export default {
  name: "app",
  components: {
    BaseInput,
    BaseButton,
    BaseSelectButton,
  },
  data() {
    return {
      word: "",
      meaning: "",
      example_sentence: "",
      categoryLists: [],
    };
  },
  methods: {
    async getCategoryList() {
      const resData = await axios.get("http://127.0.0.1/api/word/");
      this.categoryLists = resData.data.data;
    },
    wordAdd(word) {},
  },
  created() {
    this.getCategoryList();
  },
};
</script>