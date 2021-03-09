<?php
	$servername="localhost";
	$serverusername="root";
	$serverpassord="";
	$dbname="project";
	$conn=new mysqli($servername, $serverusername, $serverpassord,$dbname);
	if(!$conn){
		die("connection failed!".mysqli_connect_error());
}
	$sql= "SELECT * FROM user";
	$result= mysqli_query($conn, $sql);
	




?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="DESIGN-TO-CODE.css">
<style>
* {
        box-sizing: border-box;
    }
    /*font*/
    
    * {
        font-family: inter;
    }
    
    @font-face {
        font-family: inter, sans-serif;
        src: url(E:\inter);
    }
    /*heading*/
    body{
        margin:0;
    }
    .brand-header {
        display: flex;
        background-color: rgb(14, 14, 145);
        color: white;
        justify-content: space-between;
        padding: 10px;
        width: 100%;
        flex-direction: row;
    }
    
    .logo {
        width: 20%;
    }
    
    .placeholder {
        background-color: rgb(17, 17, 167);
        width: 90%;
        padding: 6px;
        color: white;
        border-width: 0;
    }
    
     ::placeholder {
        color: white;
    }
    
    .search {
        width: 50%;
    }
    
    .text {
        width: 8%
    }
    
    img {
        border-radius: 100%;
    }
    
    .profile {
        display: flex;
        align-items: stretch;
    }
    /*profile section*/
    
    .row {
        display: flex;
        flex: row;
    }
    
    .details {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }
    
    .name {
        display: flex;
        flex-direction: column;
        align-items: flex-end;
        justify-content: center;
        align-items: center;
    }
    
    .screen-button {
        display: flex;
        justify-content: center;
        justify-content: space-between;
        flex-direction: column;
        justify-items: center;
        border-radius: 5px;
        margin: 4px;
        padding: 10px;
    }
    
    .screen-button:first-child {
        background-color: blue;
        color: white;
        border-radius: 10px;
        line-height: 20px;
        align-items: center;
    }
    
    .screen-button:first-child:hover {
        color: blue 500;
        border-radius: 10px;
    }
    
    .screen-button:last-child {
        font: medium;
        background-color: white;
        color: black;
        justify-items: center;
        align-items: center;
    }
    
    .screen-button:last-child:hover {
        color: gray;
    }
    
    .badge {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        color: gray;
        padding: 10px;
    }
    
    .badge1 {
        display: flex;
        flex-direction: row;
        align-items: center;
        padding: 10px;
    }
    
    .badge2 {
        display: flex;
        flex-direction: row;
        align-items: center;
        padding: 10px;
    }
    
    .Workcation {
        background-color: white;
        color: gray;
        display: flex;
        align-items: center;
        justify-content: space-between;
        border-top: gray 200;
        flex-direction: row;
        border-bottom: 1px solid gray;
        padding: 10px;
    }
    
    .combine {
        flex: 1px
    }
    
    .together {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }
    
    .t-name {
        display: flex;
        align-items: center;
    }
    
    .time {
        color: gray 500;
        flex-direction: row-reverse;
    }
    
    .statement {
        font-size: small;
        color: gray 500;
        align-items: center;
        display: flex;
    }
    
    .another-one {
        height: 1px;
    }
    
    .activity-item {
        background-color: whitesmoke;
        color: black;
        display: flex;
        align-items: center;
        justify-content: space-between;
        border-top: gray 200;
        border-bottom: 1px solid gray;
    }
    /*.body {
        display: flex;
        height: 100%;
        width: 100%;
        padding: 0;
        margin: 0;
    }*/
    
    .brand {
        font-weight: normal;
        font-size: 60px;
        text-align: center;
    }
    
    .story {
        border-right: 1px solid gray;
    }
    
    .quarter {
        width: 20%;
    }
    
    .half {
        width: 53%;
    }
    
    .story-quarter {
        background-color: whitesmoke;
        width: 28%;
    }
    
    .other-sections {
        display: flex;
        flex-direction: column;
        align-items: stretch;
        justify-content: center;
        width: 100%;
    }
    
    .overview {
        justify-content: space-between;
        align-items: center;
    }
    
    .projects {
        background-color: white;
        color: black;
        display: flex;
        align-items: center;
        justify-content: space-between;
        border-top: gray 200;
        border-bottom: 1px solid grey;
        padding: 10px;
    }
    
    .hed {
        font-weight: bold;
    }
    
    .hedi {
        display: flex;
        align-items: center;
        color: black;
    }
    
    .another {
        background-color: white;
        color: gray;
    }
    
    .debbie {
        display: flex;
        color: gray;
        align-items: center;
        flex-direction: column;
        justify-items: self-end;
        flex-wrap: wrap;
    }
    
    .site {
        display: flex;
        flex: end;
        flex-direction: row-reverse;
    }
