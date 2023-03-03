$(function() {


    $('#telserch').on('keydown', function(event) {
        // 半角数字(0-9)以外はキャンセル
        if ((event.keyCode < 48) || (event.keyCode > 57)) {
            // backspace, delete, enter, tab, escapeは許可
            if ((event.keyCode == 8) || (event.keyCode == 46) || (event.keyCode == 13) || (event.keyCode == 9) || (event.keyCode == 27)) {
            return true;
            } else {
            return false;
            }
        }
    });
      
    $('#telserch').on('input', function() {
        // 入力値が10桁以上11桁以内の半角数字でない場合は、末尾を切り捨てる
        var telserch = $(this).val();
        telserch = telserch.replace(/[^0-9]/g, '');
        if (telserch.length > 11) {
            telserch = telserch.substring(0, 11);
        }
        $(this).val(telserch);
    });

    // 入力制限(数字,ハイフン,ドットのみ)
    $(".shiftTime").on("input", function(){
        if( !(/[0-9\.\-]/.test(this.value)) ){
            this.value = '';
        }
    });

    // キーボードを押したとき
    $(document).on("keydown", ".shiftTime", function(e){

        var index = null;
        var selector = ".shiftTime";

        index = $(selector).index(this);

        // 「数字,バックスペース,矢印,delete,home,end,ctrl+a,ctrl+c,ctrl+v」以外の時は、イベントをキャンセルする  
        if(!(e.keyCode >= 13
            || e.keyCode <= 17
            || e.keyCode >= 35 && e.keyCode <= 40
            || e.keyCode >= 48 && e.keyCode <= 57
            || e.keyCode >= 96 && e.keyCode <= 105
            || e.keyCode == 8
            || e.keyCode == 46
            || e.keyCode == 110
            || e.keyCode == 190
            || e.keyCode == 17 && e.keyCode == 67
            || e.keyCode == 17 && e.keyCode == 86)){
            return false;
        }

        // 「shift」を押しながら矢印でフォーカス移動
        if(e.shiftKey){
            if(e.keyCode == 37){
                index = $(selector).index(this);
                if (index > 0){
                    $(selector).eq(index-1).focus();
                }
                return;
            }

            if(e.keyCode == 38){
                index = $(selector).index(this);
                if (index > 0){
                    if(index > 10){
                        $(selector).eq(index-10).focus();
                    }
                }
                return;
            }

            if(e.keyCode == 39){
                index = $(selector).index(this);
                if (index < $(selector).length - 1 ){
                    $(selector).eq(index+1).focus();
                }
                return;
            }

            if(e.keyCode == 40){
                index = $(selector).index(this);
                if (index < $(selector).length - 1 ){
                    $(selector).eq(index+10).focus();
                }
                return;
            }
        }
    });

    // キーボードを押して離したとき
    $(document).on("keyup", ".shiftTime", function(e){

        var time = $(this).val();
        var index = null;
        var selector = ".shiftTime";
        var url = $(location).attr('href').replace('http://localhost/','');

        // id[0] = 'shift'
        // id[1] = 'クライアントID'
        // id[2] = '店ID'
        var id = url.split('\/');

        index = $(selector).index(this).selector;

        // 「数字,バックスペース,矢印,delete,home,end,ctrl+a,ctrl+c,ctrl+v」以外の時は、イベントをキャンセルする  
        if(!(e.keyCode >= 3 && e.keyCode <= 17
            || e.keyCode >= 35 && e.keyCode <= 40
            || e.keyCode >= 48 && e.keyCode <= 57
            || e.keyCode >= 96 && e.keyCode <= 105
            || e.keyCode == 8
            || e.keyCode == 46
            || e.keyCode == 110
            || e.keyCode == 190
            || e.keyCode == 17 && e.keyCode == 67
            || e.keyCode == 17 && e.keyCode == 86)){
            return false;
        }

        // 「.」の場合
        if( e.keyCode == 110 || e.keyCode == 190){
            // 開始時間(区切り文字「-」がない)で「.」を打った時
            if(time.length <= 3){
                if($(this).val().includes('-') === false){
                    $(this).val(time + "5-");
                }
            }
            
            // 終了時間(区切り文字「-」がある)で「.」を打った時
            if(time.length > 3){
                if($(this).val().includes('-') != false){
                    $(this).val(time + "5");
                }
            }
        }

        // 「.」が無い場合
        if($(this).val().includes('.') === false){
            if(time.length === 3){
                if($check = time.slice(0,1) < 3){
                    var start = time.slice(0,2);
                    var end = time.slice(2,5);
                    var edit = start + '-' + end;
                    $(this).val(edit);
                }else{
                    var start = time.slice(0,1);
                    var end = time.slice(1,5);
                    var edit = start + '-' + end;
                    $(this).val(edit);
                }
            }
        }

        // ハイフン自動挿入回避
        if($(this).val().includes('--') != false){
            var tmp = $(this).val().split('--');
            $(this).val(tmp[0] + '-')
        }

        // 編集時ハイフン回避
        if(e.keyCode == 8 || e.keyCode == 46){
            $(this).val(time);
        }

        // 入力文字制限(9文字以下)
        if($(this).val().length > 9){
            $(this).val(time.slice(0,9));
        }
        
        // 入力文字制限(ハイフンだけ)
        if($(this).val() == "-"){
            $(this).val().replace("-","");
        }

        shiftTimeAjax($(this).attr('name'),$(this).val(),id[2]);
    });

    // フォーカスが外れたとき
    $(document).on('blur', '.shiftTime',function(){
        $(this).val().replace(/[0-9\.\-]/,'');
    });
})

// 非同期
// $name   = formのname属性名
// $input  = 入力された値
// $miseid = 店舗ID
function shiftTimeAjax($name, $input, $miseid) {
    // データの形を定義
    $.ajax({
            type: "get",
            // 通信するURLに値を付与する？
            url: '/shift/ajax?item=' + $input + '&name=' + $name + '&id=' + $miseid,
            dataType: 'json'
        })

        // True
        .done((res) => {
            // resでDB更新？
            $('[name='+$name+']').attr('class', 'form-control shiftTime')
        })
        // false
        .fail((error) => {
            $('[name='+$name+']').attr('class', 'border-danger form-control shiftTime')
        })
};