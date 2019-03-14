<?php
session_start();
if(isset($_SESSION['usern']))
{

}


?><!DOCTYPE php>
<php lang="en">
  <head>
    <meta charset="utf-8">
    <title>UIT Project</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Bootstrap styles -->
    <link href="exter/css/bootstrap.css" rel="stylesheet"/>
	<link href="exter/css/bootstrap-responsive.css" rel="stylesheet"/>
    <!-- Customize styles -->
    <link href="style.css" rel="stylesheet"/>
    <!-- font awesome styles -->
	<link href="exter/font-awesome/css/font-awesome.css" rel="stylesheet">
	<!-- Favicons -->
    <!-- <link rel="shortcut icon" href="exter/ico/favicon.ico"> -->
    <style type="text/css">
    	.back{
    		background: #fff;
    	}
		.art{
		    float:left; 
			padding:5px;
		}
    </style>
  </head>
<body>
<!-- 
	Upper Header Section 
-->
<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="topNav">
		<div class="container">
			<div class="alignR">
				<div class="pull-left socialNw">
					<a href="#"><span class="icon-twitter"></span></a>
					<a href="#"><span class="icon-facebook"></span></a>
					<a href="#"><span class="icon-youtube"></span></a>
					<a href="#"><span class="icon-tumblr"></span></a>
				</div>
				<a class="active" href="index.php"> <span class="icon-home"></span> Home</a> 
				<a href="admin/index.php"><span class="icon-user"></span> Admin</a> 
				<a href="register.php"><span class="icon-edit"></span> Free Register </a> 
				<a  href="login.php"><span class="icon-lock"></span> Login</a>
				<a href="contact.php"><span class="icon-envelope"></span> Contact us</a>
				<a href="cart.php"><span class="icon-shopping-cart"></span>Show Cart</a>
				<?php
				if(isset($_SESSION['usern']))
					{
						include('config.php');
						$qrye = $_SESSION['usern'];
						$erw = "SELECT * FROM `user_login` WHERE `mobile`='$qrye' OR `username`='$qrye'";
						$runers = mysqli_query($con,$erw);	
						$fetch = mysqli_fetch_assoc($runers);
						?>

				<a href="u_logout.php"><span class="fa-circle-logout"></span>logout</a>
				<label> Wellcome:   <?php echo $fetch['name']; echo " "; echo $fetch['mobile'];?></label>


				<?php
					}
				?>

			</div>
		</div>
	</div>
</div>

<!--
Lower Header Section 
-->
<div class="container">
<div id="gototop"> </div>
<header id="header">
<div class="row">
	<div class="span4">
	<h1>
	<a class="logo" href="index.php"><span></span> 
				<marquee direction="alternate" scrolldelay="200" scrollamount="3"><img src="exter/img/9.png" alt="logo">
	</a></marquee>
	</h1>
	</div>
	<div class="span4">
	
	</div>
	<div class="span4 alignR">
	<p><br> <strong style="color: #;"> Support (24/7) :  0000 1234 678 </strong><br><br></p>
	
	</div>
</div>
</header>

<!--
Navigation Bar Section 
-->
<div class="navbar">
	  <div class="navbar-inner">
		<div class="container">
		  <a data-target=".nav-collapse" data-toggle="collapse" class="btn btn-navbar">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </a>
		  <div class="nav-collapse">
			<ul class="nav">
			  <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
			  <li class="nav-item"><a href="about_us.php" class="nav-link">About</a></li>
			  <li class=""><a href="gallery.php">Gallery</a></li>
			  <li class=""><a href="event.php">Event</a></li>
			  <li class=""><a href="contact.php">Content</a></li>
			  <li class=""><a href="history.php">Art history</a></li>
			</ul>
			<form action="#" class="navbar-search pull-left">
			  <input type="text" placeholder="Search" class="search-query span2">
			</form>
			<ul class="nav pull-right">
			<li class="dropdown">
				<a data-toggle="dropdown" class="dropdown-toggle" href="#"><span class="icon-lock"></span> Login <b class="caret"></b></a>
				<div class="dropdown-menu">
				<form class="form-horizontal loginFrm">
				  <div class="control-group">
					<input type="text" class="span2" id="inputEmail" placeholder="Email">
				  </div>
				  <div class="control-group">
					<input type="password" class="span2" id="inputPassword" placeholder="Password">
				  </div>
				  <div class="control-group">
					<label class="checkbox">
					<input type="checkbox"> Remember me
					</label>
					<button type="submit" class="shopBtn btn-block"><a href="admin/index.php">Sign in</a></button>
				  </div>
				</form>
				</div>
			</li>
			</ul>
		  </div>
		</div>
	  </div>
	</div>
