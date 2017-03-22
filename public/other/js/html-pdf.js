$(document).ready(function () {
    $('#export').click(function () {
        var pdf = new jsPDF('p', 'pt', 'letter');
        pdf.addHTML($('#info')[0], function () {
            pdf.save('Test.pdf');
        });
    })
});
