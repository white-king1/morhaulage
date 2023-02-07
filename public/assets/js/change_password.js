$('#change_password').validate({
    ignore: '.ignore',
    errorClass: 'invalid',
    validClass: 'success',
    rules:{
     current_password:{
        required:true,
        minilength:6,
        maxlenght:100
     },
     new_password:{
        required:true,
        minilength:6,
        maxlenght:100
     },
     confirm_password:{
        required:true,
        equalTo:'#new_password'
     },
    },
    messages: {
            current_password:{
                required:"Enter your current password"
            },
            new_password:{
                required:"Enter your new password"
            },
            confirm_password:{
                required:"Need to confirm your new password"
            },
    },

    submitHandler:function(form){
        $.LoadingOverlay("show");
        form.submit();
    }
});
