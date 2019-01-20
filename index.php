<?php 
	$pdo = new PDO('mysql:host=localhost;dbname=cms','root','');
	$sobre = $pdo->prepare("SELECT * FROM `tb_sobre`");
	$sobre->execute();
	$sobre = $sobre->fetch()['sobre'];
?>
<!doctype html>
<html lang="pt-br">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="css/bootstrap.css">
		<!-- Font Awesome -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
		<!-- Bootstrap core CSS -->
	
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/cube.css">		
		<title>Ta cu medo frontender</title>
	</head>
	<body>
		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#"><span class="glyphicon glyphicon-piggy-bank" aria-hidden="true"></span></a>
				</div>
				<div id="navbar" class="collapse navbar-collapse">
					<ul class="nav navbar-nav">
						<li class="active"><a href="#">Home</a></li>
						<li><a href="#about">Sobre</a></li>
						<li><a href="#contact">Contato</a></li>
					</ul>
				</div><!--/.nav-collapse -->
			</div>
		</nav>
		<div class="box">
			<section class="banner">
				<div class="overlay"></div>
			 <div class="container chamada-banner">
				 <div class="row">
					 <div class="col-md-12 text-center">
						 <h1><?php echo htmlentities('<'); ?>Papagaio.Team<?php echo htmlentities('>'); ?></h1>
						 <p>A empresa de quem come o cu de quem ta lendo.</p>
						 <a href="">Quero que coma!</a>
					 </div>
				 </div>
			 </div> 
			</section>
		<section class="cadastro-lead">
			<div  class="container">
				<div class="row text-center">
					<div class="col-md-6">
						<h2>Inscreva-se na nossa lista <span class="glyphicon glyphicon-piggy-bank" aria-hidden="true"></span></span></h2>
					</div>
					<div class="col-md-6">
						<form method="post">
							<input type="email" name="email" placeholder="E-mail" require><input type="submit">
						</form>
					</div>
				</div>
			</div>
		</section>

		<section class="depoimento">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2 id="#sobre">Sobre</h2>
						<blockquote>
							<p>"<?php echo $sobre; ?>"</p>
						</blockquote>
					</div>
				</div>
			</div>
		</section>

	<section class="diferenciais text-center">
		<h2>Conheça</h2>
		<div class="container diferencias-container">
			<div class="row">
				<div class="col-md-3 box-diferenciais">
					<h3><span class="glyphicon glyphicon-fire"></span></h3>
					<h2>Diferencial #1</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt saepe id in, aliquid amet reprehenderit, odit adipisci. Amet impedit, quam doloribus ratione reiciendis alias, harum aliquam sit. Iure, unde, quam!</p>
				</div>
				<div class="col-md-3 box-diferenciais">
					<h3><span class="glyphicon glyphicon-fullscreen"></span></h3>
					<h2>Diferencial #1</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt saepe id in, aliquid amet reprehenderit, odit adipisci. Amet impedit, quam doloribus ratione reiciendis alias, harum aliquam sit. Iure, unde, quam!</p>
				</div>
				<div class="col-md-3 box-diferenciais">
					<h3><span class="glyphicon glyphicon-dashboard"></span></h3>
					<h2>Diferencial #1</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt saepe id in, aliquid amet reprehenderit, odit adipisci. Amet impedit, quam doloribus ratione reiciendis alias, harum aliquam sit. Iure, unde, quam!</p>
				</div>
			</div>
		</div>
	</section>

	<section class="equipe">
		<h2 class="text-center">Equipe</h2>
		<div class="container equipe-container">
			<div class="row">

				<div class="col-md-6">
					<div class="equipe-single">
						<div class="row">
							<div class="col-md-3">
								<div class="user-picture" style="background-image: url('img/carlos.png');">
									<div class="user-picture-child">
									</div>
								</div>
							</div>
							<div class="col-md-9">
								<h3>Protegido por Deus</h3>
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore, aliquam aut incidunt amet quisquam, quaerat illo eveniet vitae quod perspiciatis cupiditate. Soluta neque eligendi ipsam, esse veniam explicabo cum quis.</p>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-6">
					<div class="equipe-single">
						<div class="row">
							<div class="col-md-3">
								<div class="user-picture" style="background-image: url('img/eduardo.png');">
									<div class="user-picture-child">
									</div>
								</div>
							</div>
							<div class="col-md-9">
								<h3>Fezinhu Patatiiih móChavão</h3>
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore, aliquam aut incidunt amet quisquam, quaerat
									illo eveniet vitae quod perspiciatis cupiditate. Soluta neque eligendi ipsam, esse veniam explicabo cum quis.</p>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-6">
					<div class="equipe-single">
						<div class="row">
							<div class="col-md-3">
								<div class="user-picture" style="background-image: url('img/fernanda.png');">
									<div class="user-picture-child">
									</div>
								</div>
							</div>
							<div class="col-md-9">
								<h3>Maria Bros</h3>
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore, aliquam aut incidunt amet quisquam, quaerat
									illo eveniet vitae quod perspiciatis cupiditate. Soluta neque eligendi ipsam, esse veniam explicabo cum quis.</p>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-6">
					<div class="equipe-single">
						<div class="row">
							<div class="col-md-3">
								<div class="user-picture" style="background-image: url('img/gabriel.png');">
									<div class="user-picture-child">
									</div>
								</div>
							</div>
							<div class="col-md-9">
								<h3>!exit.Armario</h3>
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore, aliquam aut incidunt amet quisquam, quaerat
									illo eveniet vitae quod perspiciatis cupiditate. Soluta neque eligendi ipsam, esse veniam explicabo cum quis.</p>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-6">
					<div class="equipe-single">
						<div class="row">
							<div class="col-md-3">
								<div class="user-picture" style="background-image: url('img/jose.png');">
									<div class="user-picture-child">
									</div>
								</div>
							</div>
							<div class="col-md-9">
								<h3>Tá de boina ou não? #leoMeNota</h3>
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore, aliquam aut incidunt amet quisquam, quaerat
									illo eveniet vitae quod perspiciatis cupiditate. Soluta neque eligendi ipsam, esse veniam explicabo cum quis.</p>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-6">
					<div class="equipe-single">
						<div class="row">
							<div class="col-md-3">
								<div class="user-picture" style="background-image: url('img/leo.png');">
									<div class="user-picture-child">
									</div>
								</div>
							</div>
							<div class="col-md-9">
								<h3>roquero maluco</h3>
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore, aliquam aut incidunt amet quisquam, quaerat
									illo eveniet vitae quod perspiciatis cupiditate. Soluta neque eligendi ipsam, esse veniam explicabo cum quis.</p>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-6">
					<div class="equipe-single">
						<div class="row">
							<div class="col-md-3">
								<div class="user-picture" style="background-image: url('img/rudolfo.png');">
									<div class="user-picture-child">
									</div>
								</div>
							</div>
							<div class="col-md-9">
								<h3>Mariele zangada</h3>
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore, aliquam aut incidunt amet quisquam, quaerat
									illo eveniet vitae quod perspiciatis cupiditate. Soluta neque eligendi ipsam, esse veniam explicabo cum quis.</p>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-6">
					<div class="equipe-single">
						<div class="row">
							<div class="col-md-3">
								<div class="user-picture" style="background-image: url('img/saul.png');">
									<div class="user-picture-child">
									</div>
								</div>
							</div>
							<div class="col-md-9">
								<h3>eae Raaaaasta</h3>
								<p>Eu 😡👊Não 😡👊 Adicionei 😡👊 É 😡👊 Nem 😡👊 Aceitei 😡👊 Ninguém 😡👊Pra 😡👊 FICAR 😡👊 DE 😡👊 Enfeite 😡👊 Se
								😡👊 Você 😡👊 Não 😡 Éh 😡👊 ENFEITE..... 😡
								😍#Deixe_UM 😍??👉 NUDES👈😍💕👉NO MEU CHAT👈
								😍💕Que😍💕Eu😍💕Vou😍#BATER😍💕UMA😍💕😍💕</p>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
