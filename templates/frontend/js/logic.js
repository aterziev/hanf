jQuery(document).ready(function($) {

	// YOUR SCRIPT HERE
	
	//var mql = window.matchMedia("screen and (max-width: 765px)")
//if (mq.matches) {} 



	if (matchMedia) {
		var mq = window.matchMedia("(max-width: 767px)");
		mq.addListener(WidthChange);
		WidthChange(mq); 
	}

	function WidthChange(mq) {   //Navbar bei kleinem device fixieren

		if (mq.matches) {
			//  window width is less than 768px 
				$('#header-nav').addClass('navbar-fixed-top');
				//$('#header-nav').css('marginBottom','50px');
		}
		else {
			// window width is at least 765px
				$('#header-nav').removeClass('navbar-fixed-top');
		}
	}


	// Tab Navigation //siehe auch http://stackoverflow.com/questions/19589053/how-to-open-specific-tab-of-bootstrap-nav-tabs-on-click-of-a-particuler-link-usi

		var myt; //Timeout var
		
		// activen Tab aktivieren ****************
		
		function activaTab(tab){
			$('.nav-tabs a[href="#' + tab + '"]').tab('show');
			myt = window.setTimeout( fixDisappearingTab($('.nav-tabs a[href="#' + tab + '"]')) ,20 );
		};
		activaTab('aaa');
		
		// display none Problem lösen ****************
	
		 $('a[data-toggle="tab"]').on('click', function (e) {
			e.preventDefault();
			var t = $(e.target);
			
			myt = window.setTimeout( function () { // überschreibt den vom bootstrap immer automatisch gesetzten style "display:none"
				fixDisappearingTab(t)
				//console.log($('a[href="#aaa"]').attr('data-toggle'),$('a[href="#bbb"]').attr('data-toggle'))
			},20, t );
			
			//console.log(e.target + "/" + $(e.target));
		})
		
		
		function fixDisappearingTab(t) {
			window.clearTimeout(myt);
			if (t.attr('href')=="#aaa") $('a[href="#bbb"]').attr('style','display:block;');
			else   $('a[href="#aaa"]').attr('style','display:block;');
			console.log(t);
		}
		
		

		
		
		
	
	updatenav();
	
	var changed = (window.matchMedia("(min-width: 768px)").matches) ? 1 : 0;
	$(window).resize(function() {
		if (changed > 0 && (window.matchMedia("(max-width: 767px)").matches)) { changed = 0; updatenav() } //changed smaller
		if (changed == 0 && (window.matchMedia("(min-width: 768px)").matches)) { changed = 1; updatenav() } //changed bigger
	});
	
	function updatenav() {
	
		 if (window.matchMedia("(min-width: 768px)").matches) {   //console.log(">767");
				$('a[data-toggle="dropdown"]').off("click")
				$('li.deeper.parent').off('mouseover hover mouseout click');
				//$("li.deeper.parent").off("click")
				$('li.deeper.parent').off('mouseover hover').on('mouseover', function(event) {$(this).addClass('open'); });
				$('li.deeper.parent').off('mouseout hover').on('mouseout', function(event) {$(this).removeClass('open'); });
	 
		}
		else { //console.log("<=767");
			$('a[data-toggle="dropdown"]').off('mouseover hover mouseout');
			$('li.deeper.parent').off('mouseover hover mouseout click');
			
			$('a[data-toggle="dropdown"]').off('click').on('click', function(event) {
				if ($(this).closest("li.deeper.parent").hasClass('open')) {
					$(this).closest("li.deeper.parent").removeClass('open');
				}
				else {
					$(this).closest("li.deeper.parent").addClass('open');
				}
				event.preventDefault(); event.stopPropagation();
			});

		}
	}

		
		
		
		
		
		
	/*	
	 if (window.matchMedia("(min-width: 768px)").matches) {	
			$("a[data-toggle]").off('mouseover hover mouseout click');
			$("li.deeper.parent").off("click");
			$('li.deeper.parent').off('mouseover hover').on('mouseover', function(event) {$(this).addClass('open'); event.preventDefault(); event.stopPropagation();});
			$('li.deeper.parent').off('mouseout hover').on('mouseout', function(event) {$(this).removeClass('open'); event.preventDefault(); event.stopPropagation();});
			}
	else {
		$('li.deeper.parent').off('mouseover mouseout hover click');
		$("a[data-toggle]").off('mouseover hover mouseout click');
		$("li.deeper.parent.item-103").off("click").on("click", function(event) {
				$( this ).toggleClass('open'); event.preventDefault(); event.stopPropagation();
			});
		$("li.deeper.parent.item-107").off("click").on("click", function(event) {
				$( this ).toggleClass('open'); event.preventDefault(); event.stopPropagation();
			});		
	}
		
		
		
			$( "li.deeper.parent, .navbar-default").hover(
				function() {
				  $( this ).addClass('open');
				},
				function() {
				  $( this ).removeClass( 'open' );
				}
			);
			
			$("li.deeper.parent, .navbar-fixed-top").off("click").on("click", function() {
				$( this ).toggleClass('open');
			});			
		   */
		
/*
		$( "li.deeper.parent" ).hover(
			function() {
			  $( this ).addClass('open');
			},
			function() {
			  $( this ).removeClass( 'open' );
			}
		);
	*/	
	
	
});
