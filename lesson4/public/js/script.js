$(document).ready(function() {
    $('.imagePreview').click(function(e) {
        var previewSrc = e.target.attributes.src.value;
        //console.log(previewSrc);
        var previewSrcNew = previewSrc.replace("preview/","").replace("preview_","");
        //console.log(previewSrcNew);
        $('#modal')
            .html("<button id ='close' onclick = 'close()'></button><img src ="+previewSrcNew+" alt="+e.target.alt+" width='100%'>")
            .css("visibility","visible")
            .animate({opacity: 1.0, left:"40%", visibility : "hidden"},2000);
            $(".preview").animate({"margin-left" : "200%"},2000);
        $('#close').click(function() {
            $('#modal').html("")
            .animate({opacity: 0, left: "200%", visibility : "hidden"}, 0);
            $(".preview").animate({"margin-left" : "10px"},2000)
            .css("display","hidden");

        })
    })
})