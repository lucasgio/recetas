<template>
    <div>
        <span
            class="like-btn"
            @click="likeReceta"
            :class="{ 'like-active': this.isActive }"
        >
        </span>
     <p>{{cantidadLikes}} personas les gusto esta receta</p>
    </div>
</template>

<script>
export default {
    props: ["receta", "like", "likes"],
    data: function() {
        return {
            isActive: this.like,
            totalLikes:this.likes
        };
    },
    methods: {
        likeReceta() {
            axios
                .post("/recetas/" + this.receta)
                .then(resp => {
                    (resp.data.attached.length > 0)
                                                ? this.$data.totalLikes++      
                                                : this.$data.totalLikes--;
                    this.isActive = !this.isActive;
                })
                .catch(error =>(error.response.status === 401)? window.location = '/error':false);
        }
    },
    computed:{
        cantidadLikes:function () { 
            return this.totalLikes;
        }
    }
    
};
</script>
