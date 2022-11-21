$(document).ready(function() {
    //パスワードの初期値をlogin_idと同じにする
    $('input[name="pass"]').val($('input[name="login_id"]').val());
});



//パスワードの初期値をlogin_idと同じにする
$('.jq_idToPass').on('input', function() {
    //alert();
    $('input[name="pass"]').val($('input[name="login_id"]').val());
});

// input追加
$('.add_input').click(function() {
    var type = $(this).attr('id');
    var parent = $(this).parent().parent();
    var num = parent.children('tr').length;
    var form = '<tr class="TYPE"><td><input class="form-control" name="TYPE_name_NUM" type="text"></td> <td class = "input-group" > <input class="form-control" name="TYPE_price_NUM" type="number"><span class="input-group-text">円</span></td></tr>';
    if (type == "course") {
        form = '<tr class="TYPE"> <td><input class="form-control" name="TYPE_name_NUM" type="text"></td><td><div class="input-group"><input class="form-control" name="TYPE_time_NUM" type="number"><span class="input-group-text">分</span></div></td><td><div class="input-group"><input class="form-control" name="TYPE_price_NUM" type="number"><span class="input-group-text">円</span ></div></td></tr>';
    }
    var new_form = form.replace(/NUM/g, num).replace(/TYPE/g, type);
    $(parent).append(new_form);
});

/*
$('.radio_total input ').click(function() {
    var price = '<span class="subtotal col">' + String($(this).attr('price')) + '</span>';
    $(this).closest('.radio_total').append(price);
});
*/
