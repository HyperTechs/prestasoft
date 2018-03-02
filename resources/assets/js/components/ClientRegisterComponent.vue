<template>
    <div>
        <h2 class="text-center">Registro de clientes</h2>
        <div class="card">
            <div class="card-body">

                <form v-on:submit.prevent="saveClient()">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col">
                                    <label for="name">Nombre</label>
                                    <input type="text" name="name" id="name" v-model="client.name" class="form-control">
                                </div>
                                <div class="col">
                                    <label for="name">Apellido</label>
                                    <input type="text" name="last_name" id="last_name" v-model="client.last_name"
                                           class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="identificacion">Cedula</label>
                                    <input type="text" name="identificacion" id="identificacion"
                                           v-model="client.identificacion" class="form-control">
                                </div>
                                <div class="col">
                                    <label for="telefono">Telefono</label>
                                    <input type="text" name="telefono" id="telefono" v-model="client.telefono"
                                           class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="direccion">Dirección</label>
                                    <textarea name="direccion" id="direccion" v-model="client.direccion" cols="4"
                                              rows="4" class="form-control"></textarea>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col">
                                    <button type="submit" class="btn btn-primary float-right">Crear</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col">
                                    <table class="table table-striped table-hover">
                                        <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Nombre</th>
                                            <th scope="col">Telefono</th>
                                            <th colspan="5" scope="col">&nbsp;</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr v-for="c in listClient">
                                            <th scope="row">{{c.id}}</th>
                                            <td>{{c.name}} {{c.last_name}}</td>
                                            <td>{{c.telefono}}</td>
                                            <td width="10px;">
                                                <button class="btn btn-danger btn-sm">Eliminar</button>
                                            </td>
                                            <td width="10px;">
                                                <button class="btn btn-info btn-sm">Editar</button>
                                            </td>
                                            <td width="10px;">
                                                <button class="btn btn-dark btn-sm">Ver</button>
                                            </td>
                                            <td width="10px;">
                                                <button class="btn btn-dark btn-sm">Prestamo</button>
                                            </td>
                                        </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>


<script>
    import axios from 'axios';
    import toastr from 'toastr';


    export default {

        data() {
            return {
                client: {
                    name: '',
                    last_name: '',
                    identificacion: '',
                    telefono: '',
                    direccion: ''
                },
                listClient: []
            }
        },
        created: function () {
            this.getClient();
        },
        methods: {
            saveClient: function () {
                var url = '../clients';
                axios.post(url, this.client).then(response => {
                    this.client = '';
                    toastr.success('Cliente registrado exítosamente!')
                    this.getClient();
                }).catch(error => {

                });
            },
            getClient: function () {
                var url = '../clients';
                axios.get(url).then(response => {
                    this.listClient = response.data;
                    console.log(response);
                }).catch(error => {

                });
            },
            editClient: function () {

            },
            deleteClient: function () {

            }
        }

    }
</script>