<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Gymbud | Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Calligraffitti|Delius|Give+You+Glory|La+Belle+Aurore|Oxygen+Mono|Schoolbell|Sirin+Stencil|Sue+Ellen+Francisco|The+Girl+Next+Door|Erica+One|Modak|Sigmar+One|Indie Flower|Yellowtail|Satisfy|Rancho|Dancing Script|VT323" rel="stylesheet">
    <link rel="stylesheet" type="text/css" media="screen" href="Resources/CSS/Homepage.css" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"> </script>
    <script>
        $(document).ready(function(){
            $('#aside').hide();
            $('#Match_box').hide();

            $('#Toggle_Menu').click(function(){
                $('#aside').toggle();
            });

            $('#Btn_Hit').click(function(){
                $('#Match_box').toggle();
            });
        });
    </script>
</head>
<body>

    <div id="aside">
        
    </div>

    <div id="Toggle_Menu">
        <i class="fa fa-cog fa-4x"  aria-hidden="true"></i>
    </div>
    
    <i class="fa fa-comments-o fa-4x" aria-hidden="true"></i>



<div id="Gymbud_logo">
    <img src="https://dewey.tailorbrands.com/production/brand_version_mockup_image/688/712144688_ad4f3754-6361-4e36-9d53-9c05937cf79b.png?cb=1523084620">
</div>

<div id="Match_box">
    <h1 id="Match_box_Status">You're a Hit<h1>
    <div id="Match_icon">
        <img src="Resources/Images/RingsHeart.png" >
    </div>
    <div id="Round_Profiles">
        <img src="Resources/Images/Fit_Woman.jpg">
        <img src="Resources/Images/FitMan.jpg">
    </div>
    <h3 id="Match_Description">You and Brian Have Hit On Each Other</h3>
    <button id="Match_Send_Message">Send Message</button>
</div>
<div id="card">
    <div id="Profile_Image">
        <img src="Resources/Images/Fit_Woman.jpg">
    </div>
    <h3 id="UsersProfile_Name">Kensi, LA, Regular Gym Goer</h1><br>
    <h3 id="UsersProfile_FitnessLevel">Fitness Level : <div id="hearts">
    <i class="fa fa-heart-o fa-2x grand" aria-hidden="true"></i>
    <i class="fa fa-heart-o fa-2x average" aria-hidden="true"></i>
    <i class="fa fa-heart-o fa-2x good" aria-hidden="true"></i>
    <i class="fa fa-heart-o fa-full fa-2x vgood" aria-hidden="true"></i>
    <i class="fa fa-heart-o fa-full fa-2x unreal" aria-hidden="true"></i>
    </div></h2>
</div>

<button id="Btn_Hit">
    <i class="fa fa-heart fa-3x">
</button>
<button id="Btn_Miss">
    <i class="fa fa-times-circle fa-3x"></i>
</button>

    
</body>
</html>