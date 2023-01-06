$(function() {

    //インプット要素を取得する
    var inputs = $('.shiftTime');

    // 入力したinoutのnameを取得
    var name = inputs.attr('name')

    // slass「shiftTime」に入力した時
    $(inputs).on('input', function() {

        // 入力された値が「.」であるか
        if($(this).val().slice(-1) === '.'){
            if("$(this).val():contains('-')"){
                $(this).val($(this).val() + "5-");
            }else{
                $(this).val($(this).val() + "5");
            }
        }        
    });
});

  // //ハイフンを自動挿入するメソッド
  // function insertStr(input){
  //   return input.slice(0, 2) + '-' + input.slice(2,input.length);
  // }

  // function editStr(input){
  //   return input.slice(0, 2) + '-' + input.slice(2,input.length);
  // }

  // //入力時に郵便番号に自動でハイフンを付けるイベント
  // $("#user_address_attributes_postal_code").on('keyup',function(e){
  //   var input = $(this).val();

  //   //削除キーではハイフン追加処理が働かないように制御（8がBackspace、46がDelete)
  //   var key = event.keyCode || event.charCode;
  //   if( key == 8 || key == 46 ){
  //     return false;
  //   }

  //   //2桁目に値が入ったら発動
  //   if(input.length === 2){
  //       $(this).val(insertStr(input));
  //   }

  //   if(input.length === 4){
  //       if(key == 100 || key == 190){
  //           $(this).val(editStr(input));
  //       }
  //   }

  // })