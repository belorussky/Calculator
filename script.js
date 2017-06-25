console.log("ready");

$('#btn').on('click',function(event) {
    event.preventDefault();
    var dataCalc = {
        "n1":$('#n1').val(),
        "n2":$('#n2').val(),
        "radio":$('input:checked').val()
    };
    var $newElem = $(document.createElement('div'));

    $.ajax({
        url: 'http://mySite/rout.php',
        method: 'GET',
        data: dataCalc,
        success: function (answer) {
            console.log(answer);
            $('#ans').html(answer);
        },
        error: function (x, y, z) {
            console.log(x);
            console.log(y);
            console.log(z);
        }

    })

});