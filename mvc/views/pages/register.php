<div class="title-page">
    <h3>Register</h3>
</div>
<div class="login-box-container">
    <div class="container">
        <ul class="tabs">
            <li class="item" rel="tab_2">Register</li>
        </ul>
        <?php
            if (isset($data["result"])) {
                echo $data["result"];
            }
        ?>
        <div class="tab-container">
            <div id="tab_2" class="tab-content">
                <p>Creating an account will save you time at checkout and allow you to access your order status and history.</p>
                <div><h2 id="message"></h2> </div>
                <div class="contact-form">
                    <form class="form-horizontal" method="POST" action="./Register/InsertUser"> 
                        <div class="form-group col-md-6 col-sm-6 col-xs-6">
                            <input type="text" class="form-control" id="inpusername" name= "username" placeholder="Username*">        
                        </div>
                        <div class="form-group col-md-6 col-sm-6 col-xs-6">
                            <input type="password" class="form-control" id="inputpass2" name="password" placeholder="Password*">            
                        </div>
                        <div class="form-group col-md-6 col-sm-6 col-xs-6">
                            <input type="text" class="form-control" id="inputemail2" name="email" placeholder="Email*">             
                        </div>
                        <div class="form-group col-md-6 col-sm-6 col-xs-6">
                            <input type="text" class="form-control" id="inputpass3" name="address" placeholder="Address">            
                        </div>
                            <div class="form-group">            
                            <button class="btn link-button lh-55 hover-white" name="btnRegister">register<i class="link-icon-white"></i></button>
                        </div>
                    </form>
                </div>
                <!-- End contact form -->
            </div>
        </div>
    </div>
    <!-- End container -->
</div>
<!-- End cat-box-container -->