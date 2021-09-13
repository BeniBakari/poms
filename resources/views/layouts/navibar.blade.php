<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/974c1dca7b.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <style>
       /* *,
::before,
::after {
    box-sizing: border-box
} */
body {
    position: relative;
    /* margin: 1rem;
    padding: 0 1rem; */
    font-family: 'Raleway', sans-serif;
    font-size: 12px;
    /* transition: .5s */
    background-color: red;
}


.nav-container{
    position: fixed;
    top: 0;
    left: 0%; 
    width: 224px;
    height: 100%;
    background-color: #013c5c;
    /* padding: .1rem .1rem 0 0; */
    /* transition: .5s; */
    z-index: 100;
    /* border-radius: 0px 12px 12px 0px; */


.nav-link{
    position: relative;
    display: grid;
    align-items: center;
    /* justify-content: space-between; */
    color: #3D3A3A;
    border: #3D3A3A;
    padding: .2rem;
    column-gap: 5rem;
    background-color: #ffffff;
    height: 50px;
    margin-bottom: 0rem;
    margin-top: .1rem;
    /* width: 100px; */
    /* margin-left: 5%; */
    border-radius: 2px ;
}

.nav-icon{
    color: #013c5c;
    font-size: 25px;

}

    </style>
    
</head>
<body>
   <div class="nav-container">
 <nav class="nav">
    <ul class="nav nav-list">
        <li class="nav-header">List header</li>
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">Library</a></li>
        ...
      </ul>


 </nav>



   </div>
</body>
</html>