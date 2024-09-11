<!DOCTYPE html>
<html lang="en">
<head>
<title>WrpTool</title>
<LINK href="css.css" rel=stylesheet type="text/css">
<META name="description" content="WrpTool The Best Island / Terrain Editor for OFP.">
<META name="keywords" content="PMC. WrpTool. Island. Terrain. Editor. OFP">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php include("include/google-analytics.php"); ?>

</head>
<body>

<header>
<?php include("/var/www/include/ads.php"); ?>
<?php include("/var/www/include/header-start.php"); ?>
<h1>WrpTool</h1>
<p>Welcome to WrpTool.</p>
<?php include("/var/www/include/header-end.php"); ?>
</header>

<section>
<?php include("/var/www/include/section-start.php"); ?>
<h2>WrpTool - The Best Island / Terrain Editor for OFP</h2>
<p><a href="images/wrptool-big.jpg"><img src="images/wrptool-small.jpg" width="128" height="128" alt="WrpTool"></a>
</p>

<p><a href="news.php">News</a> and <a href="downloads.php">Downloads</a>
</p>

<p>This page is for WrpTool project. First we must thank a-lone-wolf (from <a href="http://web.quick.cz/fholesinsky/OF/">here</a>) for providing us with the wrp file formats, without him there would be no wrptool from us. Thank You, very much appreciated!
</p>

<p>WrpTool is one util to create OFP Islands / terrains, all you need is notepad + PBO packer and you're capable of doing excellent islands. WrpTool edits all aspects of the basic terrain + objects.
</p>

<p>This project started Jan 23rd, 2003 (or bit sooner even), first real working wrp island made by us was done this day. Initial team was Rom and Snake Man, Dschulle joined in later. But with sad events regarding MLOD converter and BAS, April 2004 Rom decided to quit from the team. We will miss him.
</p>

<p>Current features of the utility:<br>
&nbsp;- Writes 12.8km x 12.8km, 25.6km x 25.6km and 51.2km x 51.2km WRP files (and smaller).<br>
&nbsp;- Import terrain in Wilbur long/lat TXT format.<br>
&nbsp;- Place random 3d objects throughout the map, but not in the water.<br>
&nbsp;- Graphical User Interface (GUI) to edit 3d object placement.<br>
&nbsp;- bitmap preview image &quot;icon&quot; of objects in object browser<br>
&nbsp;- Copy &amp; Paste for object, or multiple objects.<br>
&nbsp;- Current object preview from bmp image when mouse over object.<br>
&nbsp;- Object rotation using mouse, multiple or single object.<br>
&nbsp;- Display 3D-View of the terrain elevations and objects (no texture yet). <br>
&nbsp;- Graphical User Interface (GUI) to edit elevations and texture placement.<br>
&nbsp;- XML configuration file for object p3d icons and categories.<br>
&nbsp;- GUI mini map, for quick overview and jump-to selections.<br>
&nbsp;- Reads 4WVR, OPRW v2 and OPRW v3 island formats.<br>
&nbsp;- Rescale object sizes, change their direction.<br>
&nbsp;- Road Tool. Place roads by clicking RMB for left, right, straight etc road pieces.<br>
&nbsp;- Region Tool, choose region and random place objects, delete objects etc. <br>
&nbsp;- Forest Placer, to quickly and automatically place forests, including SEB, BAS 1 obj forests.<br>
&nbsp;- Automatic texture placing for &quot;transitions&quot;.<br>
&nbsp;- Cell Selector, to select cells according to elevations.
</p>

<p>WrpTool release package comes with 124 page PDF manual which contains all the necessary information to successfully operate WrpTool and to create islands from ground up.
</p>

<p>Future plans, TODO list:<br>
&nbsp;- Feature to place terrain types.<br>
&nbsp;- Placer to placer different objects on different terrain types.<br>
&nbsp;- Templates for cities and airbases for automatic placement.<br>
&nbsp;- Import MicroDEM .dem format (can be done but not implemented with wilbur txt).<br>
&nbsp;- Bitmap drawing (ie MAP) from the terrain types and water, and objects.<br>
&nbsp;- Automatic road placement between two points (cities for example).
<br><br>
How <a href="images/wrp.gif">cells</a> are set up. How <a href="images/Forest.gif">forest 3d</a> objects are set up.
</p>

<?php include("/var/www/include/section-end.php"); ?>
</section>

<footer>
<?php include("/var/www/include/footer-start.php"); ?>
<p><a href="http://www.pmctactical.org/ofp/">PMC Tactical Operation Flashpoint</a>, <a href="http://pmc.editing.wiki">PMC Editing Wiki</a></p>
<p><i>PMC WrpTool 2003 - <?php print(date("Y")); ?>.</i></p>
<?php include("/var/www/include/footer-end.php"); ?>
<?php include("/var/www/include/support.php"); ?>
<?php include("/var/www/include/w3-validator-logo.php"); ?>
</footer>

</body>
</html>
