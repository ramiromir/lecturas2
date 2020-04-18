<template>
    <div>
        <h3 class="text-center">Editar Llamada</h3>
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="updateLlamada">
                    <div class="form-group">
                        <label>NUS</label>
                        <input type="text" class="form-control" v-model="llamada.nus">
                    </div>
                    <div class="form-group">
                        <label>Estado</label>
                        <input type="text" class="form-control" v-model="llamada.estado">
                    </div>
                    <div class="form-group">
                        <label>Comentario</label>
                        <input type="text" class="form-control" v-model="llamada.comentario">
                    </div>
                    <div class="form-group">
                        <label>Usuario</label>
                        <input type="text" class="form-control" v-model="llamada.usuario">
                    </div>
                    <button type="submit" class="btn btn-primary">Actualizar Registro</button>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                llamada: {}
            }
        },
        created() {
            this.axios
                .get(`http://localhost:8000/api/llamada/edit/${this.$route.params.id}`)
                .then((response) => {
                    this.llamada = response.data;
                    // console.log(response.data);
                });
        },
        methods: {
            updateLlamada() {
                this.axios
                    .post(`http://localhost:8000/api/llamada/update/${this.$route.params.id}`, this.llamada)
                    .then((response) => {
                        this.$router.push({name: 'home'});
                    });
            }
        }
    }
</script>