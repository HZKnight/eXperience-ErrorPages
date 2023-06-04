<!doctype html>
<html lang="it">
	<head>
    	<title>{$title}</title>
    
		<meta content="{$title}" name="title">
		<meta content="Sito dedicato al modellismo ferroviario realizzaro per esperti e non." name="description">
		<meta content="ferrovia, ferrovie, binari, binario, traversine, traversina, modellismo, modellismo ferroviario, ferroviario, fermodellismo, vagoni, vagone, locomotori, locomotore, immagini, download" name="keywords">
		<meta content="1 Days" name="revisit-after">
	
    	<meta charset="UTF-8">
    	<!-- meta name="viewport" content="width=device-width, initial-scale=1.0"/-->
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
        
    	<meta name="author" content="LucLiscio - H0Model.Org">
    	<link rel="manifest" href="manifest.json">
    
    	<link href="favicon.ico" rel="shortcut icon">
    	<link rel="apple-touch-icon" href="apple-touch-icon-iphone_0002.png">
    	<link rel="apple-touch-icon" sizes="72x72" href="apple-touch-icon_0003.png">
    	<link rel="apple-touch-icon" sizes="114x114" href="apple-touch-icon_0004.png">    

		<!-- UIkit CSS -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.16.19/dist/css/uikit.min.css" />

    	<link rel="stylesheet" type="text/css" href="assets/css/splash.css" />

		<!-- UIkit JS -->
		<script src="https://cdn.jsdelivr.net/npm/uikit@3.16.19/dist/js/uikit.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/uikit@3.16.19/dist/js/uikit-icons.min.js"></script>
    		
	</head>
	<body onload="redirect ()" class="center">
		
		<div class="splash_box fade-in">
			<div class="content round shadow">
				
				<img src="assets/images/h0model.png" alt="HZKnight.Org - Developement Server" class="logo">
				<h1 class="uk-heading-line uk-text-center uk-text-warning"><span>Errore {$error}</span></h1>
				<p class="uk-text-default uk-text-justify">{$message}</p> 

				<div style="width:100%; text-align:right;"> 
                    <a href="{$return}" class="uk-button uk-button-default round" style="vertical-align:middle"><span uk-icon="icon: home" class="uk-text-primary"></span>&nbsp;&nbsp; Vai alla Home Page</a>
                </div>
			
			</div>		    	
		</div>

		<div class="footer fade-in">
			<div class = "part1">
			<strong>&copy;{$copydate} {$copy}</strong> | Powered by eXperience ErrorPages v1.0.0
			</div>
			<div class = "part2">
				
			</div>
		</div>
	</body>
</html>