<?php

require __DIR__ . '/../vendor/autoload.php';

?>

<!DOCTYPE html>
<html>
<head>
	<title>News Feed [real time]</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>News Feed</h1>
                <div class="text-right small">Updated: <span class="last-update">-</span></div>
                <table class="table table-striped">
                <thead>
                  <tr>
                    <th>Username</th>
                    <th>Message</th>
                    <th>Likes</th>
                    <th>Type</th>
                    <th>Date</th>
                  </tr>
                </thead>
                <tbody class="news-table-body"></tbody>
              </table>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="/js/app-script.js"></script>
</body>
</html>
