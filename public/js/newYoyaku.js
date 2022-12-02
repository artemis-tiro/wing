function displayFirst() {
    let visit = document.getElementsByName('visit');
    visit[0].checked = true;
}

function displayRepeater() {
    let visit = document.getElementsByName('visit');
    visit[1].checked = true;
}

// function radioChk() {
//     // オプション
//     $('.radio_option input ').click(function() {

//         alert('option');


//         if($(this).attr('checked') === checked){
//             $(this).checked = false;
//         }
//     });

//     // 割引
//     $('.radio_waribiki input ').click(function() {

//         if($(this).attr('checked') === checked){
//             $(this).checked = false;
//         }
//     });

//     // クレーム対応
//     $('.radio_claim input ').click(function() {

//         if($(this).attr('checked') === checked){
//             $(this).checked = false;
//         }
//     });
// }