<!-- 
Body Section 
-->
	<div class="row">
<div id="sidebar" class="span3">
<div class="well ">
	<h2>Product Category</h2>
	<ul class="nav nav-list">
		<li><a href="hand_made.php?cata=Handmade"><span class="icon-chevron-right"></span>Hand made art</a></li>
		<li><a href="metal.php?cata2=metalart"><span class="icon-chevron-right"></span>Metal art</a></li>
		<li><a href="painting.php?cata3=painting"><span class="icon-chevron-right"></span>Paintings</a></li>
		<li><a href="wood.php?cata4=woodcraf"><span class="icon-chevron-right"></span>Wood Craft</a></li>
		<li><a href="bombo.php?cata5=Bombowork"><span class="icon-chevron-right"></span>Bombo And Cane Work</a></li>
		<li><a href="terracotta.php?cata6=Terracotta"><span class="icon-chevron-right"></span>Terracotta</a></li>
		
		<li><a href="doll.php?cata7=toys"><span class="icon-chevron-right"></span>Toy and Dolls</a></li>
		
		<li style="border:0"> </li>
		
	</ul>
</div>

			  
			  
			
			<a class="shopBtn btn-block" href="#">Upcoming products <br><small>Click to view</small></a>
			<br>
			<br>
			<ul class="nav nav-list promowrapper">
			<li>
			  <div class="thumbnail">
				<a class="zoomTool" href="product_details.php" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
				<img src="exter/img/toys6.jpg" alt="ecommerce ">
				<div class="caption">
				  <h4><a class="defaultBtn" href="product_details.php">VIEW</a> <span class="pull-right">RS 22.00</span></h4>
				</div>
			  </div>
			</li>
			
			<li style="border:0"> &nbsp;</li>
			<li>
			  <div class="thumbnail">
				<a class="zoomTool" href="product_details.php" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
				<img src="exter/img/imp-3128700_960_720.png" alt="xyz">
				<div class="caption">
				  <h4><a class="defaultBtn" href="product_details.php">VIEW</a> <span class="pull-right">RS 22.00</span></h4>
				</div>
			  </div>
			</li>
		  </ul>

	</div>
	<div class="span9">
    <ul class="breadcrumb">
		<li><a href="index.php">Home</a> <span class="divider">/</span></li>
		<li class="active" al>ART </li>
    </ul>
<div class="well well-small">

	<h2>ART</h2>	
	
	<h6> “Art” is related to the Latin word “ars” meaning, art, skill, or craft. The first known use of the word art comes from 13th century manuscripts. However, the word art and its many variants (artem, eart, etc) have probably existed since the founding of Rome. 
