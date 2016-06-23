/* 
 * Handle sitewide functionlity.
 */

(function($) {
    $(function() {
        $('#cart-head').on('click',function(e) {
            if($(this).parent('.mini-cart').hasClass('show-view')){
                $(this).parent('.mini-cart').removeClass('show-view');
            }else{
                $(this).parent('.mini-cart').addClass('show-view');
            }

            e.stopPropagation();
        });
    });
})(jQuery);

