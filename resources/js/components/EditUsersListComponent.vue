<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8"> 
                <div class="card">

 

                    <div class="card-header"> 
                        <h3 class="text-center">Edit User </h3>
                    </div>

                    <div class="card-body">
                      
                          <div>
        
        <div class="row">
            <div class="col-md-12">
            <form @submit.prevent="editUser">
                  <input type="hidden" name="user_id" value="2">
                    <div class="form-group">
                        <label>First Name</label>
                    <input type="text" class="form-control" v-model="user.first_name" required>
                    </div>
                    <div class="form-group">
                        <label>Last Name</label>
                         <input type="text"  class="form-control" v-model="user.last_name" required>
                    </div>

                    <div class="form-group">
                        <br>
                        <button type="submit" class="btn btn-primary"> Update </button>
                      
                       <router-link :to="{ name: 'userlist' }" class="btn btn-danger"> Cancel</router-link>
 
                    </div>
                   
                </form>
            </div>
        </div>
    </div>
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
                user : {}, 
                error : '',
        }
        },
        created(){
            Axios.get('/custom_users_edit/'+this.$route.params.id)
            .then(response => {
                console.log(response);
                this.user = response.data;
            })
            .catch(err => this.error = err )
        },
        methods:{ 
            
            editUser() {
                Axios
                    .post('/custom_users_update/', this.user)
                    .then(response => (
                        // this.$router.push({ name: 'home' })
                        console.log(response)
                     
                    ))
                    .catch(err => console.log(err))
                    .finally(() => this.loading = false)
            }

        },
        mounted() {
            console.log('Component mounted.')

        }
    }
</script>
