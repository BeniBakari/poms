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
       *,
::before,
::after {
    box-sizing: border-box
}
body {
    position: relative;
    margin: 1rem;
    padding: 0 1rem;
    font-family: 'Raleway', sans-serif;
    font-size: 12px;
    /* transition: .5s */
}
.header {
    width: 100%;
    
    position: fixed;
    top: 0;
    left: 0;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 0 2rem;
    background-color: #013c5c;
    color: #ffffff;
    z-index: 100;
    transition: .5s
}

.s-nav{
    position: fixed;
    top: 100px;
    left: 0%; 
    width: 224px;
    height: 100%;
    background-color: #013c5c;
    padding: .1rem .1rem 0 0;
    /* transition: .5s; */
    z-index: 100;
    border-radius: 0px 12px 12px 0px;
}
.nav{
    height: 90%;
    width: 224px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    background-color: yellow;
}
/* .nav::-webkit-scrollbar{
  display: none;
} */
.fa-align-justify{
    top: 70px;
    position: fixed;
    justify-content: space-between;
    left: 1%;
    width: 50px;
    font-size: 20px;
    cursor: pointer;

}
.fa-sign-out-alt{
    top: 70px;
    position: fixed;
    justify-content: space-between;
    margin-right: 30px;
    width: 50px;
    font-size: 20px;
    cursor: pointer;
}
.nav-list,
.nav-items{
    display: grid;
    
}
.nav-list{
    row-gap: 2.5rem;
}
.nav-items{
    row-gap: 0rem;

}
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
.p-link{
    border-radius: 0 10px 0 0;
}
.nav-icon{
    color: #013c5c;
    font-size: 25px;

}
.nav-name{
    margin-left: 25%;
    font-size: 15px;
    font-weight: bold;

}
a{
    text-decoration: none;
}
    </style>
    
</head>
<body>
    {{-- <header class="header">
        <div class="header-bar"><h1>POM-PORALG</h1> </div>      
    </header>

    <div><i class="fas fa-align-justify"></i></div>  --}}
    <div> <i class="fas fa-sign-out-alt"></i> </div>
    
    <div class="s-nav">
    <nav class="nav">
        {{-- <div nav-list style="color: red;">
            <div class="nav-items" style="color: green;">

                <a href="#" class="nav-link p-link">
                    <i class="fas fa-user-tie nav-icon"></i>
                    <span class="nav-name" >Profile</span>
                </a>

                <a href="#" class="nav-link">
                    <i class="fas fa-home nav-icon"></i>
                    <span class="nav-name" >Home</span>
                </a>

                <a href="#" class="nav-link">
                    <i class="fas fa-border-all nav-icon"></i>
                    <span class="nav-name">Make Request</span>
                </a>

                <a href="#" class="nav-link">
                    <i class="fas fa-user-cog nav-icon"></i>
                    <span class="nav-name">Manage User</span>
                </a>

                <a href="#" class="nav-link">
                    <i class="fas fa-lock nav-icon"></i>
                    <span class="nav-name">Change password</span>
                </a>




            </div>
        </div> --}}
    </nav>

    </div>
    
      <div><h1>Mambo mazuri</h1></div> 
</body>
</html>