<html>
		<head>
			<title>Divocakos Preklados</title>
			<link rel="shortcut icon" type="image/jpg" href="favicon-16x16.png"/>

			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
			<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">
<style>

@media(max-width:960px){
	form{
		flex-wrap:wrap;
	}
}
</style>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-JQREL3RSYJ"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-JQREL3RSYJ');
</script>

		</head>
		<body>

				<nav class="navbar navbar-expand-lg navbar-light bg-light">
				  <div class="container-fluid">
					<a class="navbar-brand" href="https://utekal.sk">by utekal.sk</a>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					  <span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarNav">
					  <ul class="navbar-nav">
						<li class="nav-item">
						  <a class="nav-link active" aria-current="page" href="https://www.instagram.com/peto_uto/"><i class="bi bi-instagram"></i></a>
						</li>
						<li class="nav-item">
						  <a class="nav-link" href="https://twitter.com/peterutekal_"><i class="bi bi-twitter"></i></a>
						</li>
						<li class="nav-item">
						  <a class="nav-link" href="https://www.facebook.com/profile.php?id=100014015532696"><i class='bi bi-facebook'></i></a>
						</li>
					  </ul>
					</div>
				  </div>
				</nav>
			<div class='container mt-3 jumbotron'>
				<h1 class='text-center'><img src='divocak.jpeg' height='40' /> divocakos-preklados.sk</h1>
				<p class='text-center'>Preklados divočákos jazykos jednoduchos né šak vieš.</p>

<div class='alert alert-info' role='alert'>
				<p class='text-center' style='padding:0;margin:0;'><b>Tutorialos:</b> Jednoduchos použitos daj do lavos slovenskos textos klikni ENTEROS a na pravos uvidíš divočákos textos.</p>
</div>
			</div>

	
			<form method='post' id='form' class='container d-flex justify-content-between m-auto flex-row'>
						<label class='w-100'> SK
						<textarea name='sk' class='form-control' style="min-height:300px;" row="30"></textarea>
						</label>

						<button class='btn btn-primary m-5' id='btn' style='align-self:start;' formmethod="post" name='button' type='submit'><i class="bi bi-arrow-right"></i></button>
						<label class='w-100'> DK
						<textarea class='form-control' style="min-height:300px;" row="30"><?php include('backend.php') ?></textarea>
						</label>
			</form>

		</body>
	<script>
			let btn  = document.getElementById('btn');
			document.addEventListener('keypress', function(e){
				if(e.key == 'Enter'){
					btn.click();
				}
			})
	
</script>


</html>