</style>
    <title>Document</title>
</head>

<body>
    <header class="brand-header">
        <!--logo-->
        <div class="logo">
            <img src="https://tailwindui.com/img/logos/v1/workflow-mark-on-brand.svg" width="40" height="30" alt="Workflow logo" />
        </div>
        <!-- Search section -->
        <div class="search">
            <input id="search" class=" placeholder" placeholder="&#128269 Search projects" type="search" />
        </div>
        <div class="text">Documentation
        </div>
        <div class="text">Support
        </div>
        <!-- Profile -->
        <div class="prof">
            <img src="https://images.unsplash.com/photo-1517365830460-955ce3ccd263?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=256&h=256&q=80" width="30" height="30" alt="" />
        </div>
    </header>
    <section class="row">
        <article class="story quarter">
            <h1 class="article-title"></h1>
            <div class="details">
                <!-- Profile -->
                <div class="profile">
                    <img src="https://images.unsplash.com/photo-1517365830460-955ce3ccd263?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=256&h=256&q=80" width="70 " height="70 " alt=" " />
                    <div class="name ">
                        <div class="name-1 ">Debbie Lewis</div>
                        <a href="# "> 

                            <svg class="another " xmlns="http://www.w3.org/2000/svg " width="20 " height="20 ">
        <path fill-rule="evenodd " clip-rule="evenodd " d="M8.99917 0C4.02996 0 0 4.02545 0 8.99143C0 12.9639 2.57853 16.3336 6.15489 17.5225C6.60518 17.6053 6.76927 17.3277 6.76927 17.0892C6.76927 16.8762 6.76153 16.3104 6.75711 15.5603C4.25372 16.1034
                    3.72553 14.3548 3.72553 14.3548C3.31612 13.316 2.72605 13.0395 2.72605 13.0395C1.9089 12.482 2.78793 12.4931 2.78793 12.4931C3.69127 12.5565 4.16643 13.4198 4.16643 13.4198C4.96921 14.7936 6.27312 14.3968 6.78584 14.1666C6.86761 13.5859
                    7.10022 13.1896 7.35713 12.965C5.35873 12.7381 3.25756 11.9665 3.25756 8.52116C3.25756 7.53978 3.6084 6.73667 4.18411 6.10854C4.09129 5.88114 3.78244 4.96654 4.27251 3.72904C4.27251 3.72904 5.02778 3.48728 6.74717 4.65082C7.46487 4.45101
                    8.23506 4.35165 9.00028 4.34779C9.76494 4.35165 10.5346 4.45101 11.2534 4.65082C12.9717 3.48728 13.7258 3.72904 13.7258 3.72904C14.217 4.96654 13.9082 5.88114 13.8159 6.10854C14.3927 6.73667 14.7408 7.53978 14.7408 8.52116C14.7408 11.9753
                    12.6363 12.7354 10.6318 12.9578C10.9545 13.2355 11.2423 13.7841 11.2423 14.6231C11.2423 15.8247 11.2313 16.7945 11.2313 17.0892C11.2313 17.3299 11.3937 17.6097 11.8501 17.522C15.4237 16.3303 18 12.9628 18 8.99143C18 4.02545 13.97 0 8.99917
                    0Z " fill="currentcolor " />
      </svg><?php 
      $row = mysqli_fetch_assoc($result);
    echo $row['Email'];
      ?>
                        </a>
                    </div>
                </div>
                <div class="screen-button ">
                    <button class="screen-button ">New project</button>
                    <button class="screen-button ">Invite team</button>
                </div>
                <!--badge-->
                <div class="badge ">
                    <div class="badge1">
                        <svg xmlns="http://www.w3.org/2000/svg " width="30 " height="20 " viewBox="0 0 20 20 " fill="currentColor ">
    <path fill-rule="evenodd " d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812
                    2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1
                    1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z " clip-rule="evenodd " />
  </svg>
                        <span>Pro Member</span>
                    </div>
                    <div class="badge2">
                        <!--collection -->
                        <svg xmlns="http://www.w3.org/2000/svg " width="20 " height="20 " viewBox="0 0 20 20 " fill="currentColor ">
    <path d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z " />
  </svg>
                        <span>8 Projects</span>
                    </div>
                </div>
            </div>
        </article>
        <article class="story half ">
            <!-- Projects List -->
            <div class="overview ">
                <div class="projects ">
                    <h2 class="hed ">Projects</h2>
                    <span>
                    <button id="sort-menu " type="button " class="buttons ">
                      <!--sort-ascending -->
                      <svg  xmlns="http://www.w3.org/2000/svg " width="30 " height="20 ">
                        <path d="M3 3a1 1 0 000 2h11a1 1 0 100-2H3zM3 7a1 1 0 000 2h5a1 1 0 000-2H3zM3 11a1 1 0 100 2h4a1 1 0 100-2H3zM13 16a1 1 0 102 0v-5.586l1.293 1.293a1 1 0 001.414-1.414l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 101.414 1.414L13 10.414V16z " /> 
                      </svg>
                      Sort
                      <!--down -->
                      <svg  xmlns="http://www.w3.org/2000/svg " width="30 " height="20 ">
                        <path fill-rule="evenodd " d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z " clip-rule="evenodd " />
                      </svg>
                  </span>
                </div>
               

