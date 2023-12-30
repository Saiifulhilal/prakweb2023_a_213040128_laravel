<template>
    <div>
        <input type="text" v-model="searchQuery" @input="search" placeholder="Search..." class="p-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500">
        
        <ul class="mt-2">
            <li v-for="(result, index) in searchResults" :key="index" class="py-1 border-b border-gray-300">{{ result.title }}</li>
        </ul>
    </div>
</template>

<script>
export default {
    data() {
        return {
            searchQuery: '',
            searchResults: []
        };
    },
    methods: {
        search() {
            // Lakukan permintaan pencarian ke backend dan atur searchResults
            // Misalnya, menggunakan Axios
            axios.get(`/search?query=${this.searchQuery}`)
                .then(response => {
                    this.searchResults = response.data;
                })
                .catch(error => {
                    console.error('Error fetching search results:', error);
                });
        }
    }
}
</script>

<style scoped>
/* Styling khusus komponen ini */
</style>
    