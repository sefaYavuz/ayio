document.addEventListener("turbolinks:load", function() {
    $(function() {
        var $toggle = $('.nav-toggle');
        var $menu = $('.nav-menu');

        $toggle.click(function() {
            $(this).toggleClass('is-active');
            $menu.toggleClass('is-active');
        });

        $('.js-editor').froalaEditor({
            heightMin: 200
        });

        $('.js-modal').on('click', function(e) {
            e.preventDefault();

            var title = $(this).data('title');
            var body = $(this).data('body');
            var href = $(this).attr('href');
            var methods = $(this).data('methods');

            $('.modal .modal-card-title').html(title);
            $('.modal .modal-card-body').html(body);
            $('.modal .button.is-success').attr('href', href);
            $('.modal .button.is-success').attr('data-method', methods);

            $('.modal').addClass('is-active');
        });

        $('.modal-button').click(function() {
            var target = $('.modal');
            $('html').addClass('is-clipped');
            $(target).addClass('is-active');
        });

        $('.modal-background, .modal-close').click(function() {
            $('html').removeClass('is-clipped');
            $(this).parent().removeClass('is-active');
        });

        $('.modal-card-head .delete, .modal-card-foot .button').click(function() {
            $('html').removeClass('is-clipped');
            $('.modal').removeClass('is-active');
        });

        $(document).on('keyup',function(e) {
            if (e.keyCode == 27) {
                $('html').removeClass('is-clipped');
                $('.modal').removeClass('is-active');
            }
        });

        $('.notification .delete').on('click', function() {
            $(this).parent('.notification').remove();
        });
    });
});
