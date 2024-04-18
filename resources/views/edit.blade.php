

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
  <script src="{{ asset('usefull/js.js') }}"></script>
</head>

<body>
  <a href="/index">
    <button type="submit" name="home-btn" class="home-btn" >Home</button>
  </a>
  @if(session()->has('success'))
  <div class="alert alert-success ml-auto" >
    <ul class="list-unstyled">
        <li>{{ session()->get('success') }}</li>
    </ul>
</div>
@endif
  @csrf
  <div class="container-content">
    <div class="sub-container">
      <img src="/image/icon-star.svg" alt="">
      <h1>FAQS</h1>
    </div>

    <div class="question-container">

    <form action="{{ route('edit.update', $record->id) }}" method="post">

      @csrf
        @method("PATCH")
        <div class="list-question">
          <div class="container">
            <h4>{{ $record->question }}</h4>

<div clas="custom-button">

              <input type="hidden" name="id" id="edit" value="{{$record->id}}" id="id" />
              <input type="text" name="question" id="edit" value="{{$record->question}}" />
              <input type="text" name="answer" id="edit" value="{{$record->answer}}" />
              <button type="submit" class="custom-button">save</button>
              <a href="{{ url('/') }}">
            <img src="/image/turn-back.png" class="login" alt="">
               </a>


              </div>


</form>
</body>
</html>
