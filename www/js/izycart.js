function hapusBarang(id){
    jConfirm("Anda Yaking mau hapus","Perhatian",function(r){
    if(r){
    var disc = $('#discount').attr('value');
    var that = $("#sidecarthapus_"+id).busy({ img : 'images/zoomloader.gif' }); 
    $.ajax({
        type	: "POST",
        url		: "query/delBarang.php",
        data	: "productID="+id+"&disc="+disc,
        dataType: "json",
        success	: function(r){
        $("#jlhbarang").text(r.jlh);
        $("#jlhbarang2").html(r.jlh);
        $("#sidecartsubtotal").text("Rp."+ addCommas(r.totalcarts));
        $("#sidecarttotal").text("Rp."+ addCommas(r.totalbayar));
        $("#disc").text(addCommas(r.totaldisc));
        that.busy("hide");
        $("#tablecart").find("#trsidecart_"+id).fadeOut(function(){
        $("#tablecart").find("#trsidecart_"+id).remove();
        });
        }
    })
    }
    });
    }
    
    function beliBarang(id){
    $.ajaxSetup ({
    cache: false
    }); 
    
    
    var that = $("#but_buy"+id).busy(); 
    $.ajax({
        type	: "POST",
        url		: "query/beliBarang.php?i="+new Date().getTime(),
        dataType: "json",
        cache	: false,
        data	: "productID="+id,
        success : function(r){
        $("#jlhbarang").text(r.jlh);
        $("#jlhbarang2").html(r.jlh);
        if(r.jlh==0){
        $(".topcart").hide();	
        }
        showNoty("<div style='font-size:10pt;'>anda memiliki " + r.jlh + " item di keranjang anda</div><div style='font-size:7pt;'>Cek keranjang belanja anda di sebelah kiri atas</div>");
        that.busy("hide");
        }
    });
    return false;
    }
    
    function updateBarang(id){
    var qty = $("#sidecartqty_"+id).attr("value");
    var disc = $('#discount').attr('value');
    var that = $("#sidecartupdate_"+id).busy(); 
    $.ajax({
        type	: "POST",
        url		: "query/updateBarang.php?i="+new Date().getTime(),
        dataType: "json",
        cache	: false,
        data	: "productID="+id+"&qty="+qty+"&disc="+disc,
        success : function(r){
        $("#jlhbarang").text(r.jlh);
        $("#jlhbarang2").html(r.jlh);
    //  setTimeout(	function() { that.busy("hide"); }, 2000);
        $("#tablecart").find("#sidecartberat_"+id).text(r.berat);
        if(r.status=="1"){
        $("#tablecart").find("#sidecartsubttotal_"+id).text("Rp."+ addCommas(r.subtotal) );
        $("#tablecart").find("#sidecartberat_"+id).text(r.berat);
        $("#tablecart").find("#sidecartberat").text(addCommas(r.totalberat));
        $("#tablecart").find("#sidecartsubtotal").text("Rp."+addCommas(r.totalcarts));
        $("#tablecart").find("#sidecarttotal").text("Rp."+addCommas(r.totalbayar));
        $("#disc").text(addCommas(r.totaldisc));
    
        }
        that.busy("hide");
    }
    });	
    }
    
    function addCommas(nStr)
    {
        nStr += '';
        x = nStr.split('.');
        x1 = x[0];
        x2 = x.length > 1 ? '.' + x[1] : '';
        var rgx = /(\d+)(\d{3})/;
        while (rgx.test(x1)) {
            x1 = x1.replace(rgx, '$1' + ',' + '$2');
        }
        return x1 + x2 + ',-';
    }
    
    function isInteger(s) {
      return (s.toString().search(/^-?[0-9]+$/) == 0);
    }
    
    // JavaScript Document