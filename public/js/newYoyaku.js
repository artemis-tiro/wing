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