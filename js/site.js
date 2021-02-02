(function($){
    //Get all inputs on page that are required by contact form 7
    const requiredInputs = $('.wpcf7-validates-as-required');

    //For each input, add event listener that checks if the required* indicator should be shown or hidden
    $(requiredInputs).each(function(){
        $(this).on('input', function(e){
            showHideIndicator(e.target, validEmail);
        });
    });

    //Function to check if email is a valid email address
    function validEmail($email) {
        let emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
        return emailReg.test( $email );
    }

    //Function to check if indicator should be shown or hidden
    function showHideIndicator(elem, fn) {
        //If input field is empty or does not pass validation check show indicator
        if ($(elem).val().length === 0 || fn($(elem).val()) === false) {
            console.log('stuff happened');
            $('#required-indicator').css('display', 'inline');
            $('#required-indicator').css('color', 'red');
        }
        // If it passes validation, hide indicator
        else {
            console.log('stuff happened too');
            $('#required-indicator').css('display', 'none');
        }
    }
})(jQuery);

