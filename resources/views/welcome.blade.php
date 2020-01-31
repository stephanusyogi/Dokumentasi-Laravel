<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <title>Home - SIAS Binus School Serpong</title>

        <!-- Fonts -->
         <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

        <!-- Styles -->
        <style>
            *{
                margin: 0; padding:0; box-sizing: border-box;
                font-family: 'Montserrat', sans-serif;
            }

            .site-header {
                width: 100%;
                height: 100vh;
                background: #0f8a9d;
                background: linear-gradient(57deg, #00C6A7 , #1E4D92 ); 
                clip-path: polygon(0% 0%, 100% 0%, 100% 80%, 0% 100%);

            }


            nav{
                width: 100%; height: 100px;
                /*background-color:  red;*/
                display: flex; color: white;
                
            }

            .logo{
                margin-top: 20px;
                margin-left: 20px;
                width: 50%;
                height: 100px;
            }

            .logo h1{
                line-height: 100px;
                padding-left: 50px;
                text-decoration: underline;
            }
            .logo img{
                width:60;  height: 60px; 
                display: inline-block;
                margin-right: 15px;
                margin-left: 20px;
            }

            .menu{
                width: 50%; height: 100px;
            }

            .menu ul{
                width: 100%;
                height: 100px;
                display: flex;
                flex-direction: row;
                justify-content: space-around;
                align-items:  center;
            }

            .menu ul li{
                list-style: none;
                font-size: 12px;
                font-weight: bold;
                text-transform: uppercase;
            }

            section{ display: flex;  }

            .leftside { width: 45%; height: auto; overflow: hidden; margin-top: 50px;margin-left: 30px}

            .leftside img{  width: 480px;  height: 350px; }

            .rightside{ width: 55%; height: 300px; color: white; text-align: center; margin-top: 10px; padding: 20px;}

            .rightside h1{ text-align: center;
                color: #ffffff;
                font-size: 50px;
                font-weight: 900;
                text-transform: uppercase; } 

            .rightside p {  
                font-size: 1.1rem; padding: 10px 0; }

            .rightside button{   font-size: 14px;
                font-weight: 600;
                color: white;
                text-transform: uppercase;
                background: linear-gradient(57deg, #00C6A7 , #1E4D92 ); 
                border-radius: 4px 4px 4px 4px;
                padding: 20px 35px ; 
            }



            .rightside button:hover{
                  background: linear-gradient(57deg, #1E4D92, #00C6A7 );   
            }




            /* Polaroid Photo Effect by igniel.com */
            figure, figcaption {
            display: block;
            }
            #polaroid{
            width:100%;
            padding:0px 10px;
            margin:auto;
            text-align: center;
            }
            #polaroid figure{
            position:relative;
            width: auto;
            max-width: 400px; /* Lebar maksimal gambar */
            margin: 20px auto 0px;
            padding: 6px 8px 10px 8px;
            display:inline-block;
            -webkit-box-shadow: 4px 4px 8px -4px rgba(0, 0, 0, .75);
            -moz-box-shadow: 4px 4px 8px -4px rgba(0, 0, 0, .75);
            box-shadow: 4px 4px 8px -4px rgba(0, 0, 0, .75);
            background-color: #eee6d8;
            -webkit-transform:rotate(-1deg);
            -moz-transform: rotate(-1deg);
            -o-transform: rotate(-1deg);
            -ms-transform: rotate(-1deg);
            transform: rotate(-1deg);
            -webkit-backface-visibility:hidden;
            }
            #polaroid figure:nth-child(even) {
            margin:20px 18px 20px 25px;
            -webkit-transform:rotate(2deg);
            -moz-transform: rotate(2deg);
            -o-transform: rotate(2deg);
            -ms-transform: rotate(2deg);
            transform: rotate(2deg);
            -webkit-backface-visibility:hidden;
            -webkit-box-shadow: 4px 4px 8px -4px rgba(0, 0, 0, .75);
            -moz-box-shadow: 4px 4px 8px -4px rgba(0, 0, 0, .75);
            box-shadow: -4px 4px 8px -4px rgba(0, 0, 0, .75);
            }
            #polaroid figure:before {
            content: '';
            display: block;
            position: absolute;
            left: 5px;
            top: -10px;
            width: 75px;
            height: 25px;
            z-index: 1;
            background-color: rgba(222,220,198,0.7);
            -webkit-transform: rotate(-12deg);
            -moz-transform: rotate(-12deg);
            -o-transform: rotate(-12deg);
            -ms-transform: rotate(-12deg);
            }
            #polaroid figure:nth-child(even):before {
            left:unset;
            right:10px;
            top:-10px;
            width: 55px;
            height: 25px;
            z-index: 1;
            -webkit-transform: rotate(12deg);
            -moz-transform: rotate(12deg);
            -o-transform: rotate(12deg);
            -ms-transform: rotate(12deg);
            }
            #polaroid img{
            max-width: 100%;
            width: 100%;
            height: auto;
            }
            
        </style>
    </head>
    <body>
        <header class="site-header clearfix">
         <nav>
          <div class="logo">
            
           <h3>
            <img src="{{ ('img/logoo.png') }}" >Binus School Serpong
            </h3>

          </div>
          <div class="menu"> 
           <ul>
            <li>Beranda</li>
            <li>Tentang Kami</li>
            <li>QnA</li>
            <li>Hubungi Kami</li>
           </ul>
          </div>
         </nav>
         <section>
          <div class="leftside">
            <div id="polaroid">
            <figure>
           <img src="{{ ('img/wall.jpeg') }}" >
           </figure>
           </div>
          </div>
          <div class="rightside"> 
           <h3>BINUS SCHOOL SERPONG</h3><br>
           <h5 style="font-style: italic;">"Join Us Be The Best!"</h5>
   <p style="font-size: 14px">  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
   tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
   quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
   consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
   cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
   proident, sunt in culpa qui officia deserunt mollit anim id est laborum.  </p>
   <a href="/siswa"><button>DATA SISWA</button></a>
   
          </div>
          
         </section>

        </header>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>
