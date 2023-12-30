import './bootstrap';

import Vue from 'vue';
import SearchComponent from './components/SearchComponent.vue';

const app = new Vue({
    el: '#app',
    components: {
        SearchComponent,
    },
});