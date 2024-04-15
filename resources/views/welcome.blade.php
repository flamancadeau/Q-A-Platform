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
    <button type="submit" class="home-btn" name="home">Home</button>
  </a>
  @if(session()->has('success'))
  <div class="alert alert-success ml-auto" style=" width: fit-content; background-color: #d4edda; ">
    <div style="position: absolute; right: 0; top: 0; bottom: 0; width: 120px; "></div>
    <ul class="list-unstyled" style="margin: 0; padding: 0;">
      <li>{{ \Session::get('success') }}</li>
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
        @php
        // Sort data by ID
        $sortedData = $data->sortBy('id');
        $previousId = null;
        @endphp

        @foreach($sortedData as $record)
        @if($record->id != $previousId)
        <form action="{{ route('delete.record', $record->id) }}" method="post">
        {{ method_field("DELETE") }}
        @csrf
        <div class="list-question">
          <div class="container">
            <h4> {{ $record->question }}</h4>
            <div class="container-button">
            <input type="hidden" name="record" value="{{ $record->id }}" id="record_id">
              <button class="button-delete" type="submit"   name="" >
                <img src="/image/delete.png" class="editor"  alt="">
              </button>

              <a href="/record/{{$record->id}}/edit">
           <img src="/image/editor.png" class="editor" alt="">
           </a>

              <button class="button-plus" type="submit"  value="" name="">
                <img src="/image/add.png" class="editor" alt="">
              </button>
            </div>
          </div>
          <div class="feedback">
            <h4> {{ $record->answer }}</h4>
          </div>
        </div>
        </form>
        @endif
        @php
        $previousId = $record->id;
        @endphp
        @endforeach

      </div>
    </div>

</body>

</html>
