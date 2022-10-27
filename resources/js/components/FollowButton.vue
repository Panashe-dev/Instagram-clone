<template>
    <div>
      <button class="btn btn-primary ms-4 btn-sm" @click="followeUser">Follow</button>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        methods: {
            followeUser(){
                axios.post('/follow/1')
                .then(response=>{
                    alert(response.data);
                })
            }
        }
    }
</script>
