<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">



               <!-- <router-link :to="{name: 'userlist'}" class="btn btn-primary">User List</router-link>
               <router-link :to="{name: 'adduser'}" class="btn btn-primary"> Add New User</router-link> -->
             
                 <br>       

                <div class="card">

                      
                                            
                    <div class="card-header">User List</div>

                    <div class="card-body">
                        
                  

      <table class="table">
    <thead>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Action</th>
            <!-- <th>Actions</th> -->
        </tr>
    </thead>
    <tbody>
        <tr v-for="user in user_list" :key="user.id">

            <td> {{user.first_name}}</td>
            <td> {{user.last_name}}</td>

            <td>
                <button  class="btn btn-danger btn-sm" @click="delete_user(user.id)"> Delete </button> &nbsp; | &nbsp;
                <router-link :to="{name: 'edituser', params: { id: user.id }}" class="btn btn-success">Edit</router-link>
 
            </td>
        </tr>
    </tbody>
</table>

            


       
                   
                    </div>
                </div>
            </div>
        </div>

    </div>
</template>

<script>
import Axios from 'axios';
    export default {
        data(){

            return{
                user_list : [],
        }
        },
        created(){
            Axios.get('/custom_users_index')
            .then(response => {
                console.log(response);
                this.user_list = response.data;
            })
        },
        methods:{ 
            delete_user(id){ 
                let text = "Are you sure to Delete  ";
                    if (confirm(text) == true) {
                        Axios.put('/custom_users_delete/'+id)
                                    .then( response => {
                                        console.log(response); 
                                         this.user_list = this.user_list.filter(item => item.id !== id);
                                    })
               
                    } else {
                    return;
                    }




              
            }


            

            // delete_user: function(id) {
            //     axios.post('/posts/'+id,{_method: 'delete'})
            // }



        },
        mounted() {
            console.log('Component mounted.')

        }
    }
</script>
