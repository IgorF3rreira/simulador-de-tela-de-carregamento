<?php
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simulação de loading</title>

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


    <!-- Jquery -->

    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

        <!-- css personalizado -->

        <style>
            #aguarde{
                width: 400px;
                height: 300px;
                position: absolute;
                top: 50%;
                left: 50%;
                margin-top: -150px;
                margin-left: -200px;
            }
            #site{
                display: none;
            }
        </style>
</head>

<body>


<div id="aguarde">
    <img src="img/giphy.gif">
</div>

<main class="container mt-3" id="site">
    <h3 class="alert alert-info">
        Simulação de loading...
    </h3>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab quam ipsa, aspernatur quia dolorum quidem doloremque nobis voluptatibus mollitia quo cum suscipit porro eaque eligendi atque illo deleniti eum animi!</p>

    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro mollitia, animi dolore voluptatibus enim ullam recusandae ex, quia laboriosam nihil aliquam, maiores autem sed quam accusantium perferendis. Neque, illum odio!</p>

    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sunt deserunt, labore molestias dolor soluta saepe voluptate facere, temporibus dolorum pariatur, fugiat ad iste consectetur quos veniam beatae debitis ab a.</p>

</main>



<script type="text/javascript">
    $(document).ready(function(){
        $('#aguarde').delay(2000).fadeOut('slow');
        $('#site').delay(2000).fadeIn('slow');
    })
</script>

</body>

</html>

?>
