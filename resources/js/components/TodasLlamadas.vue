<template>
    <div>
        <h3 class="text-center">Registro de Llamadas</h3><br/>

        <table class="table table-bordered">
            <thead>
            <tr>
                <th>ID</th>
                <th>Nus</th>
                <th>Estado</th>
                <th>Comentario</th>
                <th>Usuario</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="llamada in llamadas" :key="llamada.id">
                <td>{{ llamada.id }}</td>
                <td>{{ llamada.nus }}</td>
                <td>{{ llamada.estado }}</td>
                <td>{{ llamada.comentario }}</td>
                <td>{{ llamada.usuario }}</td>
                <td>{{ llamada.created_at }}</td>
                <td>{{ llamada.updated_at }}</td>
                <td>
                    <div class="btn-group" role="group">
                        <router-link :to="{name: 'edit', params: { id: llamada.id }}" class="btn btn-primary">Modificar
                        </router-link>
                        <button class="btn btn-danger" @click="deleteLlamada(llamada.id)">Eliminar</button>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                llamadas: []
            }
        },
        created() {
            this.axios
                .get('http://localhost:8000/api/llamadas')
                .then(response => {
                    this.llamadas = response.data;
                });
        },
        methods: {
            deleteLlamada(id) {
                this.axios
                    .delete(`http://localhost:8000/api/llamada/delete/${id}`)
                    .then(response => {
                        let i = this.llamadas.map(item => item.id).indexOf(id); // find index of your object
                        this.llamadas.splice(i, 1)
                    });
            }
        }
    }
</script>