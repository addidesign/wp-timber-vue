import Vue from 'vue';
require('./bootstrap');

import Post from './vue/components/Post.vue';
import Loader from './vue/components/Loader.vue';

new Vue({
    el: '#app',
    components: { Post, Loader }
});