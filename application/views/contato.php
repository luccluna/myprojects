<?php $this->load->view('header') ?>
	<!--MAIN SECTION-->
	<title>Contato</title>
	<div class="main contact-page">
		<div class="container">
			<div class="row">
				<div class="col-md-9 col-sm-8">
					
					<div class="map">
						<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3225.8198742957015!2d-44.85838132900677!3d-15.952603572422442!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe617b2a70043f44c!2sLunna+Vidra%C3%A7aria!5e0!3m2!1spt-BR!2sbr!4v1555331383827!5m2!1spt-BR!2sbr" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
					<div class="content">
						<h3>Fale Conosco</h3>
						<p>Caso prefira falar conosco por e-mail, preencha o formulário abaixo e envie para nós ou escreva um e-mail para contato@lunnavidracaria.com.br</p>
						
						<!--CONTACT FORM-->
						<form method="post" id="contact" name="contact" accept-charset="UTF-8">
							<div class="row">
								<div class="col-md-6 col-sm-12">
							      	<input type="text" class="form-control" name="name" id="name" placeholder="Nome" required>
							    </div>
							    <div class="col-md-6 col-sm-12">
							      	<input type="email"  class="form-control" name="email" id="email" placeholder="E-mail" required>
							    </div>
						    </div>
						    <div class="row">
							    <div class="col-md-12 col-sm-12">
							      	<input type="text" class="form-control" name="subject" id="subject" placeholder="Assunto" required>
							    </div>
							</div>
							<textarea class="form-control" name="message" id="message" required placeholder="Mensagem" rows="10"></textarea>
				    		
				    		<button class="btn btn-success" id="submit" type="submit" name="submit" value="Submit"><i class="fa fa-envelope-o"></i>Enviar Mensagem</button>

				    		<div class="alert alert-danger">
							  	<button type="button" class="close" data-dismiss="alert">&times;</button>
							  	<strong>Algo deu errado!</strong> Verifique se preencheu corretamente todos os campos e tente enviar novamente.
							</div>

							<div class="alert alert-success">
							  	<button type="button" class="close" data-dismiss="alert">&times;</button>
							  	<strong>Muito bem!</strong> Sua mensagem foi enviada com sucesso!
							</div>
				    	</form>
				    	<!--END CONTACT FORM-->
					</div>
				</div>
				<!--SIDEBAR-->
				<div class="col-md-3 col-sm-4">
					<aside>
						<div class="input-group">
						  	<input type="text" class="form-control" placeholder="Pesquisar...">
						  	<span class="input-group-addon"><i class="fa fa-search"></i></span>
						</div>
						<h6>Serviços Anteriores</h6>
						<div class="flickr"></div>

						<h6>Publicações Recentes</h6>
						<div class="recent">
							<div class="small-post">
								<a href="post.html"><img src="<?php echo base_url() ?>assets/img/vidrosemp.png" alt="post"></a>
								<a href="post.html"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p></a>
							</div>
							<div class="small-post">
								<a href="post.html"><img src="<?php echo base_url() ?>assets/img/vidrosemp.png" alt="post"></a>
								<a href="post.html"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p></a>
							</div>
							<div class="small-post">
								<a href="post.html"><img src="<?php echo base_url() ?>assets/img/vidrosemp.png" alt="post"></a>
								<a href="post.html"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p></a>
							</div>
							<div class="small-post">
								<a href="post.html"><img src="<?php echo base_url() ?>assets/img/vidrosemp.png" alt="post"></a>
								<a href="post.html"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p></a>
							</div>
						</div>
						<h6>Ou se preferir, nos ligue</h6>
							<h6>Fixo: (38) 3631-1901</h6>
							<h6>Celular: (38) 99972-1903</h6>
						<img src="<?php echo base_url() ?>assets/img/work4.png" alt="banner">

					</aside>
				</div>
				<!--END SIDEBAR-->
			</div>
		</div>
	</div>
	<!--END MAIN SECTION-->
<?php $this->load->view('footer') ?>
