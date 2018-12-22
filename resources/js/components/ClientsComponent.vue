<template>
    <div id="clients">
        <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Clients</div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-striped">
                                <thead>
                                    <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Total</th>
                                    <th scope="col" class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="(client, index) in clients" :key= "client.id">
                                    <th scope="row">{{client.id}}</th>
                                    <td>{{client.name}}</td>
                                    <td>{{client.email}}</td>
                                    <td>{{client.mobile}}</td>
                                    <td>{{client.total}}</td>
                                    <td class="text-center">
                                        <button type="button" class="btn btn-info btn-sm">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                        <button type="button" class="btn btn-primary btn-sm">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button type="button" class="btn btn-danger btn-sm">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </td>
                                    
                                    </tr>
                                </tbody>
                        </table> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</template>

<script>
    export default {
        data(){
            return{
                clients:[]
            }
        },
        mounted() {
            console.log('Component mounted.')
            this.getData();
        },

        methods:{

            getData(){
                axios.get('http://localhost/VueLaravel/public/api/client')
                .then(response => {

                    this.clients = response.data.data
                })

                .catch(e =>{
                    console.log(e)
                })
            }
        }
    }
</script>
