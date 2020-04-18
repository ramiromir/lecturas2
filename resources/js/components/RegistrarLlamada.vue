<template>
    <div>
        <h3 class="text-center">Registrar Llamada</h3>
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="addLlamada">
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
                    <button type="submit" class="btn btn-primary">Registrar</button>
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
        methods: {
            addLlamada() {

                this.axios
                    .post('http://localhost:8000/api/llamada/add', this.llamada)
                    .then(response => (
                        this.$router.push({name: 'home'})
                        // console.log(response.data)
                    ))
                    .catch(error => console.log(error))
                    .finally(() => this.loading = false)
            }
        }
    }
</script>