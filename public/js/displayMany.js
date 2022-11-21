    function displayMany() {
        // 来店
        $('.radio_visit input ').click(function() {
            // 「.attr('属性','書き換える内容')」属性を取得、書き換え
            var price = $(this).attr('price');
            
            // 「.text()」要素内のテキストを取得、書き換え
            $('.visitMany').text(price);
            
            //alert(price);
            
            //var price = '<span class="subtotal col">' + String($(this).attr('price')) + '</span>';
            //$(this).closest('.radio_total').append(price);
        });

        // コース
        $('.radio_course input ').click(function() {

            var price = $(this).attr('price');
            
            $('.courseMany').text(price);
        });

        // 指名
        $('.radio_shimei input ').click(function() {

            var price = $(this).attr('price');
            
            $('.shimeiMany').text(price);
        });

        // 追加料金
        $('.radio_more input ').click(function() {
            
            var price = $(this).attr('price');
            
            $('.moreMany').text(price);
        });
        
        // オプション
        $('.radio_option input ').click(function() {
            
            var price = $(this).attr('price');
            
            $('.optionMany').text(price);
        });
        
        // 自動割引
        $('.radio_waribikiAuto input ').click(function() {
            
            var price = $(this).attr('price');
            
            $('.waribikiAutoMany').text(price);
        });
        
        // 割引
        $('.radio_waribiki input ').click(function() {
            
            var price = $(this).attr('price');
            
            $('.waribikiMany').text(price);
        });
        
        // クレーム対応
        $('.radio_claim input ').click(function() {
            
            var price = $(this).attr('price');
            
            $('.claimMany').text(price);
        });
        
    }
    window.addEventListener('load', displayMany());
