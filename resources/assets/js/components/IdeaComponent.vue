<template>
    <div>
        <h2 class="text-center">Captura tus ideas</h2>
        <div class="card">
            <div class="card-body">
                <h4>¿En que estás pensando?</h4>
                <form v-on:submit.prevent="createIdea">
                    <div class="form-group">
                        <div class="input-group">
                            <input type="text" v-model="newIdea" class="form-control input-sm" maxlength="255">
                            <div class="input-group-prepend">
                                <button type="submit" class="btn btn-primary"><i class="fas fa-plus"></i> Agregar</button>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <ul class="list-unstyled">
                        <li v-for="idea in ideas">
                            <p>
                                <small class="text-muted">{{since(idea.created_at)}}</small>
                               {{idea.description}}
                            </p>

                        </li>
                    </ul>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    import  axios    from 'axios';
    import  toastr   from 'toastr';
    import  moment   from 'moment';

    moment.locale('es');
    export default {

        data(){
            return {
                ideas: [],
                newIdea: ''
            }
        },
        created:function(){
            this.getIdeas();
        }
        ,
        methods:{
            since:function(d){
                  return moment(d).fromNow();
            },
            getIdeas:function(){
                var url = 'mis-ideas';
                axios.get(url).then(response => {
                    this.ideas = response.data;
                });
            },
            createIdea:function(){
                var url = 'guardar-idea';
                axios.post(url, {
                    description: this.newIdea
                }).then(response => {
                    this.getIdeas();
                    this.newIdea = '';
                    toastr.success('Nueva idea registrada.');
                }).catch(error => {
                    toastr.error('Error al guardar la idea.');
                });
            }
        }
    }
</script>
