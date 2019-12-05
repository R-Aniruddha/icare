$(document).ready(function() {
			
    //if submit button is clicked
    $('#submit-button').click(function () {        

        //Get the data from all the fields
        var name = $('input[name=name]');
        var email = $('input[name=email]');
        var phone = $('input[name=phone]');
        var comment = $('textarea[name=message]');

        //Simple validation to make sure user entered something
        //If error found, add hightlight class to the text field
        if (name.val()=='') {
            name.addClass('hightlight');
            return false;
        } else name.removeClass('hightlight');

        if (email.val()=='') {
            email.addClass('hightlight');
            return false;
        } else email.removeClass('hightlight');

        if (comment.val()=='') {
            comment.addClass('hightlight');
            return false;
        } else comment.removeClass('hightlight');

        //organize the data properly
        var data = 'name=' + name.val() + '&email=' + email.val() + '&phone_number='
        + phone.val() + '&message='  + encodeURIComponent(comment.val());

        //disabled all the text fields
        $('.text').attr('disabled','true');

        //show the loading sign
        $('.loading').show();

        return false;
    }); 
}); 