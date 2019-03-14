$(document).ready(function() {
    $('.imagePreview').click(function() {
        var src = $("#"+this.id).attr("src").replace("preview_","").replace("preview/","");
        //alert(src);
        $('#modal')
            .html("<button id ='close' onclick = 'close()'></button><img src = "+src+"  alt="+$("#"+this.id).attr('alt')+" width='100%'>")
            .css("visibility","visible")
            .animate({opacity: 1.0},2000);
            $(".preview");
        $('#close').click(function() {
            $('#modal').html("")
            .animate({opacity: 0, visibility : "hidden"}, 0);
            $(".preview")
            .css("display","hidden");

        })
        $.ajax({
			method:"GET",
            url:"engine/preview.php",
            //url:"preview.php",
			data: {id:this.id}
		}).done(function(){alert("AJAX GET");})
    })
})