According to H.W Janson, author of the classic art textbook, the History of Art, “It would seem…that we cannot escape viewing works of art in the context of time and circumstance, whether past or present. How indeed could it be otherwise, so long as art is still being created all around us, opening our eyes almost daily to new experiences and thus forcing us to adjust our sights?”
the definition of art was anything done with skill as the result of knowledge and practice.
This meant that artists honed their craft, learning to replicate their subjects skillfully.  The epitome of this occurred during the Dutch Golden Age when artists were free to paint in all sorts of different genres and made a living off their art in the robust economic and cultural climate
</h6>	
	<hr class="soft"/>
	<h2>QUOTES</h2>
	
	<h3>Following are some quotes that illustrate this range</h3><br/>
	<ul>
		<li>Rene Magritte</li>
          <p> Art evokes the mystery without which the world would not exist.</p>
	    <li>Frank Lloyd Wright</li>  
          <p> Art is a discovery and development of elementary principles of nature into beautiful forms suitable for human use. </p>  
	    <li>Thomas Merton</li>  
          <p> Art enables us to find ourselves and lose ourselves at the same time. </p>
	    <li>Pablo Picasso</li> 
         <p>  The purpose of art is washing the dust of daily life off our souls.</p>
	    <li>Lucius Annaeus Seneca</li>  
          <p> All art is but imitation of nature. </p>
	    <li>Edgar Degas</li> 
		  <p> Art is not what you see, but what you make others see. </p>
	    <li>Jean Sibelius</li>
          <p> Art is the signature of civilizations.  </p>
	    <li>Leo Tolstoy</li>
          <p> Art is a human activity consisting in this, that one man consciously, by means of certain external signs, hands on to others feelings he has lived through, and that others are infected by these feelings and also experience them.</p>

		
	</ul>
	
	<hr class="soft"/>
	<h2>Indian art</h2>
		
     <div class="art">
	 <img src="exter/img/indianart.jpg" alt="indian"  width="100" height="50">
	 </div>
<p>Indian Arts consists of a variety of art forms, including plastic arts (e.g., pottery sculpture), visual arts (e.g., paintings), and textile arts (e.g., woven silk). Geographically, it spans the entire Indian subcontinent, including what is nowIndia, Pakistan, Bangladesh, and eastern Afghanistan. A strong sense of design is characteristic of Indian art and can be observed in its modern and traditional forms.
The origin of Indian art can be traced to pre-historic Hominid settlements in the 3rd millennium BC. On its way to modern times, Indian art has had cultural influences, as well as religious influences such as Hinduism, Buddhism, Jainism and Islam. In spite of this complex mixture of religious traditions, generally, the prevailing artistic style at any time and place has been shared by the major religious groups.
In historic art, sculpture in stone and metal, mainly religious, has survived the Indian climate better than other media and provides most of the best remains. Many of the most important ancient finds that are not in carved stone come from the surrounding, drier regions rather than India itself. 
</p>    
        
    <h5>Art of South India</h5><br/>
	  <div class="art">
	 <img src="exter/img/south.jpg" alt="indian"  width="100" height="50">
	 </div>
<p>
South Indian women traditionally wear the saree while the men wear a type of sarong, which could be either a white dhoti or a colourful lungi with typical batik patterns. The saree, being an unstitched drape, enhances the shape of the wearer while only partially covering the midriff. In Indian philosophy, the navel of the Supreme Being is considered as the source of life and creativity.Hence by tradition, the stomach and the navel is to be left unconcealed, though the philosophy behind the costume has largely been forgotten.
 </p>

<hr class="soft"/>
	<h2>Metal Craft</h2>
	<p>In India craftsmen use different metals like iron, copper, silver and alloys like bronze, bell metal, white metal etc to make a variety of items such as pots, pans, utensils, photo frames, sculptures of deities, mythological figures and animals etc. Items like doorknobs, taps, key chains, boxes etc are also made, using different metals.
Madhya Pradesh has its own traditional metal ware tradition. Ornate metal boxes of Bundelkhand, lamps of Sarguja, rice measure bowls and animal figurines of Raigarh, sculptures of Bastar are a few examples of the creativity of crafts persons of Madhya Pradesh.
</p>
		<br>
	<p style="font-size:15px; background:#F4EDB5; font-style:oblique; font-weight:700;">As a young couple enters the sacred institution of marriage, anticipating a new life, new roles and a new household, a humble yet revered image of the tribal deity is enshrined in the new home, before anything else. Sculpted by the local metal Although Dhokra work involves casting molten metal in moulds, each piece is unique, as for every piece its own mould is made. A mixture of natural beeswax and saras, a kind of gum, is boiled to a thick paste like consistency and pressed through a sieve, to get fine noodle like threads. The unique property of natural beeswax allows it to remain flexible even when it cools down, so it can be turned and coiled in very small shapes.craftsman, the brass figurine embodies the tribal traditions and beliefs of the Gonds of Betul, Madhya Pradesh.
