<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title><?php if(basename($_SERVER['PHP_SELF'],'.php') == 'index'){ echo "Dashboard"; }else{ echo basename($_SERVER['PHP_SELF'],'.php'); } ?></title>
    <link href="https://fonts.googleapis.com/css?family=Lexend+Zetta&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Raleway', sans-serif;
        }

        .navbar-brand {
            background:darkgrey;
            color:white;
            text-transform:uppercase;
            height:100%;
            padding:8px;
            
            min-width:140px;
            text-align:center;
        }
        header {
            display: flex;
            /*justify-content: center;*/
            align-items:center;
            width: 100vw;
            background:lightgrey;

            
        }
        h2 {
			/*font-family: 'Lexend Zetta', sans-serif;*/
			color : white;
            text-transform: uppercase;
            font-size: 1.4rem;
            letter-spacing:3px;
            margin-left: 5vw;
            margin-bottom:0;
            line-height:1;
            font-weight:600;
            padding:5px;
            
		}

        h3 {
            margin: 40px 0;
        }

        main {
            width: 100vw;
            display: flex;
            flex-wrap: wrap;

        }

        main h4 {
            margin-bottom:20px;
            margin-left:20px;
        }
        

        .main__left {
            flex: 1 1 100%;
            min-height: 10vh;
            padding: 10px;
            /*background: lightskyblue;*/
        }

        .main__right {
            flex: 1 1 100%;
            /*background:lightpink;*/

        }

        .main__right ul {
            list-style-type:none;
            width:80%;
            margin:0 auto;
            display:block;

        }

        .main__right li {
            margin: 10px 0;
            font-size: 1.1rem;
            letter-spacing: 1px;
            line-height:120%;
        }

        aside {
            min-height: 20vh;
            padding: 10px;
            line-height:120%;
        }

        /*styles view all*/

        .link__results {
            width:90vw;
            margin:0 auto;
            padding-top:20px;
        }

        .card-container {
            display:flex;
            width:100%;
            flex-wrap:wrap;
        }

        .card-container .card {
            flex: 1 1 100%;
        }


        .link__results .card {
            position:relative;
            margin:3px auto;
        }

        .link__results .card-title {
            text-align:right;
            font-size:1rem;
            margin-right:5vw;
            margin-left:5vw;
            margin-bottom:0;
            letter-spacing:2px;
            font-weight:bold;
        }

        .number_link {
            position:absolute;
            left:0;
            top:0;
            font-size: .8rem;
        }

        .linkprops {
            display: flex;
            width:100%;
        }
        .linkprops p {
            flex: 1 1 33%;
            text-align:center;
            margin-bottom:0px;
        }

        .viewAllBtn {
            width: 180px;
            text-align: center;
            display:block;
            margin:10px auto;
            border:1px solid darkgrey;
            cursor:pointer;
        }

        .viewAllBtn a {
            text-align:center;
            color:darkgrey;
        }

        @media only screen and (min-width:600px){

            main {
                width: 90vw;
                margin: 0 auto;
                padding-top:40px;
            }
            .main__left {
            flex: 1 1 50%;
            /*background: lightskyblue;*/
        }

        .main__right {
            flex: 1 1 50%;
            /*background:lightpink;*/
            }
        

        .card-container {
            display:flex;
            width:100%;
            flex-wrap:wrap;
        }

        .card-container .card {
            flex: 1 1 50%;
        }

        }


        @media only screen  and (min-width:900px){
        main {
            /*width: 70vw;*/
        }

            .main__left {
            flex: 1 1   60%;
            /*background: lightskyblue;*/
            }

        .main__right {
            flex: 1 1 40%;
            /*background:lightpink;*/
            }
        

        .card-container {
            display:flex;
            width:100%;
            flex-wrap:wrap;
        }

        .card-container .card {
            flex: 1 1 33%;
        }

        }





	</style>
</head>

<body>