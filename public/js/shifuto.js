$(function() {

    // キーボードを押したとき
    $(document).on("keydown", ".shiftTime", function(e){

        var index = null;
        var selector = ".shiftTime";

        index = $(selector).index(this).selector;

        // 「数字,バックスペース,矢印,delete,home,end,ctrl+a,ctrl+c,ctrl+v」以外の時は、イベントをキャンセルする  
        if(!(e.keyCode >= 13 && e.keyCode <= 17
            || e.keyCode >= 35 && e.keyCode <= 40
            || e.keyCode >= 48 && e.keyCode <= 57
            || e.keyCode >= 96 && e.keyCode <= 105
            || e.keyCode == 8
            || e.keyCode == 46
            || e.keyCode == 17 && e.keyCode == 67
            || e.keyCode == 17 && e.keyCode == 86
            || e.keyCode == 110 && e.keyCode == 190)){
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
        if(!(e.keyCode >= 13 && e.keyCode <= 17
            || e.keyCode >= 35 && e.keyCode <= 40
            || e.keyCode >= 48 && e.keyCode <= 57
            || e.keyCode >= 96 && e.keyCode <= 105
            || e.keyCode == 8
            || e.keyCode == 46
            || e.keyCode == 17 && e.keyCode == 67
            || e.keyCode == 17 && e.keyCode == 86
            || e.keyCode == 110 
            || e.keyCode == 190)){
            return false;
        }

        // 「.」の場合
        if( e.keyCode == 110 || e.keyCode == 190){
            // 開始時間(区切り文字「-」がない)で「.」を打った時
            if(time.length <= 3){
                if($(this).val().includes('-') === false){
                    $(this).val(time + ".5-");
                }
            }
            
            // 終了時間(区切り文字「-」がある)で「.」を打った時
            if(time.length > 3){
                if($(this).val().includes('-') != false){
                    $(this).val(time + ".5");
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

        if($(this).val().length > 9){
            $(this).val(time.slice(0,9));
        }

        // 形式？を確認
        
    });
})

// シフトformに文字を入力したとき
$('[name=/^shift/]').on('input', function(){
// $('[name=shift-4-20230217]').on('input', function(){
    shiftTimeAjax($(this).val());
});

// 非同期
function shiftTimeAjax($text) {

    // 入力された値？
    var itemNumber = 'yo';

    // データの形を定義
    $.ajax({
            // 通信のget or post
            type: "get",
            // 通信するURKに値を付与する？
            url: '/shift/ajax?item=' + itemNumber,
            dataType: 'json'
        })

        // True
        .done((res) => {
            // resでDB更新？
            console.log(res);
            console.log(res.item);
        })
        // false
        .fail((error) => {
            // 形式エラー？
            // 赤枠にしてDB更新を市しない
            alert('error....');
        })
};