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
    <button type="submit" name="home">Home</button>
  </a>

  <form action="" method="post">
    @csrf
    <div class="container-content">
      <div class="sub-container">
        <img src="/image/icon-star.svg" alt="">
        <h1>FAQS</h1>
      </div>

      <div class="question-container">
        @php
        // Sort data by ID
        $sortedData = $data->sortBy('id');
        $previousId = null;
        @endphp

        @foreach($sortedData as $record)
        @if($record->id != $previousId)
        <div class="list-question">
          <div class="container">
            <h4> {{ $record->question }}</h4>
            <div class="container-button">
              <button class="button-delete" type="submit" name="">
                <img src="/image/delete.png" class="editor" alt="">
              </button>

              <button class="button-editor" type="submit" name="">
                <img src="/image/editor.png" class="editor" alt="">
              </button>

              <button class="button-plus" type="submit" name="">
                <img src="/image/add.png" class="editor" alt="">
              </button>
            </div>
          </div>
          <div class="feedback">
            <h4> {{ $record->answer }}</h4>
          </div>
        </div>
        @endif
        @php
        $previousId = $record->id;
        @endphp
        @endforeach

      </div>
    </div>
  </form>
</body>

</html>
