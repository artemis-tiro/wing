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
        var count = null;
        var selector = ".shiftTime";

        index = $(selector).index(this).selector;

        if($(this).val().indexOf('.') != -1){
            count = time.match(/\./g).length;
        }

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

        // 文字数を制限する(.5が無い)
        if(count == null){
            if($(this).val().length > 5){
                $(this).val(time.slice(0,5));
            }
        }

        // 文字数を制限する(.5が1つある)
        if(count == 1){
            if($(this).val().length > 7){
                $(this).val(time.slice(0,7));
            }
        }

        // 文字数を制限する(.5が2つある)
        if(count == 2){
            if($(this).val().length > 9){
                $(this).val(time.slice(0,9));
            }
        }

        // 形式？を確認

    });
})

// シフトformに文字を入力したとき
$('[name=shift-4-20230214]').on('input', function(){
    shiftTimeAjax();
});

// 非同期
function shiftTimeAjax() {
    var itemNumber = '555';

    // データの形を定義
    $.ajax({
            type: "get", //HTTP通信の種類
            url: '/shift/ajax?item=' + itemNumber, //通信したいURL
            dataType: 'json'
        })

        //通信が成功したとき
        .done((res) => {
            console.log(res);
            console.log(res.item);
        })
        //通信が失敗したとき
        .fail((error) => {
            alert('error....');
        })
};