Dhokra, locally known as “Bharai kaam”, is the art of sculpting brass with the ancient technique of lost wax casting. Practiced in West Bengal, Orissa and Madhya Pradesh, this metal craft finds different forms of expressions with the different tribes and traditions.
Somewhere near the edge of Uttar Pradesh and Madhya Pradesh, in Tikamgarh, bell metal casting has been practiced for about three to four centuries. From canons and war weapons for kings and soldiers, to bullock carts and cattle bells for the farmer, to even real gold temple decorations, metal smiths here crafted almost every object of need and desire.
The process of casting used in Tikamgarh is similar to the Dhokra casting in Betul, as both the crafts take shape with lost wax casting, a common process used to cast objects in metals. But while the Dhokra of Betul is created with strings of wax on individual pieces, in Tikamgarh, the metal pieces are sculpted in the usual way and moulds are created to replicate the objects.
</p>	
	<hr/>
	<h2>Wood Craft</h2>
	 <div class="art">
	 <img src="exter/img/wood.jpg" alt="indian"  width="100" height="50">
	 </div>
	<p>
	Woodcraft is a traditional art of India as also of Madhya Pradesh. It strikingly exhibits a person's efficiency and imagination which can transform a simple log of wood into a marvelous object of art. The works of woodcraft are predominant in various parts of Madhya Pradesh. Whenever you go to the state never ever forget to notice the intricately embellished wooden ceilings, doors as well as lintels. They are adorned with nicely carved patterns. These excellent craftsmanship indicates the rich traditional heritage of this sphere of art in the central part of the country.
Woodcraft in Madhya Pradesh exhibits the traditional art of amazingly beautiful wooden handicrafts. These woodcrafts are employed both for utilitarian as well as architectural purposes. </p>
    <br/>
	<p style="font-size:15px; background:#F4EDB5; font-style:oblique; font-weight:700;">
	The art of wood carving has flourished in many parts of Madhya Pradesh, and the beautifully embellished wooden ceilings, doors and lintels with finely carved designs are silent testimonials of its glory.
The wood carvers of Madhya Pradesh, with great sensitivity and skill transform different varieties of wood such as shisham, teak, dhudi, sal and kikar into works of art. Besides the famous wooden memorials, the craftspersons of Malwa, Nimar and Bundelkhand, Sheopur-Kalan, and Rewa also make pipes, masks, doors, window frames and sculptures. Madhya Pradesh also offers a variety of painted and lacquered woodcraft items such as toys, boxes, bedposts, cradleposts and flower vases. The major centres of this art are Gwalior, Sheopur-Kalan (Morena), Rewa and Budhni (Raisen).

	</p>
	<hr/>
	<h2>Carpet</h2>
	 <div class="art">
	 <img src="exter/img/carpet.jpg" alt="indian"  width="100" height="50">
	 </div>
	<p>
	Since the Mughal times, Gwalior in Madhya Pradesh has carved a niche for itself in the weaving of carpets.
Later on, weaving also began in the Shahdol & Mandla belt. The carpet weavers of Madhya Pradesh are undisputed masters of not only weaving carpets but dyeing also.
The colouring was earlier done by means of natural dyes, but presently it is being done with synthetic dyes as well. Pattern is an integral part of knotted carpets and traditional patterns have continued with varying combinations since the last 200 years.
Woollen carpets are available in vibrant colours with both floral and geometric designs. The weavers have used their ingenuity to transform traditional motifs into modern designs; drawing from the treasury of ancestral motifs: trees and flowers in carefully blended colours
  </p>
   <hr/>
	<h2>Paintings</h2>
	 <div class="art">
	 <img src="exter/img/paint.jpg" alt="indian"  width="100" height="50">
	 </div>
	<p>
	Throughout different periods of history, we find a definite established tradition of painting on various objects, particularly on intimate objects of everyday use, floors and walls; and in almost every instance the depiction being associated with some ritual.</p>
