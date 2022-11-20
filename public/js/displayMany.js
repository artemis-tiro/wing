    function displayMany() {
        visit = document.getElementsByName('visit')
        // course = document.getElementsByName('course')
        // shimei = document.getElementsByName('shimei')
        // more = document.getElementsByName('more')
        // option = document.getElementsByName('option')
        // waribikiAuto = document.getElementsByName('waribikiAuto')
        // waribiki = document.getElementsByName('waribiki')
        // claim = document.getElementsByName('claim')

        // visit
        if (visit[0].checked) {
            document.getElementById('many1').style.display = "";
            document.getElementById('many2').style.display = "none";
        } else if (visit[1].checked) {
            document.getElementById('many1').style.display = "none";
            document.getElementById('many2').style.display = "";
        } else {
            document.getElementById('many1').style.display = "none";
            document.getElementById('many2').style.display = "none";
        }

        // // course
        // if (course[0].checked) {
        //     document.getElementById('many1').style.display = "";
        //     document.getElementById('many2').style.display = "none";
        // } else if (course[1].checked) {
        //     document.getElementById('many1').style.display = "none";
        //     document.getElementById('many2').style.display = "";
        // } else {
        //     document.getElementById('many1').style.display = "none";
        //     document.getElementById('many2').style.display = "none";
        // }

        // // shimei
        // if (shimei[0].checked) {
        //     document.getElementById('many1').style.display = "";
        //     document.getElementById('many2').style.display = "none";
        // } else if (shimei[1].checked) {
        //     document.getElementById('many1').style.display = "none";
        //     document.getElementById('many2').style.display = "";
        // } else {
        //     document.getElementById('many1').style.display = "none";
        //     document.getElementById('many2').style.display = "none";
        // }

        // // more
        // if (more[0].checked) {
        //     document.getElementById('many1').style.display = "";
        //     document.getElementById('many2').style.display = "none";
        // } else if (more[1].checked) {
        //     document.getElementById('many1').style.display = "none";
        //     document.getElementById('many2').style.display = "";
        // } else {
        //     document.getElementById('many1').style.display = "none";
        //     document.getElementById('many2').style.display = "none";
        // }

        // // option
        // if (option[0].checked) {
        //     document.getElementById('many1').style.display = "";
        //     document.getElementById('many2').style.display = "none";
        // } else if (option[1].checked) {
        //     document.getElementById('many1').style.display = "none";
        //     document.getElementById('many2').style.display = "";
        // } else {
        //     document.getElementById('many1').style.display = "none";
        //     document.getElementById('many2').style.display = "none";
        // }

        // // waribikiAuto
        // if (waribikiAuto[0].checked) {
        //     document.getElementById('many1').style.display = "";
        //     document.getElementById('many2').style.display = "none";
        // } else if (waribikiAuto[1].checked) {
        //     document.getElementById('many1').style.display = "none";
        //     document.getElementById('many2').style.display = "";
        // } else {
        //     document.getElementById('many1').style.display = "none";
        //     document.getElementById('many2').style.display = "none";
        // }

        // // waribiki
        // if (waribiki[0].checked) {
        //     document.getElementById('many1').style.display = "";
        //     document.getElementById('many2').style.display = "none";
        // } else if (waribiki[1].checked) {
        //     document.getElementById('many1').style.display = "none";
        //     document.getElementById('many2').style.display = "";
        // } else {
        //     document.getElementById('many1').style.display = "none";
        //     document.getElementById('many2').style.display = "none";
        // }

        // // claim
        // if (claim[0].checked) {
        //     document.getElementById('many1').style.display = "";
        //     document.getElementById('many2').style.display = "none";
        // } else if (claim[1].checked) {
        //     document.getElementById('many1').style.display = "none";
        //     document.getElementById('many2').style.display = "";
        // } else {
        //     document.getElementById('many1').style.display = "none";
        //     document.getElementById('many2').style.display = "none";
        // }
    }
    window.addEventListener('load', displayMany());
