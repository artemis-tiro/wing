function displayFirst() {
    let visit = document.getElementsByName('visit');
    visit[0].checked = true;
}

function displayRepeater() {
    let visit = document.getElementsByName('visit');
    visit[1].checked = true;
}

// 引数で渡されたname[index]の要素にチェックを入れる
function yoyakuEditChk(name,index){
    let ElementName = document.getElementsByName(name);
    ElementName[index].checked = true;
}

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