


(function($) {
	var sessionUsername = document.getElementById('sessionUsername').value;
	console.log(sessionUsername);
	
	//FUNCTIONS
	function Slider(nav_zone, content_zone,text_zone) {
		this.nav = nav_zone;
		this.content = content_zone;
		this.idSelectedSlide = 0;
		this.textZone=text_zone;
	}
	
	
	
	Slider.prototype.changeSlide=function(index) {this.idSelectedSlide=index;}
	
	Slider.prototype.bindEvents=function() {var self=this;this.nav.each(function(index)
	 {$(this).on("click",function(e) {e.preventDefault();self.changeSlide(index);
	 self.view();});
	})
	}
	
	Slider.prototype.view = function() {
		this.nav.removeClass('selected');
		var newSelectedSelector = ':eq(' + this.idSelectedSlide  + ')';
		this.nav.filter(newSelectedSelector).addClass('selected');
		this.content.removeClass().addClass('slide-content class-' + this.idSelectedSlide);

		this.textZone.addClass('slide-content class-' + this.idSelectedSlide);
		this.textZone.addClass('slide-text');
	}
	
	
	 
	//programme principal//
	
	$("div.slider").each(function() {var $nav_zone = $(this).find('nav.nav li');
		
		
		var $content_zone = $(this).find('.slide-content');
		var $text_zone= $(this).find('div.slide-text');
		var aSlider = new Slider($nav_zone, $content_zone,$text_zone);
		
		aSlider.bindEvents();
	});



	//INSERT DIV.B1 INTO NAV-BRAND FROM THE TOP MENU

	//var $newdiv1 = document.createElement( "div" );
	//$newdiv1.classList.add("b1");
	//$newdiv1.classList.add("position-absolute");

	var tab_c=["<li><a class='nav-link' href='prevoir_rdv.php'>Prendre un rendez-vous téléphonique</a></li>","<li><a class='nav-link' href='contact.html'>Contact</a></li>"];
	var $tab_c="<div class='b1 position-absolute'><ol>";
	
	tab_c.forEach((num, index, arr) => {
		$tab_c=$tab_c+arr[index];
		
	  });
	  $tab_c=$tab_c+"</ol></div>";
	  $("a.nav-brand.c").append($($tab_c));
	  

	  /// TAB B ///
	  var tab_b=["<li><a class='nav-link' href='type_coiffure.html'>Nos Types de coiffure</a></li>","<li><a class='nav-link' href='contact.html'>Nos Tarifs</a></li>"];
	var $tab_b="<div class='b1 position-absolute'><ol>";
	
	tab_b.forEach((num, index, arr) => {
		$tab_b=$tab_b+arr[index];
		
	  });
	  $tab_b=$tab_b+"</ol></div>";
	  $("a.nav-brand.b").append($($tab_b));
	  

	  /// TAB C ///
	  var tab_d=["<li><a class='nav-link' href='inscrire.php'>S'inscrire</a></li>","<li><a class='nav-link' href='connecter.php'>Se connecter</a></li>","<li><a class='nav-link' href='deconnecter.php'>Se déconnecter</a></li>"];
	var $tab_d="<div class='b1 position-absolute'><ol>";
	
	tab_d.forEach((num, index, arr) => {
		$tab_d=$tab_d+arr[index];
		
	  });
	  $tab_d=$tab_d+"</ol></div>";
	  $("a.nav-brand.d").append($($tab_d));



	  // EVENT LISTENER JS ///

		$("a.nav-brand").each(function(){this.addEventListener(
			"mouseover", (e) => {
				e.preventDefault();
			console.log("jai placé la souris sur");
			let pf=$(this).children().last().get(0);
			console.log(pf);
			if(getComputedStyle(pf).display == "none"){
					
					pf.style.display = "block";
					console.log("ok");
			}
			
			
			}
		)




		}
	);


	$("a.nav-brand").each(function(){this.addEventListener(
		"mouseout", (e) => {
			e.preventDefault();
		console.log("jai enlevé la souris de l'élément");
		let pf=$(this).children().last().get(0);
		console.log(pf);
		if(getComputedStyle(pf).display != "none"){
				
				pf.style.display = "none";
				console.log("ok");
		}
		
		}
	)

	}
);



//calculate the enxt startDay of the month
// nb_day%7 + startDay=nextDay

function Calendrier(content_zone,month2,startday,januaryStartDay,tab_enddays) {
	this.content = content_zone;
	this.idSelectedContent = 0;
	this.startDay=startday;
	this.januaryStartDay=januaryStartDay;
	this.tab_endDays=tab_enddays;
	this.month=month2;
}

Calendrier.prototype.view=function(){
	
	
	let count=0;
	let g=1;
	for(let d=0;d<this.tab_endDays[this.month]+this.startDay;d++){
		if(count==0){
			this.content.append("<tr>");
			console.log(this.content);
		}
		if(d<this.startDay){
			this.content.append("<td></td>");
			
		}else{
			this.content.append("<td>"+g+"</td>");
			g++;
		}
		count++;
		if(count==7){
			this.content.append("</tr>");
			count=0;
		}

		//il faut chaque fois mettre à jour le td malheureusement
		$("div#page_ca table td").each(function(){this.addEventListener(
			"click", (e) => {
				e.preventDefault();
				console.log("test");
				let m=$(this).text();
				$("div#horaires h2").html(m+"/"+($ca_2025.month+1)+"/2025");
			//	$("div#page_ca table").get(0).style.display="none";
				$("div#horaires").get(0).style.display="block";
				
			}
		)
			
		}
		);
	}
	
	
}

	Calendrier.prototype.update=function($month){
		let tr_l=this.content.children().length;
		console.log(tr_l);
		if(tr_l>0){
			this.content.parent().append("<tbody></tbody>");
			this.content.remove();
		}
		
		if(this.month>$month){
			this.month=0;
			this.startDay=this.januaryStartDay;
		}
		while(this.month<$month){
			this.startDay=this.tab_endDays[this.month]%7+this.startDay;
			
			if(this.startDay>=7){
				this.startDay=this.startDay%7;
			}
			
			this.month=this.month+1;
		}

		
	}

	
	//si l'utilisateur est connecté
	if(sessionUsername!=""){
		// calendrier 2025 à partir de janvier
		$("div#page_ca table").css({"display":"block"});

		var $tab=[31,28,31,30,31,30,31,31,30,31,30,31];
		let $startDay=2;//pour le mois de janvier
		var $content=$("div#page_ca table tbody");

		var $ca_2025=new Calendrier($content,0,$startDay,$startDay,$tab);

		const date = new Date();
		$ca_2025.update(date.getMonth());//avec janvier egal à l'index 0
		tab_months=["January","February","March","April","May","June","July","August","September","October","November","December"];
		
		
		$("div#page_ca h2").html(tab_months[date.getMonth()]+" 2025");
		$ca_2025.view();
		

		let h2_cont="<div class='b1 position-absolute'><ol>";
		tab_months.forEach((num,index,array)=>{
			if(index>=date.getMonth()){
			h2_cont=h2_cont+"<li>"+array[index]+"</li>";
			}
		});
		h2_cont=h2_cont+"</ol></div>";
		$("div#page_ca h2").before($(h2_cont));



		$("div#page_ca div.b1").each(function(){
			this.addEventListener(
				"mouseout",(e)=>{
	
					e.preventDefault();
					console.log("ma souris a quitté l'élément");
					let pf=$(this).get(0);
					console.log(pf);
					if(getComputedStyle(pf).display != "none"){
						
						pf.style.display = "none";
						console.log("ok");
				};	
				}
	
			);
	
	
	
		}
	
	
		);


		$("div#page_ca h2").each(function(){this.addEventListener(
			"mouseover", (e) => {
				e.preventDefault();
		
			let pf=$("div#page_ca").children().get(0);
		
			if(getComputedStyle(pf).display == "none"){
					
					pf.style.display = "block";
					
			}
			
			}
		)

		}
		);

		$("div#page_ca h2").each(function(){this.addEventListener(
			"mouseout", (e) => {
				e.preventDefault();
		
			let pf=$("div#page_ca").children().get(0);
		
			if(getComputedStyle(pf).display != "none"){
					
					pf.style.display = "none";
					
			}
			
			}
		)

		}
		);

		$("div#page_ca div.b1").each(function(){this.addEventListener(
			"mouseover", (e) => {
				e.preventDefault();
			
			let pf=$(this).get(0);
			console.log(pf);
			if( getComputedStyle(pf).display == "none"){
					
					pf.style.display = "block";
					
			}
			
			}
		)

		}
		);

		$("div#page_ca div.b1 li").each(function(){this.addEventListener(
			"click", (e) => {
				e.preventDefault();
				console.log($(this).text());
				

				let m=$(this).text();
				$("div#page_ca h2").html(m+" 2025");
				tab_months.forEach((num,index,array)=>{
					if(array[index]==m){
						$ca_2025.update(index);
						$ca_2025.content=$("div#page_ca table tbody");
						$ca_2025.view();
					}
				})

			
				
			}
		)

			
		}
		);

		$("div#horaires button").each(function(){this.addEventListener("click",(e)=>{
			e.preventDefault();
			console.log("ready");
			var xmlhttp = new XMLHttpRequest();
				  xmlhttp.onreadystatechange = function() {
					if (this.readyState == 4 && this.status == 200) {
					  this.html("Occupé");
					}
				  };
				  xmlhttp.open("POST", "ajax_info.php");
				  xmlhttp.send("data=" + encodeURIComponent(data));

		})});
		
	}
		//var req = new XMLHttpRequest(); 
    	//req.onload = function() {
    //		console.log(this.responseText); 
 	//	};
	//	req.open("post", "ajax_info.php", true); 
	//	req.send();

})(jQuery);