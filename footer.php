<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer</title>
</head>

    <style>

:root{
    --primaryColor:#ff274b;
    --secondaryColor:#f7bcf7;
    --lightColor:#ffffff;
    --bgColor-1:#171a1c;
    --bgColor-2:#22282a;
    --padding:8%;
}

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

html{
    famille de polices : 'Josefin Sans', sans empattement ;
    font-size:16px;
    color:var(--lightColor)
}

.homme{
    width: 100%;
    height: 100vh;
    background-color: var(--bgColor-1);
    display: flex;
    flex-direction: column;
}

h2{
    font-size: 25px;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
}

nav{
    padding-top: 35px;
    padding-right: var(--padding);
    padding-left: var(--padding);
    display: flex;
    justify-content: space-between;
    align-items: center;
}

nav ul li{
    display: inline-block;
    list-style-type: none;
    margin: 10px 16px;   
}

nav ul li a{
    text-decoration: none;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    color: var(--lightColor);
    transition: 0.5s ease;
}

nav ul li a:hover{
    color: var(--primaryColor);
}

.btn{
    text-decoration: none;
    font-weight: 500;
    color: var(--lightColor);
    background-color: var(--primaryColor);
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    padding: 10px;
    border-radius: 30px;
    transition: 0.5s ease;
    border: 2px solid transparent;

}

.btn:hover{
    border: 2px solid var(--primaryColor);
    background-color: transparent;
}


/* ------------------------NavBar------------------------------------- */

.content{
    padding: 0 var(--padding);
    flex-grow: 1;
    display: flex;
    align-items: center;
    justify-content: space-between;
}

h1{
    font-size: 40px;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    margin: 22px;
}

h3{
    font-size: 30px;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    margin-bottom: 50px;
}

h4{
    font-size: 25px;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    letter-spacing: 1px;
}

.texts{
    position: relative;
    bottom: 30px;
}

span{
    color: var(--primaryColor);
}

.social{
    margin-top: 50px;
}
.social a{
    text-decoration: none;
}

.social img{
    margin-right: 32px;
    width: 40px;
    transition: 0.5s;
}

.social img:hover{
    transform: scale(1.2);
}


/* -------------------------------------Presentation--------------------------- */


.container-images{
    width: 40%;
    height: 40%;
    position: relative;
    align-self: flex-end;
}

.container-images img{
    bottom: 0;
    position: absolute;
    left: 50%;
    transform: translateX(-50%);
    transition: bottum 1s , left 1s;
}

.shape{
    height: 350px;
    width: 400px;
}

.container-images:hover .shape{
    bottom: 40px;
}

.container-images:hover .mee{
    left: 45%;
}

.aboutMee{
    background-color: var(--bgColor-2);
    height: 70vh;
    display: flex;
    align-items: center;
    justify-content: space-around;
}

.programmation{
    width: 400px;
    height: 400px;
    margin-top: 300px;
}

.aboutMee .container-text{
    width: 35%;
}

.aboutMee .container-text h5{
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    font-size: 20px;
    margin-left: 20px;
    line-height: 25px;
}

.aboutMee .container-text P{
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    font-size: 17px;
    line-height: 26px;
    letter-spacing: 1px;
    color: var(--lightColor);
    margin-left: 18px;
}


/* --------------------------------services--------------------------------------- */


.Services{
    background-color: var(--bgColor-1);
    padding: var(--padding);
}

.text-center{
    text-align: center;
    margin-top: -60px;
}

.Services img{
    width: 70px;
    height: 70px;
    color: white;
    margin-left: 50px;
    margin-top: -10px;
}

.box{
    display: flex;
    justify-content: space-between;
}

.card{
    width: 250px;
    background-color: var(--primaryColor);
    border-radius: 20px;
    padding: 1.3rem 2rem;
    height: 300px;
}

.card:hover{
    margin-top: -10px;
    box-shadow: 5px 5px 5px rgba(255, 255, 255, 0.692);
}

.Services h4{
    color: var(--bgColor-1);
    font-size: 25px;
    text-align: center;
}

.Services p{
    letter-spacing: 1px;
    line-height: 20px;
    text-align: center;
}

/* ----------------------skills----------------------------- */

.programmation2{
    width: 400px;
    height: 400px;
    margin-top: 300px;
}

.container-text{
    display: flex;
    flex-wrap: wrap;
    
}

.imageS{
    width: 100px;
}

.container-text h1{
    margin-top: -50px;
    margin-left: 90px;
    line-height: 120px;
}

.content-skill{
    display: flex;
    flex-wrap: wrap;
}





footer{
    padding: 2rem var(--padding);
    background-color: var(--bgColor-1);
}

footer .content-footer{
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}

footer p{
    font-size: 20px;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    line-height: 35px;
    text-align: center;

    
}

.dex{
    padding: 10px;
    font-size: 16px;
    border-radius: 25px;
    color: red;
    margin-top: 50px;
    background-color: white;
    width: 200px;
}

    </style>

<body>
    
    <footer id="footer">
        <div class="content-footer">
            <h2><span>HMIMID </span> Mohammed</h2>
            <p>To request the <span>html & css & coding</span> services please contact me.</p>
            <p>CopyRhight by <span>Hmimid Mohammed</span></p>

            <input type="submit" value="déconnection" name="dex" class="dex">

        </div>
    </footer> 

</body>
</html>


<?php

    if(isset($_POST['dex'])):

        session_name('acces');
        session_start();
        session_destroy();
        header("location:login.php");
        
    endif;

?>