<?php

$projects= "SELECT * FROM projects";
	$proj= mysqli_query($conn, $projects);
	if(mysqli_num_rows($proj) > 0){
        while($r = mysqli_fetch_assoc($proj)){
           /* echo "Project_id:".$row['Project_id']."|Project:".$row['Project']."|Deploy time:".$row['Deploy time'].";";*/
   
?>





               
                <li class="Workcation ">
                    <div class="flex items-center justify-between space-x-4 ">
                        <div class="min- ">
                            <div class="rightside">
                                <span class="block ">
                                <h3 class="hedi ">🔘<?php echo $r['Project'] ?></h3>
                            </div>
                            <svg class="another " xmlns="http://www.w3.org/2000/svg " width="30 " height="20 ">
                    <path fill-rule="evenodd " clip-rule="evenodd " d="M8.99917 0C4.02996 0 0 4.02545 0 8.99143C0 12.9639 2.57853 16.3336 6.15489 17.5225C6.60518 17.6053 6.76927 17.3277 6.76927 17.0892C6.76927 16.8762 6.76153 16.3104 6.75711 15.5603C4.25372
                    16.1034 3.72553 14.3548 3.72553 14.3548C3.31612 13.316 2.72605 13.0395 2.72605 13.0395C1.9089 12.482 2.78793 12.4931 2.78793 12.4931C3.69127 12.5565 4.16643 13.4198 4.16643 13.4198C4.96921 14.7936 6.27312 14.3968 6.78584 14.1666C6.86761
                    13.5859 7.10022 13.1896 7.35713 12.965C5.35873 12.7381 3.25756 11.9665 3.25756 8.52116C3.25756 7.53978 3.6084 6.73667 4.18411 6.10854C4.09129 5.88114 3.78244 4.96654 4.27251 3.72904C4.27251 3.72904 5.02778 3.48728 6.74717 4.65082C7.46487
                    4.45101 8.23506 4.35165 9.00028 4.34779C9.76494 4.35165 10.5346 4.45101 11.2534 4.65082C12.9717 3.48728 13.7258 3.72904 13.7258 3.72904C14.217 4.96654 13.9082 5.88114 13.8159 6.10854C14.3927 6.73667 14.7408 7.53978 14.7408 8.52116C14.7408
                    11.9753 12.6363 12.7354 10.6318 12.9578C10.9545 13.2355 11.2423 13.7841 11.2423 14.6231C11.2423 15.8247 11.2313 16.7945 11.2313 17.0892C11.2313 17.3299 11.3937 17.6097 11.8501 17.522C15.4237 16.3303 18 12.9628 18 8.99143C18 4.02545 13.97
                    0 8.99917 0Z " fill="currentcolor " />
                  </svg><?php echo $row['Username'] ?>/<?php echo $r['Project'] ?>
                         </div>

                   </div>
                    <!--meta info -->
                    <div class="meta ">
                        <p class="site ">
                            <a href="# ">
                    Visit site <span style="font-size:120%;color:yellow; ">&starf;</span>
                                </a>
                                </p>
                                <p class="notes ">
                                    <span>Laravel</span>
                                    <span>&#xB7;</span>
                                    <span>Last deploy 3h ago</span>
                                    <span>&#xB7;</span>
                                    <span>United states</span>
                                </p>
                            </div>
                </li>

<?php

            }
	
}

?>
                </div>
        </article>
        <article class="story-quarter ">
            <!-- Activity feed -->
            <h2 class="activity-feed ">Activity</h2>
<?php
$activity= "SELECT * FROM activity";
$task= mysqli_query($conn, $activity);
if(mysqli_num_rows($task) > 0){
    while($l = mysqli_fetch_assoc($task)){
        
  
?>
            <div>
                <ul class=" ">
                <li class="activity-item ">
                        <div class="combine ">
                            <div class="together ">
                                <h3 class="t-name "><img src="https://images.unsplash.com/photo-1517365830460-955ce3ccd263?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=256&h=256&q=80 " width="20 " height="20 " alt=" " />You</h3>
                                <p class="time ">1hr</p>
                            </div>
                            <p class="statement "><?php echo $l['Activity'] ?></p>
                        </div>
                    </li>
                </ul>
            </div>
            <?php
              }

            }
            ?>
        </article>
    </section>
</body>

</html>
