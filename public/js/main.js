$(document).ready(function() {
    //パスワードの初期値をlogin_idと同じにする
    $('input[name="pass"]').val($('input[name="login_id"]').val());
});



//パスワードの初期値をlogin_idと同じにする
$('.jq_idToPass').on('input', function() {
    //alert();
    $('input[name="pass"]').val($('input[name="login_id"]').val());
});
