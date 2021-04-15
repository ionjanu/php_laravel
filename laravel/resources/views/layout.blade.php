<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma.min.css">
    <title> @yield('title')</title>

<style>

a { color: inherit; } 
   form {
    width: 500px;
    margin: 0 auto;
    margin-top: 200px;
    display: flex;
    justify-content: space-between;
    padding: 40px;
   }

   .wellcome_ {
    width: 420px;
    margin: 0 auto;
    margin-top: 230px;
    padding: 40px;
   }

   .wellcome_ button {
    margin: 5px;
   }

   form {
    width: 700px;
    margin: 0 auto;
    margin-top: 230px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 40px;
   }



   * {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}

.grid-layout {
  width: 744px;
    margin: 0 auto;
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(141px, 1fr));
    grid-gap: 5px;
    grid-auto-rows: minmax(180px, auto);
    grid-auto-flow: dense;
    padding: 10px;
    margin-top: 40px;
  }
  
  .grid-item {
    padding: 1rem;
    font-size: 14px;
    font-weight: bold;
    text-transform: uppercase;
    color: rgb(46, 44, 44);
    border: 1px solid rgb(204, 204, 204);
    /* border-radius: 10px; */
    background-color: #DDEDF4;
    
  }
 /*  .grid-item:nth-child(odd) {
    background-color: #00d1b2;
  } */
  
  .block1 {
    grid-column-end: span 2;
    grid-row-end: span 1;
    background-color: #E6E2DD;
    border: 1px solid rgb(204, 204, 204);
  }
  
  .block2 {
    grid-column-end: span 2;
    grid-row-end: span 2;
    background-color: #F8E5E5;
    border: 1px solid rgb(204, 204, 204);
  }
  
  .block3 {
    grid-column-end: span 3;
    grid-row-end: span 1;
    background-color: #E8EAE3;
    border: 1px solid rgb(204, 204, 204);
  }

  .block4 {
    grid-column-end: span 4;
    grid-row-end: span 1;
    background-color: #CAE7DF;
    border: 1px solid rgb(204, 204, 204);
  }

</style>
    </style>
</head>
<body>
    @yield('main_content')

    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    
<script>
    var a = 0;
    var b = 0;
    var c = 0;
    var d = 0;

    $('#color1').click(function () {
        if ($(this).is(':checked')) {
            a = 1;
            add();
        }
    });
    $('#color2').click(function () {
        if ($(this).is(':checked')) {
            b = 1;
            add();
        }
    });
    $('#color3').click(function () {
        if ($(this).is(':checked')) {
            c = 1;
            add();
        }
    });
    $('#color4').click(function () {
        if ($(this).is(':checked')) {
            d = 1;
            add();
        }
    });

    function add() {
        $(".color").val("" + a + b + c + d);
    }

</script>

</body>
</html>