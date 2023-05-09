<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JavaScript 3</title>
</head>
<body>
    <div id="artikel1">
        <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam optio tenetur sunt accusantium assumenda, quas deleniti necessitatibus illo fugit, voluptatem totam fugiat sed dolores aliquam dolor esse quia maxime! Neque!</h2>
    </div>
    <div class="artikel2">
        <h2>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quasi necessitatibus aliquam inventore sit laudantium eligendi at rem nesciunt labore voluptas. Veritatis eaque aut ipsam deleniti, porro quidem non fugit quaerat.</h2>
    </div>

    <script>
        document.getElementById("artikel1").style.color = "red";

        const obj = document.getElementsByClassName("artikel2");
        obj[0].style.color = "blue";
    </script>
</body>
</html>