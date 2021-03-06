<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Interactive Map </title>
<link rel="stylesheet" type="text/css" href="map.css"/>
<script src="jquery-1.8.3.min.js"></script>
<style type="text/css">
.links{float: left;
    height: 24px;
    margin-left: 0;
    margin-top: 0;
    width: 35px;
}
.hidden{
	
display: none;

}
.linkslike{
	float:left;
	padding-top: 10px;
	}

</style>
<script type="text/javascript" >
$(window).load(function(){

   var markers = new Array();

    var iconSrc = {};
    
    iconSrc['Thuparamaya'] = 'image/map/thuparamaya.png';
    iconSrc['Temple_of_touth'] = 'image/map/kandy.png';
    iconSrc['Nishshankalatha'] = 'image/map/nissanka.png';
    iconSrc['Kuttam_pokuna'] = 'image/map/kuttam.png';
    iconSrc['Ruwanwalisaya'] = 'image/map/ruwanwalisaya.png';
    iconSrc['Gangaramaya'] = 'image/map/gangaramaya.png';
        
    
	var locations = [
		
	 [
	 'Thuparamaya', 
	 'Sri Lanka', 
	 'Thuparamaya', 
	  8.3553, 
	  80.3964, 
	  1,
	 '',
	 '',
	 '',
	 '',
	 '<a target="_blank" href="thuparama.php" ><img src="image/map/enter.png" /></a>',

	
	 'Anuradhapura',
	 '<img src="images/wallpapers/thuparama1.jpg" width="238" height="152"/>',
	  '',  
	 ],
     [
	 'Temple of tooth', 
	 'Sri Lanka', 
	 'Temple_of_touth', 
	  7.2936, 
	  80.6413, 
	  2,
	  '',
	  '',
	  '',
	  '',
	 
	 '<a target="_blank" href="temple.php" ><img src="image/map/enter.png" /></a>',

	
	 'Kandy',
	 '<img src="images/wallpapers/dalada1.jpg" width="238" height="152"/>',
	  '',  
	 ],
	 [
	 'Nishshankalatha Mandapaya', 
	 'Sri Lanka', 
	 'Nishshankalatha', 
	  7.9476, 
	  81.0012, 
	  3,
	  '',
	  '',
	  '',
	  '',
	 
	 '<a target="_blank" href="nishshankalatha.php" ><img src="image/map/enter.png" /></a>',

	
	 'Polonnaruwa',
	 '<img src="images/wallpapers/nissanka3.jpg" width="238" height="152"/>',
	  '',  
	 ],
	 [
	 'Kuttam Pokuna', 
	 'Sri Lanka', 
	 'Kuttam_pokuna', 
	  8.3712, 
	  80.4016, 
	  4,
	  '',
	  '',
	  '',
	  '',
	 
	 '<a target="_blank" href="kuttam.php" ><img src="image/map/enter.png" /></a>',

	
	 'Anuradhapura',
	 '<img src="images/wallpapers/kuttam1.jpg" width="238" height="152"/>',
	  '',  
	 ],
	 [
	 'Ruwanwalisaya', 
	 'Sri Lanka', 
	 'Ruwanwalisaya', 
	  8.3500, 
	  80.3964, 
	  5,
	 '',
	 '',
	 '',
	 '',
	 '<a target="_blank" href="ruwanwali.php" ><img src="image/map/enter.png" /></a>',

	
	 'Anuradhapura',
	 '<img src="images/wallpapers/ruwan3.png" width="238" height="152"/>',
	  '',  
	 ],
	 [
	 'Gangaramaya', 
	 'Sri Lanka', 
	 'Gangaramaya', 
	  6.9166, 
	  79.8565, 
	  6,
	 '',
	 '',
	 '',
	 '',
	 '<a target="_blank" href="gangarama.php" ><img src="image/map/enter.png" /></a>',

	
	 'Kelaniya',
	 '<img src="images/wallpapers/ganga1.png" width="238" height="152"/>',
	  '',  
	 ],
		
		];


   
	var map = new google.maps.Map(document.getElementById('map'), {
		zoom:7,
      	center: new google.maps.LatLng(8,80.6),
		mapTypeId: google.maps.MapTypeId.HYBRID,
		navigationControl: false,
    	mapTypeControl: false,
    	scaleControl: false,
    	draggable: false
	});

	
    var infowindow = new google.maps.InfoWindow();
    var marker, i;

    for (i = 0; i < locations.length; i++) {  
		marker = new google.maps.Marker({
			position: new google.maps.LatLng(locations[i][3], locations[i][4]),
			map: map,
			icon: iconSrc[locations[i][2]]
		});

    	markers.push(marker);

		google.maps.event.addListener(marker, 'click', (function(marker, i) {
			return function() {
				var contentString = '<div class="info-popup">'+
									'<div style="float:left;width:250px">'+ locations[i][12] +'</div>'+
									'<div style="float:left;">'+
									'<h3 style="margin:0;">'+ locations[i][0] +'</h3>'+
									'<p style="clear:left;margin:3px 0 0 0;">'+ locations[i][6] +'<br />'+
									'<table width="320px" border="0" cellspacing="0" cellpadding="0">'+
									  '<tr>'+
										'<td width="70"></td>'+
										'<td width="250">'+ locations[i][2] +'</td>'+
									  '</tr>'+	
									  '<tr>'+
										'<td width="70"></td>'+
										'<td width="250">'+ locations[i][1] +'</td>'+
									  '</tr>';
									  if(locations[i][7]!=''){
				contentString=contentString+'<tr>'+	'<td width="70"></td>'+
										'<td width="250">'+ locations[i][7] +'</td>'+
									  '</tr>';
									  }
									if(locations[i][8]!=''){
				contentString=contentString+'<tr>'+	'<td width="70"></td>'+
										'<td width="250">'+ locations[i][8] +'</td>'+
									  '</tr>';
									  }
									 if(locations[i][9]!=''){
				contentString=contentString+'<tr>'+	'<td width="70"></td>'+
										'<td width="250">'+ locations[i][9] +'</td>'+
									  '</tr>';
									  }
				contentString=contentString  +'<tr>'+
										'<td></td>'+
										'<td>'+ locations[i][10] +'</td>'+
									 ' </tr>'+
									'</table>'+
									'</div>'+
									
									'</p>'+
									'</div>';
				infowindow.setContent(contentString);
				infowindow.open(map, marker);
			}
		})(marker, i));
    }

// == shows all markers of a particular category, and ensures the checkbox is checked ==
	function show(category, subcategory){
		var district = $('#district').val();
		for (var i=0; i<locations.length; i++){
			if(district != ''){
			if(subcategory != 0){	

				if(locations[i][2] == category && locations[i][13] == subcategory  && locations[i][11] == district){
					
					markers[i].setVisible(true);
				}
			}else if(subcategory == 0){
				
			if(locations[i][2] == category && locations[i][11] == district ){
					markers[i].setVisible(true);	
				}	
				
			}
			} else {
				
			if(subcategory != 0){
			if(locations[i][2] == category && locations[i][13] == subcategory){
					markers[i].setVisible(true);	
				}	
			}else if(subcategory == 0){
				
			if(locations[i][2] == category ){
					markers[i].setVisible(true);	
				}	
			}
			}
				//document.write(locations[i][13]);
				//document.write(subcategory);
			}
        }
	

   	// == hides all markers of a particular category, and ensures the checkbox is cleared ==
	function hide(category){
		for (var i=0; i<locations.length; i++){
			if (locations[i][2] == category ){
				markers[i].setVisible(false);
			}
       	}
	}

		
		hide("Thuparamaya");
		hide("Temple of touth");
		hide("Nishshankalatha Mandapaya");
		hide("Kuttam pokuna");
		hide("Ruwanwalisaya");
		hide("Gangaramaya");
		
		
		
		

	$('#district').change(function(){
		
         $('#thuparamaya').removeClass('thuparamaya_hover');
		 $('#thuparamaya').parent('li').removeClass('thuparamaya_active');
		 $('#thuparamaya').parent('li').removeClass('active');

		 $('#temple').removeClass('temple_hover');
		 $('#temple').parent('li').removeClass('temple_active');
		 $('#temple').parent('li').removeClass('active');

		 $('#nishshankalatha').removeClass('nishshankalatha_hover');
		 $('#nishshankalatha').parent('li').removeClass('nishshankalatha_active');
		 $('#nishshankalatha').parent('li').removeClass('active');

		 $('#kuttam').removeClass('kuttam_hover');
		 $('#kuttam').parent('li').removeClass('kuttam_active');
		 $('#kuttam').parent('li').removeClass('active');

		 $('#ruwanwalisaya').removeClass('ruwanwalisaya_hover');
		 $('#ruwanwalisaya').parent('li').removeClass('ruwanwalisaya_active');
		 $('#ruwanwalisaya').parent('li').removeClass('active');

		 $('#gangaramaya').removeClass('gangaramaya_hover');
		 $('#gangaramaya').parent('li').removeClass('gangaramaya_active');
		 $('#gangaramaya').parent('li').removeClass('active');

		 
		 
		
		var district = $('#district').val();
		if(district != ''){
			for (var i=0; i<locations.length; i++){	
				if(locations[i][11] == district){
					markers[i].setVisible(true);
				} else {
					markers[i].setVisible(false);	
				}
			}
        } else {
			for (var i=0; i<locations.length; i++){	
				markers[i].setVisible(true);
			}	
		}
		
		$('#map-menu li').each(function(){
			if(!$(this).hasClass('active')){
				hide($(this).children('a').html());	
			}
		});
	});



	//Thuparamaya
	$('#thuparamaya').click(function(){
		var cat = 'Thuparamaya';
		if($(this).hasClass('thuparamaya_hover')){
			hide(cat);
			$(this).removeClass('thuparamaya_hover');
			$(this).parent('li').removeClass('active');
			$(this).parent('li').removeClass('thuparamaya_active');
		} else {
			show(cat,0);		
			$(this).addClass('thuparamaya_hover');
			$(this).parent('li').addClass('active');
			$(this).parent('li').addClass('thuparamaya_active');
		}
	});  
	
	//Temple of touth
	$('#temple').click(function(){
		var cat = 'Temple of touth';
		if($(this).hasClass('temple_hover')){
			hide(cat);
			$(this).removeClass('temple_hover');
			$(this).parent('li').removeClass('active');
			$(this).parent('li').removeClass('temple_active');
		} else {
			show(cat,0);		
			$(this).addClass('temple_hover');
			$(this).parent('li').addClass('active');
			$(this).parent('li').addClass('temple_active');
		}
	});  
	
	//Nishshankalatha Mandapaya
	$('#nishshankalatha').click(function(){
		var cat = 'Nishshankalatha Mandapaya';
		if($(this).hasClass('nishshankalatha_hover')){
			hide(cat);
			$(this).removeClass('nishshankalatha_hover');
			$(this).parent('li').removeClass('active');
			$(this).parent('li').removeClass('nishshankalatha_active');
		} else {
			show(cat,0);		
			$(this).addClass('nishshankalatha_hover');
			$(this).parent('li').addClass('active');
			$(this).parent('li').addClass('nishshankalatha_active');
		}
	}); 
	
	//Kuttam pokuna
	$('#kuttam').click(function(){
		var cat = 'Kuttam Pokuna';
		if($(this).hasClass('kuttam_hover')){
			hide(cat);
			$(this).removeClass('kuttam_hover');
			$(this).parent('li').removeClass('active');
			$(this).parent('li').removeClass('kuttam_active');
		} else {
			show(cat,0);		
			$(this).addClass('kuttam_hover');
			$(this).parent('li').addClass('active');
			$(this).parent('li').addClass('kuttam_active');
		}
	}); 

	//Ruwanwalisaya
	$('#ruwanwalisaya').click(function(){
		var cat = 'Ruwanwalisaya';
		if($(this).hasClass('ruwanwalisaya_hover')){
			hide(cat);
			$(this).removeClass('ruwanwalisaya_hover');
			$(this).parent('li').removeClass('active');
			$(this).parent('li').removeClass('ruwanwalisaya_active');
		} else {
			show(cat,0);		
			$(this).addClass('ruwanwalisaya_hover');
			$(this).parent('li').addClass('active');
			$(this).parent('li').addClass('ruwanwalisaya_active');
		}
	}); 
	
	//Gangaramaya
	$('#gangaramaya').click(function(){
		var cat = 'Gangaramaya';
		if($(this).hasClass('gangaramaya_hover')){
			hide(cat);
			$(this).removeClass('gangaramaya_hover');
			$(this).parent('li').removeClass('active');
			$(this).parent('li').removeClass('gangaramaya_active');
		} else {
			show(cat,0);		
			$(this).addClass('gangaramaya_hover');
			$(this).parent('li').addClass('active');
			$(this).parent('li').addClass('gangaramaya_active');
		}
	}); 
	
	
});//]]>  


