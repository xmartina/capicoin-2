<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
    <link rel="stylesheet" href="login-css.css">
</head>
<body>
<h2>Login</h2>
<form action="dashboard.php" method="post">
    <label for="username_email">Username or Email:</label>
    <input type="text" name="username_email" required><br><br>

    <label for="security_question">Security Question:</label>
    <input type="text" name="security_question" required><br><br>

    <label for="security_answer">Security Answer:</label>
    <input type="text" name="security_answer" required><br><br>

    <input type="submit" name="login" value="Login">


    <div class="container mt-5">
        <div class="row d-flex justify-content-center">
            <div class="col-md-6">
                <div class="card px-5 py-5" id="form1">
                    <div class="form-data" v-if="!submitted">
                        <div class="forms-inputs mb-4"> <span>Email or username</span> <input name="username_email" autocomplete="off" type="text" v-model="email" v-bind:class="{'form-control':true, 'is-invalid' : !validEmail(email) && emailBlured}" v-on:blur="emailBlured = true">
                            <div class="invalid-feedback">A valid email is required!</div>
                        </div>
                        <div class="forms-inputs mb-4"> <span>Security Question</span> <input name="security_question" autocomplete="off" type="text" v-model="password" v-bind:class="{'form-control':true, 'is-invalid' : !validPassword(password) && passwordBlured}" v-on:blur="passwordBlured = true">
                            <div class="invalid-feedback">Password must be 8 character!</div>
                        </div>
                        <div class="forms-inputs mb-4"> <span>Security Answer</span> <input name="security_answer" autocomplete="off" type="text" v-model="password" v-bind:class="{'form-control':true, 'is-invalid' : !validPassword(password) && passwordBlured}" v-on:blur="passwordBlured = true">
                            <div class="invalid-feedback">Password must be 8 character!</div>
                        </div>
                        <div class="mb-3"> <button v-on:click.stop.prevent="submit" name="login" value="Login" type="submit" class="btn btn-dark w-100">Login</button> </div>
                    </div>
                    <div class="success-data" v-else>
                        <div class="text-center d-flex flex-column"> <i class='bx bxs-badge-check'></i> <span class="text-center fs-1">You have been logged in <br> Successfully</span> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>


<script>
    var app = new Vue({
        el: '#form1',
        data: function () {
            return {
                email : "",
                emailBlured : false,
                valid : false,
                submitted : false,
                password:"",
                passwordBlured:false
            }
        },

        methods:{

            validate : function(){
                this.emailBlured = true;
                this.passwordBlured = true;
                if( this.validEmail(this.email) && this.validPassword(this.password)){
                    this.valid = true;
                }
            },

            validEmail : function(email) {

                var re = /(.+)@(.+){2,}\.(.+){2,}/;
                if(re.test(email.toLowerCase())){
                    return true;
                }

            },

            validPassword : function(password) {
                if (password.length > 7) {
                    return true;
                }
            },

            submit : function(){
                this.validate();
                if(this.valid){
                    this.submitted = true;
                }
            }
        }
    });
</script>
</body>
</html>
