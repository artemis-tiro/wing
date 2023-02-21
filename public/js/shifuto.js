$(function() {

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

        index = $(selector).index(this).selector;

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

        this.value = this.value.replace(/[^0-9\.\-]+/i,'');

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

        // 入力文字制限
        if($(this).val().length > 9){
            $(this).val(time.slice(0,9));
        }
        
        // 入力文字制限
        if($(this).val() == "-"){
            $(this).val().replace("-","");
        } 
    });

    // フォーカスが外れたとき
    $(document).on('blur', '.input_alphanumeric',function(){
        this.value = this.value.replace(/[^0-9\.\-]+/i,'');
    });
})

// シフトformに文字を入力したとき
$(document).on("input", ".shiftTime", function(){
    var url = $(location).attr('href').replace('http://localhost/','');

    // id[0] = 'shift'
    // id[1] = 'クライアントID'
    // id[2] = '店ID'
    var id = url.split('\/');

    // 非同期処理関数呼び出し
    // 引数
    shiftTimeAjax($(this).attr('name'),$(this).val(),id);
}); 

// 非同期
// $name  = formのname属性名
// $input = 入力された値
function shiftTimeAjax($name, $input, $id) {
    // データの形を定義
    $.ajax({
            type: "get",
            // 通信するURLに値を付与する？
            url: '/shift/ajax?item=' + $input,
            dataType: 'json'
        })

        // True
        .done((res) => {
            // resでDB更新？
            $('[name='+$name+']').attr('class', 'form-control shiftTime')
            console.log($name);
            // console.log($url);
            console.log(res.item);
            console.log('更新');

            $.ajax({
                type: "POST",
                url: "http://localhost/shift/"+$id[1]+"/"+$id[2]+"/addshift",
                data: { "id" : $input },
                dataType : "json"
                // True
            }).done(function(data){
                // 追記する内容
                $("#return").append('{{ Form::submit(\'新規作成\',["class"=>"m-2 btn btn-info"]) }}')
              // false
            }).fail(function(XMLHttpRequest, status, e){
                console.log(e);
            });
        })
        // false
        .fail((error) => {
            $('[name='+$name+']').attr('class', 'border-danger form-control shiftTime')
            console.log($name);
            console.log(error.item);
            console.log('エラー');
        })
};