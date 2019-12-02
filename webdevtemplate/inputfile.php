<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta charset="UTF-8">
    <title>put a link</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
    <style>
        * {
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	font-family:'Raleway';
	color: darkslategrey;
}

    header, footer {
		

	}

	form {
		display: flex;
		flex-direction : column;
		justify-content: space-around;
		height: 100%;
		padding-top:20px;
	}

	input , select {
		-webkit-box-shadow: 1px 1px 2px 0px rgba(128,124,128,1);
-moz-box-shadow: 1px 1px 2px 0px rgba(128,124,128,1);
box-shadow: 1px 1px 2px 0px rgba(128,124,128,1);
	}

	input[type="text"]{
		height: 38px;
		border:1px solid darkgrey;
		font-size:1.2rem;
		padding-left: 10px;
		border-radius:2px;

	}

	input[type="select"]{
		height: 38px;
		font-size: 1.2rem;
		letter-spacing: 2px;
	}

	label {
		text-transform: uppercase;
		text-align:center;
		letter-spacing: 3px;
		font-size:.8rem;
		/*font-family:'Roboto', sans-serif;*/
		margin-top:10px;
		margin-bottom:5p5
	}

	
	input[type="submit"]{
		min-height: 46px;
		color: white;
		font-weight: bold;
		font-size: 1.4em;
		text-align : center;
		/*line-height: 80px;*/
		border-radius: 5px;
		/*border: 5px solid darkorange;*/
		background: green;
		width: 240px;
		margin: 20px auto 45px;
		cursor: pointer;
		display:block;
		transition: box-shadow 0.12 ease-in-out;
				-webkit-box-shadow: inset 0px 0px 0px 0px rgba(250,250,250,1);
-moz-box-shadow: inset 0px 0px 0px 0px rgba(250,250,250,1);
box-shadow: inset 0px 0px 0px 0px rgba(250,250,250,1);
		
	}

	input[type="submit"]:hover {
		-webkit-box-shadow: inset 0px 0px 2px 2px rgba(250,250,250,1);
-moz-box-shadow: inset 0px 0px 2px 2px rgba(250,250,250,1);
box-shadow: inset 0px 0px 2px 2px rgba(250,250,250,1);
/*border: 1px solid darkgrey;
*/
	}

	select {
		height: 38px;
		/*font-size: 1rem;*/
		letter-spacing: 2px;
		padding-left: 10px;
		border:1px solid darkgrey;
		text-align:center;
		border-radius: 4px;
		
	}
	select option {
		text-align:center;
	}

	

	.container {
		width: 90vw;
		margin:0 auto;
		height: calc(100vh - 56px);
		display: flex;
		flex-direction: column;
		justify-content: space-between;
	}
	
	
	.submitter {
		margin: 20px 0;
		cursor: pointer;

	}

	@media only screen and (min-width:600px){
		header, footer {
		width: 100vw;
		height: 120px;
		background: darkslateblue;
		color: white;

			}
		.container {
			width: 62vw;
			height: height: calc(100vh - 240px);

		} 
	}
	@media only screen and (min-width:900px){

		.container {width: 42vw;} 
		
	}
	@media only screen and (min-width:1400px){

		.container {width: 32vw;} 
		
	}
	
</style>

<body>
    
<?php
include_once('inc/navhome.php');
 ?>
    <div class="container">
        <form action="tools/verwerklink.php" method="POST">
            <label for="author">Kies een niet al te lange titel</label>
            <input type="text" name="author" class="author" id="author" placeholder="...">
            <label for="link">Plaats hier uw link</label>
            <input type="text" name="link" id="link" class="inp textinp" placeholder="..." required>
            <label for="categorie">Categorie</label>
            <select name="categorie" id="categorie" required>
                <!-- <label for="categorie">Categorie</label> -->
                <option value="HTML">HTML</option>
                <option value="CSS">CSS</option>
                <option value="JS">JavaScript</option>
                <option value="jQuery">jQuery</option>
                <option value="PHP">PHP</option>
                <option value="MySQL">MySQL</option>
                <option value="Python">Python</option>
                <option value="Bootstrap">Bootstrap</option>
                <option value="SCSS & SASS">SCSS & Sass</option>
                <option value="Firebase">Firebase</option>
                <option value="Vue JS">Vue Js</option>
                <option value="Laravel">Laravel</option>
                <option value="Wordpress">Wordpress</option>
                <option value="Exercises">Exercises</option>
                <option value="Animation">Animation</option>
                <option value="SVG">SVG</option>
                <option value="Fun">Fun</option>
                <option value="Amazing">Amazing</option>
                <option value="otherCategorie">Other...</option>
            </select>
            <label for="posttype">Type</label>
            <select name="posttype" id="posttype" required>
                <optgroup label="type">
                    <option value="www">www</option>
                    <option value="pdf">pdf</option>
                    <option value="doc">doc</option>
                    <option value="otherType">Other</option>
                </optgroup>
            </select>
            <label for="bron">Bron</label>
            <select name="source" id="bron" required>
                <optgroup label="Me" name="subsourceself">
                    <option value="self">Self</option>
                </optgroup>
                <optgroup label="School" name="subsourceSchool">
                    <option value="Stef">Stef</option>
                    <option value="Peter">Peter</option>
                    <option value="DannyT">Danny L</option>
                    <option value="Danny W">Danny D</option>
                    <option value="Obelisk">Obelisk</option>
                    <option value="Student">Student</option>
                    <option value="otherSchoolsource">other...</option>
                </optgroup>
                <!-- </select>
                <select name="subsourceOwn" id="" required>own -->
                <optgroup label="Home">
                    <option value="fromNet">from net</option>
                    <option value="fromBook">from book</option>
                    <option value="Other">other</option>
                </optgroup>
            </select>
            <!-- <label for="author">Author</label> -->
            <!-- <input type="text" name="author" class="author" id="author"> -->
            <div class="submitter">
                <input type="submit" name="submit" value="add link">
            </div>
        </form>
    </div>
    <?php 
require_once('inc/footer.php');
    ?>
