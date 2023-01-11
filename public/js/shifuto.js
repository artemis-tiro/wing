$(function() {

    //インプット要素を取得する
    var inputs = $('.shiftTime');

    // 入力したinoutのnameを取得
    var name = inputs.attr('name')

    // class「shiftTime」に入力した時
    $(inputs).on('input', function() {

        // 入力文字
        $time = $(this).val();
        // alert($time.slice(3,5));

        // 入力された値が「.」であるか
        if($(this).val().slice(-1) === '.'){

            // 開始時間で「.」を打った時
            if($time.length <= 3){
                if($(this).val().includes('-') === false){
                    $(this).val($time + "5-");
                }
            }
            
            // 終了時間で「.」を打った時
            if($time.length > 3){
                if($(this).val().includes('-') != false){
                    $(this).val($time + "5");
                }
            }
        }

        // 「30分刻み(.5)がない場合」
        if($(this).val().includes('.') === false){

            if($time.length === 3){
                if($check = $time.slice(0,1) < 3){
                    $start = $time.slice(0,2);
                    $end = $time.slice(2,5);
                    $edit = $start + '-' + $end;
                    $(this).val($edit);
                }else{
                    $start = $time.slice(0,1);
                    $end = $time.slice(1,5);
                    $edit = $start + '-' + $end;
                    $(this).val($edit);
                }
            }
        }
    });
});