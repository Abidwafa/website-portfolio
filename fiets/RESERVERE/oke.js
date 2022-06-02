var interval = setInterval(time);

function time() {
    var duration = document.getElementById("duration").value;
    
    if (duration == 1) {
        var starttime = document.getElementById("starttime").value;
        var endtime = moment(starttime).add(1, 'hours').format('YYYY-MM-DDTHH:mm');
    } else if (duration == 2) {
        var starttime = document.getElementById("starttime").value;
        var endtime = moment(starttime).add(2, 'hours').format('YYYY-MM-DDTHH:mm');
    } else if (duration == 5) {
        var starttime = document.getElementById("starttime").value;
        var endtime = moment(starttime).add(5, 'hours').format('YYYY-MM-DDTHH:mm');
    } else if (duration == 24) {
        var starttime = document.getElementById("starttime").value;
        var endtime = moment(starttime).add(25, 'hours').format('YYYY-MM-DDTHH:mm');
    }
    document.getElementById('endtime').value = endtime;}