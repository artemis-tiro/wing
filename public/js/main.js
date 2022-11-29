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
    var m = $(this).attr('minus');
    var type = $(this).attr('id');
    var parent = $(this).parent().parent();
    var num = parent.children('tr').length;
    var form = '<tr><td><input class="form-control" name="TYPE_name_NUM" type="text"></td><td><div class="input-group number-container"><input class="form-control number-input' + m + ' canma' + m + '" max="100000" min="-100000" name="TYPE_price_NUM" type="number"><span class="number-overlap form-control ' + m + '"></span><span class="input-group-text">円</span></div></td><td><div class="input-group number-container"><input class="form-control number-input' + m + ' canma' + m + '" max="100000" min="-100000" name="TYPE_back_NUM" type="number"><span class="number-overlap form-control ' + m + '"></span><span class="input-group-text">円</span></div></td></tr>';
    if (type == "course") {
        form = '<tr><td><input class="form-control" name="TYPE_name_NUM" type="text"></td><td><div class="input-group"><input class="form-control ml3" max="999" min="0" name="TYPE_time_NUM" type="number"><span class="input-group-text">分</span></div></td><td><div class="input-group number-container"><input class="form-control number-input' + m + ' canma' + m + '" max="100000" min="-100000" name="TYPE_price_NUM" type="number"><span class="number-overlap form-control ' + m + '"></span><span class="input-group-text">円</span></div></td><td><div class="input-group number-container"><input class="form-control number-input' + m + ' canma' + m + '" max="100000" min="-100000" name="TYPE_back_NUM" type="number"><span class="number-overlap form-control ' + m + '"></span><span class="input-group-text">円</span></div></td></tr>';
    }
    if (type == "ocha") {
        form = '<tr><td><input class="form-control" name="TYPE_name_NUM" type="text"></td><td><div class="input-group number-container"><input class="form-control number-input' + m + ' canma' + m + '" max="100000" min="-100000" name="TYPE_back_NUM" type="number"><span class="number-overlap form-control ' + m + '"></span><span class="input-group-text">円</span></div></td></tr>';
    }
    var new_form = form.replace(/NUM/g, num).replace(/TYPE/g, type);
    $(parent).append(new_form);
    canma();
    ml3();
});





$(function() {
    canma();
    ml3();
});

function canma() {
    // フォーカスを抜けたり値が変わったりしたら覆い被さっているテキストをカンマ区切りにする
    $('.canma').on('blur change input', function() {
        const $this = $(this);
        var v = $this.val();
        var s = String(v).slice(0, 6);
        if (s != '') {
            v = Number(s);
        } else {
            v = null;
        }
        $this.val(v);
        var l = v;
        if (v) l = l.toLocaleString();
        $this.next().text(l);
    });
    $('.canmaM').on('blur change input', function() {
        const $this = $(this);
        var v = $this.val();
        if (v > 1) {
            v = v * -1;
            $this.val(v);
        }
        var s = String(v).slice(0, 6);
        if (s != '') {
            v = Number(s);
        } else {
            v = null;
        }
        $this.val(v);
        var l = v;
        if (v) l = l.toLocaleString();
        $this.next().text(l);
    });
}

// .ml3は3桁までしか入力できない。
function ml3() {
    $('.ml3').on('blur change input', function() {
        const $this = $(this);
        var v = $this.val();
        var s = String(v).slice(0, 3);
        if (s != '') {
            v = Number(s);
        } else {
            v = null;
        }
        $this.val(v);
    });
}
