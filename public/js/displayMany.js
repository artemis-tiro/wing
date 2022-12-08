function displayMany() {

    // 合計計算
    function sumAll() {
        visit = $('.visitMany').text();
        course = $('.courseMany').text();
        shimei = $('.shimeiMany').text();
        option = $('.optionMany').text();
        waribikiAuto = $('.waribikiAutoMany').text();
        waribiki = $('.waribikiMany').text();
        claim = $('.claimMany').text();

        total = Number(visit.replace('円', '').replace('-----', '').replace(',', '')) +
            Number(course.replace('円', '').replace('-----', '').replace(',', '')) +
            Number(shimei.replace('円', '').replace('-----', '').replace(',', '')) +
            Number(option.replace('円', '').replace('-----', '').replace(',', '')) +
            Number(waribikiAuto.replace('円', '').replace('-----', '').replace(',', '')) +
            Number(waribiki.replace('円', '').replace('-----', '').replace(',', '')) +
            Number(claim.replace('円', '').replace('-----', '').replace(',', ''));

        $('.totalMany').text(total.toLocaleString() + '円');
    }

    // 来店
    $('.radio_visit input ').click(function() {
        // 「.attr('属性','書き換える内容')」属性を取得、書き換え
        visitPrice = Number($(this).attr('price')).toLocaleString();

        // 「.text()」要素内のテキストを取得、書き換え
        $('.visitMany').text(visitPrice + '円');

        sumAll();
    });

    // コース
    $('.radio_course input ').click(function() {

        coursePrice = Number($(this).attr('price')).toLocaleString();

        $('.courseMany').text(coursePrice + '円')

        sumAll();
    });

    // 指名
    $('.radio_shimei input ').click(function() {

        shimeiPrice = Number($(this).attr('price')).toLocaleString();

        $('.shimeiMany').text(shimeiPrice + '円');

        sumAll();
    });

    // オプション
    $('.radio_option input ').click(function() {

        optionPrice = Number($(this).attr('price')).toLocaleString();
        if (!$(this).prop("checked")) {
            optionPrice = 0;
        }

        $('.optionMany').text(optionPrice + '円');

        sumAll();
    });

    // 割引
    $('.radio_waribiki input ').click(function() {

        waribikiPrice = Number($(this).attr('price')).toLocaleString();
        if (!$(this).prop("checked")) {
            waribikiPrice = 0;
        }

        $('.waribikiMany').text(waribikiPrice + '円');

        sumAll();
    });

    // クレーム対応
    $('.radio_claim input ').click(function() {

        claimPrice = Number($(this).attr('price')).toLocaleString();
        if (!$(this).prop("checked")) {
            claimPrice = 0;
        }

        $('.claimMany').text(claimPrice + '円');

        sumAll();
    });

    sumAll();


}


$(function() {

    //インプット要素を取得する
    var inputs = $('.radioOnOff');
    //読み込み時に「:checked」の疑似クラスを持っているinputの値を取得する
    var checked = inputs.filter(':checked').val();

    //インプット要素がクリックされたら
    inputs.on('click', function() {

        //クリックされたinputとcheckedを比較
        if ($(this).val() === checked) {
            //inputの「:checked」をfalse
            $(this).prop('checked', false);
            //checkedを初期化
            checked = '';

        } else {
            //inputの「:checked」をtrue
            $(this).prop('checked', true);
            //inputの値をcheckedに代入
            checked = $(this).val();

        }
    });

    var a = $('.radio_visit input ').filter(':checked').attr('price');
    if (a) {
        $('.visitMany').text(Number(a).toLocaleString() + '円');
    }
    var a = $('.radio_shimei input ').filter(':checked').attr('price');
    if (a) {
        $('.shimeiMany').text(Number(a).toLocaleString() + '円');
    }

    var a = $('.waribikiAutoMany').text().replace('円', '');
    if (a) {
        $('.waribikiAutoMany').text(Number(a).toLocaleString() + '円');
    }


    displayMany();
});