<p>Folk paintings of Madhya Pradesh, specially the wall paintings of Bundelkhand, Gondwana, Nimar and Malwa are living expressions of people, intrinsically linked with the socio-cultural ambiance of the area. They are not mere decorations but also spontaneous outpourings of religious devotions.</p>
<p>The paintings, based on local festivals like Karwa Chauth, Deepawali, Ahoi Ashtami, Nag Panchmi, Sanjhi etc. are usually done by women using simple home made colours.
In Bundelkhand, painting is usually done by a caste of professional painters called Chiteras. In the paintings, mud plaster base is used, over which linear patterns are etched with fingers: the process is called 'Lipai'. The women of the Rajwar community are specialists in 'Lipai', whereas Pando & Satnami communities make linear designs similar to a woven fabric.</p>
<p>The Bhils and Bhilala tribes of Madhya Pradesh paint myths related to creation called Pithora paintings. Horses, elephants, tigers, birds, gods, men and objects of daily life are painted in bright multicoloured hues. In the Gondwana region, unmatched creative vision has been shown by the Gond and the Pardhan tribes who have impressed audiences at exhibitions in Japan, France, Australia and other countries.</p>
<p>The Malwa, Nimar and Tanwarghar regions of Madhya Pradesh are known for their Mandana wall and floor painting traditions. Red clay and cow dung mixture is used as base material to plaster the surface against which white drawings stand out in contrast. Peacocks, cats, lions, goojari, bawari, swastik and chowk are some motifs of this style.</p>
  <hr/>
  <h2>Terracotta</h2>
	 <div class="art">
	 <img src="exter/img/coten.jpg" alt="indian"  width="100" height="50">
	 </div>
	<p>
	The terracotta pottery of Madhya Pradesh is marvelous in its style and representation. The potteries made by the tribal people of Bastar are really noteworthy. These people are far from the complications of the modern civilization. They are thereby blessed with simplicity and deep realization of the basic values of life system along with an enormous respect towards their deities and rituals. The art of terracotta marks the first human attempt of craftsmanship. This is why this art is so popular amongst the aboriginals of the country. Traditional statues of elephants, serpents, birds as well as horses from Bastar are unique in their style. There is an interesting practice among the tribes. They often offer the terracotta pieces depicting different animals to the local deity in lieu of sacrifice. </p>
	<br>
	<p style="font-size:15px; background:#F4EDB5; font-style:oblique; font-weight:700;">
	Pottery has been called the lyric of handicrafts. It symbolises man's first attempt at craftmanship. The colours of terracotta articles and figures vary from pink, red, brown to light and dark grey. The terracotta products of each region in Madhya Pradesh have their own identity and distinctiveness.
The art of moulding terracotta in Madhya Pradesh shows a mature ability, the pantheon being even more varied and localised. In the rural areas, it is common to see terracotta animal figures placed under trees and in shrines made by potters. The famous traditional statues of elephants, serpents, birds and horses are incomparable in simplicity. The lifesize images of human forms are among the finest examples of Bundelkhand terracotta. </p>
    <div class="art">
	 <img src="exter/img/textlie.jpg" alt="indian"  width="100" height="50">
	 </div>
	 <p>
	 A textile or cloth is a flexible woven material consisting of a network of natural or artificial fibres often referred to as thread or yarn. Yarn is produced by spinning raw fibres of wool, flax, cotton, or other material to produce long strands. Textiles are formed by weaving, knitting, crocheting, knotting, or pressing fibres together (felt)." </p>
