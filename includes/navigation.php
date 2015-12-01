<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Ek+Mukta">
<style>

body {
    background:#E0FFFF;
}
 
.clearfix:after {
    display:block;
    clear:both;
}
 
/*----- Menu Outline -----*/
.menu-wrap {
    width:100%;
    box-shadow:0px 1px 3px rgba(0,0,0,0.2);
    background:#464343;
}
 
.menu {
    width:1000px;
    margin:0px auto;
}
 
.menu li {
    margin:0px;
    list-style:none;
    font-family:'Ek Mukta';
}
 
.menu a {
    transition:all linear 0.15s;
    color:#FFFFFF;
}
 
.menu li:hover > a, .menu .current-item > a {
    text-decoration:none;
    color:#F66B39;
}
 
.menu .arrow {
    font-size:11px;
    line-height:0%;
}
 
/*----- Top Level -----*/
.menu > ul > li {
  /*------  float:left;---*/
    display:inline-block;
    position:relative;
    font-size:19px;
}
 
.menu > ul > li > a {
    padding:10px 40px;
    display:inline-block;
    text-shadow:0px 1px 0px rgba(0,0,0,0.4);
}
 
.menu > ul > li:hover > a, .menu > ul > .current-item > a {
    background:#2e2728;
}
 
/*----- Bottom Level -----*/
.menu li:hover .sub-menu {
    z-index:1;
    opacity:1;
}
 
.sub-menu {
    width:160%;
    padding:5px 0px;
    position:absolute;
    top:100%;
    left:0px;
    z-index:-1;
    opacity:0;
    transition:opacity linear 0.15s;
    box-shadow:0px 2px 3px rgba(0,0,0,0.2);
    background:#2e2728;
}
 
.sub-menu li {
    display:block;
    font-size:16px;
}
 
.sub-menu li a {
    padding:10px 30px;
    display:block;
}
 
.sub-menu li a:hover, .sub-menu .current-item a {
    background:#3e3436;
}


</style>
</head>

<div class="menu-wrap">
    <nav class="menu">
        <ul class="clearfix">
            <li><a href="listing.php">Home</a></li>
            <li>
                <a>Building <span class="arrow">&#9660;</span></a>
                <ul class="sub-menu">
                   <li><a  href="add.php">Add</a></li>
                   <li><a  href="removeBuilding.php">Remove</a></li>
                </ul>
            </li>
             <li><a>Rooms  <span class="arrow">&#9660;</span> </a>
			 <ul class="sub-menu">
				   <li><a  href="update.php">Search & update</a></li>
				   
                 </ul>
			 </li>
             <li>
			     <a>Resources <span class="arrow">&#9660;</span></a>
                  <ul class="sub-menu">
                   <li><a  href="addNewRes.php">Add New Resources</a></li>
                   <li><a  href="removeResource.php">Remove Resources</a></li>
                   <li><a  href="roomResource.php">Assign to Room</a></li> 
				   <li><a  href="unassigne.php">Unassign From Room</a></li> 
                 </ul>
			 </li> 
        </ul>
    </nav>
</div>

</html>
