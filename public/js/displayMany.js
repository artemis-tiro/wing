    function displayMany() {

        // 合計計算
        function sumAll() {
            visit = $('.visitMany').text();
            course = $('.courseMany').text();
            shimei = $('.shimeiMany').text();
            more = $('.moreMany').text();
            option = $('.optionMany').text();
            waribikiAuto = $('.waribikiAutoMany').text();
            waribiki = $('.waribikiMany').text();
            claim = $('.claimMany').text();

            total = Number(visit.replace('円', '')) +
                Number(course.replace('円', '')) +
                Number(shimei.replace('円', '')) +
                Number(more.replace('円', '')) +
                Number(option.replace('円', '')) +
                Number(waribikiAuto.replace('円', '')) +
                Number(waribiki.replace('円', '')) +
                Number(claim.replace('円', ''));

            $('.totalMany').text(total + '円');
        }

        // 来店
        $('.radio_visit input ').click(function() {
            // 「.attr('属性','書き換える内容')」属性を取得、書き換え
            visitPrice = $(this).attr('price');

            // 「.text()」要素内のテキストを取得、書き換え
            $('.visitMany').text(visitPrice + '円');

            sumAll();
        });

        // コース
        $('.radio_course input ').click(function() {

            coursePrice = $(this).attr('price');

            $('.courseMany').text(coursePrice + '円')

            sumAll();
        });

        // 指名
        $('.radio_shimei input ').click(function() {

            shimeiPrice = $(this).attr('price');

            $('.shimeiMany').text(shimeiPrice + '円');

            sumAll();
        });

        // 追加料金
        $('.radio_more input ').click(function() {

            morePrice = $(this).attr('price');

            $('.moreMany').text(morePrice + '円');

            sumAll();
        });

        // オプション
        $('.radio_option input ').click(function() {

            optionPrice = $(this).attr('price');

            $('.optionMany').text(optionPrice + '円');

            sumAll();
        });

        // 割引
        $('.radio_waribiki input ').click(function() {

            waribikiPrice = $(this).attr('price');

            $('.waribikiMany').text(waribikiPrice + '円');

            sumAll();
        });

        // クレーム対応
        $('.radio_claim input ').click(function() {

            claimPrice = $(this).attr('price');

            $('.claimMany').text(claimPrice + '円');

            sumAll();
        });

        // $('.radio_visit, .radio_course, .radio_shimei, .radio_more, .radio_option, .radio_waribikiAuto, .radio_waribiki, .radio_claim input ').click(function() {

        //     // 全部のpriceをintに変換して計算する
        //     totalPrice = Number(visitPrice)
        //                     + Number(coursePrice)
        //                     + Number(shimeiPrice)
        //                     + Number(morePrice)
        //                     + Number(optionPrice)
        //                     + Number(waribikiAutoPrice)
        //                     + Number(waribikiPrice)
        //                     + Number(claimPrice);

        //     $('.totalMany').text(String(totalPrice));
        // });
    }
    window.addEventListener('load', displayMany());
