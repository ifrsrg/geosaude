    <!-- Page Content -->
    <div class="container">

        <!-- Portfolio Item Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Projeto GeoSaúde - IFRS 
                    <small></small>
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Portfolio Item Row -->
        <div class="row">

            <div class="col-md-8">
                <img class="img-responsive" src="<?php echo base_url();?>imagens/logo1.gif" alt="">
            </div>

            <div class="col-md-4">
            	<?php if(!$this->session->userdata("logged_user")) ; ?>
            	<?php
            		echo form_open("login/authenticate");
            		echo form_label("Usuário: ", "user");
                	echo form_input(
                		array("name" => "user"
                       	)
                    ); echo "<br>";
            		echo form_label("Senha: ", "password");
                	echo form_password(
                		array("name" => "password"
                    	)
                    ); echo "<br>";
            		echo form_button(
            			array("content" => "Login",
                		      "type" => "submit"
            			)
            		); echo "<br>";
             		echo form_close();
             	?>
        	</div>
        <!-- /.row -->

        <!-- Related Projects Row -->
        <div class="row">

            <div class="col-lg-12">
                <h3 class="page-header"></h3>
            </div>

            <div class="col-sm-3 col-xs-6">
                <a href="#">
                    <img class="img-responsive portfolio-item" src="<?php echo base_url();?>imagens/if-prefeitura.jpg" alt="">
                </a>
            </div>

            <div class="col-sm-3 col-xs-6">
                <a href="#">
                    <img class="img-responsive portfolio-item" src="<?php echo base_url();?>imagens/tads.jpg" alt="">
                </a>
            </div>

            <div class="col-sm-3 col-xs-6">
                <a href="#">
                    <img class="img-responsive portfolio-item" src="http://placehold.it/500x300" alt="imagem geosaude">
                </a>
            </div>

            

        </div>
        <!-- /.row -->

        <hr>