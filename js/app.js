console.log(
  "%c" + "W E L C O M E   T O   C V . C A T H T M L C S S . N E T",
  "font-family:Montserrat ; font-size:14px; background: #009999; border-radius: 2px; padding: 6px 12px; margin: 5px 10px 7px 0px; color: #ffffff;"
);

$(window).on('load', function () {

    UIkit.util.on('.header__center__formSearchDropdown', 'show', function () {
        // do something
        $('.mask_menu').fadeIn(300);
    });

    UIkit.util.on('.header__center__formSearchDropdown', 'hide', function () {
        // do something
        $('.mask_menu').stop(true, true).fadeOut(300);
    });
});