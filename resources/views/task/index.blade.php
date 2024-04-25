<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FAQS</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('usefull/style.css') }}">
  <link rel="stylesheet" href="usefull/index.css">
<title>Question and Answer Form</title>
  <script src="{{ asset('usefull/js.js') }}"></script>
</head>
<body>
<div class="container-content">
    <div class="sub-container">
      <img src="/image/icon-star.svg" alt="">
      <h1>FAQS</h1>
    </div>
    <h2>Question and Answer</h2>

    <form action="/index" method="post">
    @csrf
        <label for="question">Question:</label>
        <input type="text" id="question" name="question" required><br>
        <label for="answer">Answer:</label>
        <input type="text" id="answer" name="answer" required><br>
        <center>
        <button type="submit" name="save">SAVE</button>
        </center>
    </form>
</div>
</body>
</html>
