function handleAction() {
    var list = $('#container > div > img');
    $('#container > div > img').each(function(){
        // var width = $(this).width();
        // var height = $(this).height();
        // $(this).attr('width',width/2.0);
        // $(this).attr('height',height/2.0);

        var p = $(this).parent();
        var div = $("<div>",{
            'class':'parentClass'
        });
        var that = $(this).clone();
        that.appendTo(div);
        $(this).replaceWith(div);

        var img = that.get(0);
        if (img.naturalWidth) { // 现代浏览器
            var nWidth = img.naturalWidth;
            var nHeight = img.naturalHeight;
            that.attr('width',Math.round(nWidth/2.0));
            that.attr('height',Math.round(nHeight/2.0));
        } else { // IE6/7/8
            var img = new Image();
            img.src = that.attr('src');
            img.onload = function() {
                var pic_real_width = this.width;   // Note: $(this).width() will not
                var pic_real_height = this.height; // work for in memory images.
                that.attr('width',Math.round(pic_real_width/2.0));
                that.attr('height',Math.round(pic_real_height/2.0));
            }
        }
    });

}