</section>

<section class="final-site">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h2>Contato</h2>
				<form>
					<div class="form-group">
						<label for="nome">Nome:</label>
						<input type="text" name="nome" class="form-control" id="nome">
					</div>
					<div class="form-group">
						<label for="email">E-mail</label>
						<input type="email" name="email" id="email" class="form-control">
					</div>
					<div class="form-group">
						<label for="mensagem">Mensagem:</label>
						<textarea name="mensagem" class="form-control"></textarea>
					</div>
					<button type="submit" class="btn btn-default">Enviar</button>
				</form>
			</div>

			<div class="col-md-6">
				<div class="scene">
					<div class="cube cube_count_1">
						<div class="cube__face cube__face--front"></div>
						<div class="cube__face cube__face--back"></div>
						<div class="cube__face cube__face--right"></div>
						<div class="cube__face cube__face--left"></div>
						<div class="cube__face cube__face--top"></div>
						<div class="cube__face cube__face--bottom"></div>
					</div>
					<div class="cube cube_count_2">
						<div class="cube__face cube__face--front"></div>
						<div class="cube__face cube__face--back"></div>
						<div class="cube__face cube__face--right"></div>
						<div class="cube__face cube__face--left"></div>
						<div class="cube__face cube__face--top"></div>
						<div class="cube__face cube__face--bottom"></div>
					</div>
					<div class="cube cube_count_3">
						<div class="cube__face cube__face--front"></div>
						<div class="cube__face cube__face--back"></div>
						<div class="cube__face cube__face--right"></div>
						<div class="cube__face cube__face--left"></div>
						<div class="cube__face cube__face--top"></div>
						<div class="cube__face cube__face--bottom"></div>
					</div>
					<div class="cube cube_count_4">
						<div class="cube__face cube__face--front"></div>
						<div class="cube__face cube__face--back"></div>
						<div class="cube__face cube__face--right"></div>
						<div class="cube__face cube__face--left"></div>
						<div class="cube__face cube__face--top"></div>
						<div class="cube__face cube__face--bottom"></div>
					</div>
					<div class="cube cube_count_5">
						<div class="cube__face cube__face--front"></div>
						<div class="cube__face cube__face--back"></div>
						<div class="cube__face cube__face--right"></div>
						<div class="cube__face cube__face--left"></div>
						<div class="cube__face cube__face--top"></div>
						<div class="cube__face cube__face--bottom"></div>
					</div>
					<div class="cube cube_count_6">
						<div class="cube__face cube__face--front"></div>
						<div class="cube__face cube__face--back"></div>
						<div class="cube__face cube__face--right"></div>
						<div class="cube__face cube__face--left"></div>
						<div class="cube__face cube__face--top"></div>
						<div class="cube__face cube__face--bottom"></div>
					</div>
				</div>
			</div>
	</div>
</div>
</section>
<!-- Footer -->
<footer class="page-footer text-center">
    <!-- Footer Elements -->
    <div class="container">
      <!-- Grid row-->
      <div class="row">
        <!-- Grid column -->
        <div class="col-md-12 py-5">
          <div class="mb-5 flex-center">
            <!-- Facebook -->
            <a class="fb-ic" href="https://www.facebook.com/eduardo.santosd" target="_blank">
              <i class="fab fa-facebook-f fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
            </a>
            <!-- Twitter -->
            <a class="tw-ic" href="https://twitter.com/ricoeduardo_" target="_blank">
              <i class="fab fa-twitter fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
            </a>
            <!--Linkedin -->
            <a class="li-ic" href="https://www.linkedin.com/in/eduardosantos22/" target="_blank">
              <i class="fab fa-linkedin-in fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
            </a>
            <!--Instagram-->
            <a class="ins-ic" href="https://www.instagram.com/_richeduard/" target="_blank">
              <i class="fab fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
            </a>
          </div>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row-->
    </div>
    <!-- Footer Elements -->
    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2019 Copyright: Rico Eduardo
    </div>
    <!-- Copyright -->
  </footer>
	</div> <!-- div box -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>