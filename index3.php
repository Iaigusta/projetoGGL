<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/styles.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Incrições</title>
</head>
<body>
   <section>
    <div class="form-idade"> 
        <div class="form-idade">
        <h1>QUAL A SUA IDADE?</h1>
    <form method="post" action="index4.php">
    <input id="idade" name="idade" type='range' value='50' max='100'> 
    <input type="submit" value="enviar">
    <span id="s_idade">50</span>
    <script>
        var $range = document.querySelector('#idade'),
            $value = document.querySelector('#s_idade');

        $range.addEventListener('input', function() {
        $value.textContent = this.value;
        });
    </script>
   
    </form>
    </div>
    </div>
    </section>
</body>
</html> 