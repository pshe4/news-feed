$(document).ready(function(){

    checkUpdates();
    
    setInterval(function(){
        checkUpdates();
    }, 3000);

    function checkUpdates()
    {
        $.ajax({
	        url: '/update.php',
	        type: 'POST',
	        data: {},
	        dataType: 'JSON',
	        success: function (data) {
                var messages = data;
                var tableBody = '';
                var count = 0;

                $.each(messages, function (i, v) {
                    tableBody += '<tr>\
                        <td>' + v.username + '</td>\
                        <td>' + v.text + '</td>\
                        <td>' + v.likes + '</td>\
                        <td>' + v.type + '</td>\
                        <td>' + v.date + '</td>\
                    </tr>';
                    count++;
                });

                if (!count) {
                    tableBody = '<tr><td colspan="5" class="text-center">No message with news in connected services</td></tr>';
                }

                $('tbody.news-table-body').html(tableBody);
                updateSyncDate();
	        },
	        error: function () {
                var tableBody = '<tr><td colspan="5" class="text-center">An error occurred while updating the news</td></tr>';
                $('tbody.news-table-body').html(tableBody);
                updateSyncDate();
	        }
	    });
    }

    function updateSyncDate()
    {
        var currentDate = new Date();
        var currentDateTime = currentDate.getDate() + "/"
                + (currentDate.getMonth()+1)  + "/"
                + currentDate.getFullYear() + " @ "
                + currentDate.getHours() + ":"
                + currentDate.getMinutes() + ":"
                + currentDate.getSeconds();

        $('.last-update').html(currentDateTime);
    }

});
