/**
 * ABT Admin — Media uploader for image picker fields
 */
jQuery(function($) {
    $('.abt-image-picker').each(function() {
        var $wrap = $(this);
        var $input = $wrap.find('input[type="hidden"]');
        var $img = $wrap.find('img');
        var $chooseBtn = $wrap.find('.abt-choose-image');
        var $removeBtn = $wrap.find('.abt-remove-image');

        $chooseBtn.on('click', function(e) {
            e.preventDefault();
            var frame = wp.media({
                title: 'Choose Image',
                button: { text: 'Use This Image' },
                multiple: false
            });
            frame.on('select', function() {
                var attachment = frame.state().get('selection').first().toJSON();
                $input.val(attachment.id);
                var thumbUrl = attachment.sizes && attachment.sizes.thumbnail ? attachment.sizes.thumbnail.url : attachment.url;
                $img.attr('src', thumbUrl).show();
                $removeBtn.show();
            });
            frame.open();
        });

        $removeBtn.on('click', function(e) {
            e.preventDefault();
            $input.val('');
            $img.hide();
            $removeBtn.hide();
        });
    });
});