</script>



<!-- UserVoice JavaScript SDK (only needed once on a page) -->
<script>(function(){var uv=document.createElement('script');uv.type='text/javascript';uv.async=true;uv.src='o4H845Ae6ajeAQUFU1tMvg.js';var s=document.getElementsByTagName('script')[0];s.parentNode.insertBefore(uv,s)
</script>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-8472280-10']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script> 

</head>

<body>
<!-- Google Tag Manager -->
<noscript><iframe src="http://www.googletagmanager.com/ns.html?id=GTM-N2SWKH"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'../../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-N2SWKH');</script>
<!-- End Google Tag Manager -->

<div class="map-div">

<div id="map" style="width:100%; height: 100%;"></div>
<div class="logo-wrapper">
        <a target="_blank" href="index.html>
            <img title="Sri Lanka Map" alt="Sri Lanka Map" src="">
        </a>
    </div>

<script src="http://maps.google.com/maps/api/js?key=AIzaSyAaARpFw_zQJthf36HZxjzEtH1RUFiOF3M&sensor=false&amp;libraries=panoramio" type="text/javascript"></script>
    
    
<div class="controls-wrapper-1">
    <form name="map-search" method="get" action="map.php" style="margin-bottom:5px;border:2px solid rgba(250, 250, 250, 0.4);width:230px;border-radius:3px;background-color:#1b1c21;" >
		<div class="map-search">	
            <div class="map-search-inner">
                <input id="search-box" class="controls" type="text" placeholder="enter place">
                <a class="clear-search" href="#" style="color: black;">Clear search</a>
                <input type="submit" id="search-button" value="" >
                <input type="reset" id="search-close" value="" >
            </div>
        </div>	
        
        <select name="hotel_district" id="district">
            <option value=""  >All Districts</option>  
                           	
            <option value="Anuradhapura" >Anuradhapura</option>
                           	
            <option value="Badulla" >Badulla</option>
                           	
            <option value="Batticaloa" >Batticaloa</option>
                           	
            <option value="Colombo" >Colombo</option>
                           	
            <option value="Galle" >Galle</option>
                           	
            <option value="Gampaha" >Gampaha</option>
                           	
            <option value="Hambantota" >Hambantota</option>
                           	
            <option value="Jaffna" >Jaffna</option>
                           	
            <option value="Kalutara" >Kalutara</option>
                           	
            <option value="Kandy" >Kandy</option>
                           	
            <option value="Kegalle" >Kegalle</option>
                           	
            <option value="Kilinochchi" >Kilinochchi</option>
                           	
            <option value="Kurunegala" >Kurunegala</option>
                           	
            <option value="Matale" >Matale</option>
                           	
            <option value="Matara" >Matara</option>
                           	
            <option value="Moneragala" >Moneragala</option>
                           	
            <option value="Mullaitivu" >Mullaitivu</option>
                           	
            <option value="Nuwara Eliya" >Nuwara Eliya</option>
                           	
            <option value="Polonnaruwa" >Polonnaruwa</option>
                           	
            <option value="Puttalam" >Puttalam</option>
                           	
            <option value="Ratnapura" >Ratnapura</option>
                           	
            <option value="Trincomalee" >Trincomalee</option>
             
        </select>
    
    
    </form>
    <input style="background-color: #FBA817;border: none;padding: 8px 32px;margin-left: -340%;text-align: center;text-decoration: none;display: inline-block; cursor: pointer;border-radius: 20px;width: 12em; font-weight: bold;  color: #000; border-radius: 10px;  font-size: 16px;" type="button" value="Go back home" onclick="window.location.href='home.php'" />
</div>    

<div class="controls-wrapper">
    <div class="map-menu">
        <div class="map-menu-middle">
            <span class="explore-australia-hover map-topic">Please select your Tour</span>
            
                <ul id ="map-menu">
                    <fieldset id="form">                    
                        <li><a href="javascript:void(0)" id="thuparamaya">Thuparamaya</a></li>
                        <li><a href="javascript:void(0)" id="temple">Temple of Touth</a></li>
                        <li><a href="javascript:void(0)" id="nishshankalatha">NissankaMandapaya</a></li>
                        <li><a href="javascript:void(0)" id="kuttam">Kuttam pokuna</a></li>
                        <li><a href="javascript:void(0)" id="ruwanwalisaya">Ruwanwalimahasaya</a></li>
						<li><a href="javascript:void(0)" id="gangaramaya">Gangaramaya</a></li>
                    </fieldset>
                </ul>
    </div>
    <div class="map-menu-bottom"></div>
</div>

</div>

</div>

</body>


</html>
