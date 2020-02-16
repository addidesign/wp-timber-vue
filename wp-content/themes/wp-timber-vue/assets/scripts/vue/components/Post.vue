<template>
  <div class="pt-4">
    <template v-if="post">
      <h1>{{ message }}</h1>
    </template>
    <Loader v-else/>
  </div>
</template>

<script>
// import axios from "axios";
import Loader from "./Loader.vue";
import SETTINGS from "../../settings";

export default {
  data() {
    return {
      post: false,
      message: ''
    };
  },

  computed: {},

  methods: {
    get_post: function() {
      this.post = true;
      this.message = 'hello';
    }
  },

  components: {
    Loader
  }
};
</script>
