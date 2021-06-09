<template>
    <input
        class="btn btn-primary 
        btn-sm d-block w-100"
        type="submit"
        value="Borrar Receta"
        @click="eliminarReceta"
    />
</template>

<script>
export default {
    props: ["receta"],
    methods: {
        eliminarReceta() {
            this.$swal({
                title: "Esta seguro que desea borrar la receta",
                text: "Una vez borrada no podrá revertir los cambios!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Si",
                cancelButtonText: "No"
            }).then(result => {
                if (result.value) {
                    const params = {
                        id: this.receta
                    };
                    axios.post(`/recetas/${this.receta}`,{ params, _method: "delete"})
                        .then(resp => {
                            if (resp) {
                                // console.log(resp);
                                this.$swal({
                                    title: "Receta Eliminada",
                                    text: "Se eliminó la receta",
                                    icon: "success"
                                });
                                this.$el.parentNode.parentNode.parentNode.removeChild(this.$el.parentNode.parentNode);  
                            }})
                        .catch(err => {
                        //    console.log(err);
                           this.$swal({
                                title: "Uppsss, hubo un error!!! ",
                                text: `Error code: ${err.response.status}`,
                                icon: "error"
                            });
                        })    
                }
            });
        }
    }
};
</script>
