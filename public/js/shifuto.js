$(function() {

    // キーボードを押したとき
    $(document).on("keydown", ".shiftTime", function(e){

        var index       =   null;
        var selector    =   ".shiftTime";
        var time = $(this).val();

        // 「shift」を押しながら矢印でフォーカス移動
        if(e.shiftKey){
          if(e.keyCode === 37){
            index   =   $(selector).index(this);
            if (index > 0){
                $(selector).eq(index-1).focus();
            }
            console.log('shift left');
            return;
          }

          if(e.keyCode === 38){
            index   =   $(selector).index(this);
            if (index > 0){
                console.log(index);
                if(index > 10){
                    $(selector).eq(index-10).focus();
                }
            }
            return;
          }

          if(e.keyCode === 39){
            index   =   $(selector).index(this);
            if (index < $(selector).length - 1 ){
                $(selector).eq(index+1).focus();
            }
            return;
          }

          if(e.keyCode === 40){
            index   =   $(selector).index(this);
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

        // if(!(e.keyCode <= 105 && e.keyCode >= 96 ||
        //         e.keyCode <= 57 && e.keyCode >= 48 || 
        //         e.keyCode === 110 ||
        //         e.keyCode === 190)){
        //     console.log(time);
        //     $(this).val(time.slice(0,-1));
        //     return;
        // }
    });
});