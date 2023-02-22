$(function() {

    // return false;

    // キーボードを押したとき
    $(document).on("keydown", ".shiftTime", function(e){

        var index = null;
        var selector = ".shiftTime";

        index = $(selector).index(this);

        // 「数字,バックスペース,矢印,delete,home,end,ctrl+a,ctrl+c,ctrl+v」以外の時は、イベントをキャンセルする  
        // if(!(e.keyCode >= 13
        //     || e.keyCode <= 17
        //     || e.keyCode >= 35 && e.keyCode <= 40
        //     || e.keyCode >= 48 && e.keyCode <= 57
        //     || e.keyCode >= 96 && e.keyCode <= 105
        //     || e.keyCode == 8
        //     || e.keyCode == 46
        //     || e.keyCode == 110
        //     || e.keyCode == 190
        //     || e.keyCode == 17 && e.keyCode == 67
        //     || e.keyCode == 17 && e.keyCode == 86)){
        //     return false;
        // }

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
        // if(!(e.keyCode >= 13
        //     || e.keyCode <= 17
        //     || e.keyCode >= 35 && e.keyCode <= 40
        //     || e.keyCode >= 48 && e.keyCode <= 57
        //     || e.keyCode >= 96 && e.keyCode <= 105
        //     || e.keyCode == 8
        //     || e.keyCode == 46
        //     || e.keyCode == 110
        //     || e.keyCode == 190
        //     || e.keyCode == 17 && e.keyCode == 67
        //     || e.keyCode == 17 && e.keyCode == 86)){
        //     return false;
        // }

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
})

// シフトformに文字を入力したとき
$(document).on("input", ".shiftTime", function(e){
    var url = $(location).attr('href').replace('http://localhost/','');

    // id[0] = 'shift'
    // id[1] = 'クライアントID'
    // id[2] = '店ID'
    var id = url.split('\/');

    // 非同期処理関数呼び出し
    shiftTimeAjax($(this).attr('name'),$(this).val(),id[2]);

    if($(this).val().match('/^([0-9]|1[0-9]|2[0-4])(\.5)?-([0-9]|1[0-9]|2[0-4])(\.5)?$/')){
        shiftTimeAjax($(this).attr('name'),$(this).val(),id[2]);
    }
}); 

// 非同期
// $name  = formのname属性名
// $input = 入力された値
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
            console.log($name);
            console.log(res.item);
            console.log('更新');
        })
        // false
        .fail((error) => {
            $('[name='+$name+']').attr('class', 'border-danger form-control shiftTime')
            console.log($name);
            console.log(error.item);
            console.log('エラー');
        })
};
(function($){
    $(function(){
        $("[with]").off(".inputcontrol")
    
        /**
         * 半角数値のみ
         */
        $("[with='numeric']")
            .off(".inputcontrol.numeric")
            .on("keyup.inputcontrol.numeric", function(){
                $(this).val($(this).val().replace(/[^0-9]/g,""));
            })
    
    
        /**
         * 半角英字のみ
         */
        $("[with='alpha']")
            .off(".inputcontrol.alpha")
            .on("keyup.inputcontrol.alpha", function(){
                $(this).val($(this).val().replace(/[^a-zA-Z]/g,""));
            })
    
    
        /**
         * 半角英数のみ
         */
        $("[with='alphanum']")
            .off(".inputcontrol.alphanum")
            .on("keyup.inputcontrol.alphanum", function(){
                $(this).val($(this).val().replace(/[/^([0-9]|1[0-9]|2[0-4])(\.5)?-([0-9]|1[0-9]|2[0-4])(\.5)?$/]/g,""));
            })
    });
}