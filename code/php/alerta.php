<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title></title>
</head>
<body>
<div class="alert alert-danger position-absolute d-inline-flex p-2" role="alert">
  <p>La sesion expira en:&nbsp</p> <div id ="number" class="text-danger"></div>
</div>

<script type="text/javascript">
    n=10
    var l = document.getElementById("number");
    var id = window.setInterval(function(){
        document.onmousemove = function(){
            n=10
        };
        l.innerText= n;
        n--;
        if(n<-1){
            alert("La sesion expiro");
            location.href ="close_session.php";
        }
    },1200);
</script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>