<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
        rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
        crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <header>
        <div class="nav-bar">
            <nav class="navbar navbar-light bg-dark">
                <div class="container-fluid">
                    <a href="/">
                        <p class="navbar-brand mb-0 h1" style="color:white;">Raport Mahasiswa</p>
                    </a>
                </div>
            </nav>
        </div>
    </header>
    <main>
        <div class="import-data">
            <form action="/upload_excel" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label>Pilih File Excel</label><br>
					<input type="file" name="fileExcel" required accept=".xls, .xlsx">
				</div>
				<div class="button-submit">
					<button class='btn btn-success' type="submit">
						<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
			    	    Import		
					</button>
				</div>
			</form>
        </div>
        <div class="render-section">
            <center>
                <?= $this->renderSection('content'); ?>
            </center>
        </div>
    </main>
    <footer>
        <div class="footer">
            <nav class="navbar navbar-light bg-dark">
                <div class="container-fluid">
                    <a href="/">
                        <p class="navbar-brand mb-0 h1" style="color:white;">Raport Mahasiswa</p>
                    </a>
                </div>
            </nav>
        </div>
    </footer>

    <style>
        .container-fluid a{
            text-decoration: none;
        }

        .import-data{
            padding: 10px;
            font-family: 'Roboto Slab', serif;
        }
        
        .import-data .form-group, .button-submit{
            padding: 10px;
        }

        .render-section{
            padding-bottom: 30px;
        }
    </style>
</body>
</html>