<p>The words fabric and cloth are used in textile assembly trades (such as tailoring and dressmaking) as synonyms for textile. However, there are subtle differences in these terms in specialised usage. Textile refers to any material made of interlacing fibres. Fabric refers to any material made through weaving, knitting, spreading, crocheting, or bonding that may be used in production of further goods (like, garments). Cloth may be used synonymously with fabric but often refers to a finished piece of fabric used for a specific purpose (e.g., table cloth)." </p>
<p>"A craft is a pastime or a profession that requires particular skills and knowledge of skilled work. In a historical sense, particularly as pertinent to the Middle Ages and earlier, the term is usually applied to people occupied in small-scale production of goods, or their maintenance, for example by tinkers. The traditional terms craftsman and craftswoman are nowadays often replaced by artisan and also by craftsperson". </p> 
<p>"A cluster is defined as a geographic concentration (a city/town/few adjacent villages and their adjoining areas) of units producing near similar products and facing common opportunities and threats. An artisan cluster is defined as geographically concentrated (mostly in villages/townships) household units producing handicraft/handloom products. In a typical cluster, such producers often belong to a traditional community, producing the long established products for generations. Indeed, many artisan clusters are centuries old". 

	</p>
	<hr/>
	 <h2>Toy and Dolls</h2>
	 <div class="art">
	 <img src="exter/img/doll.jpg" alt="indian"  width="100" height="50">
	 </div>
	<p>
	These dolls which are sold in pairs are all times favorites and when they are dressed traditionally then nothing like it. Gwalior, in Madhya Pradesh makes rags dolls which are made in a very traditional way by painting onto them facial expressions which liven up the features. The costumes are traditionally made out of paper with boat shaped turbans on their head and are draped in saris made out of paper with proper jewellery </p>
	<br/>
	<br/>
	<br>
</div>
</div>
</div>


<!--
Footer
-->
<footer class="footer">
<div class="row-fluid">
<div class="span2">
<h5>Your Account</h5>
<a href="#">YOUR ACCOUNT</a><br>
<a href="#">PERSONAL INFORMATION</a><br>
<a href="#">ADDRESSES</a><br>
<a href="#">DISCOUNT</a><br>
<a href="#">ORDER HISTORY</a><br>
 </div>
<div class="span2">
<h5>Iinformation</h5>
<a href="contact.php">CONTACT</a><br>
<a href="#">SITEMAP</a><br>
<a href="#">LEGAL NOTICE</a><br>
<a href="#">TERMS AND CONDITIONS</a><br>
<a href="#">ABOUT US</a><br>
 </div>
<div class="span2">
<h5>Our Offer</h5>
<a href="#">NEW PRODUCTS</a> <br>
<a href="#">TOP SELLERS</a><br>
<a href="#">SPECIALS</a><br>
<a href="#">MANUFACTURERS</a><br>
<a href="#">SUPPLIERS</a> <br/>
 </div>
 <div class="span6">
<h5>The standard chunk of </h5>

 </div>
 </div>
</footer>
</div><!-- /container -->

<div class="copyright">
<div class="container">
	<p class="pull-right">
		<a href="#"><img src="exter/img/maestro.png" alt="payment"></a>
		<a href="#"><img src="exter/mc.png" alt="payment"></a>
		<a href="#"><img src="exter/pp.png" alt="payment"></a>
		<a href="#"><img src="exter/img/visa.png" alt="payment"></a>
		
	</p>
	<span>Copyright &copy; 2018<br> E-kalakriti </span>
</div>
</div>

    <!-- Placed at the end of the document so the pages load faster -->
    <script src="exter/js/jquery.js"></script>
	<script src="exter/js/bootstrap.min.js"></script>
	<script src="exter/js/jquery.easing-1.3.min.js"></script>
    <script src="exter/js/jquery.scrollTo-1.4.3.1-min.js"></script>
    <script src="exter/js/shop.js"></script>
  </body>
</php>
