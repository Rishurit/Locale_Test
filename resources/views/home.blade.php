<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">
        @php  $languages = ['en'=>"English", 'es'=>'Spain', 'hi'=>'HIndi', 'pun'=>'Punjabi']  @endphp 
        @foreach($languages as $language_code=>$language)
            @if(app()->getLocale() == $language_code)
                {{$language}}
            @endif
        @endforeach
      <span class="caret"></span></a>
        <ul class="dropdown-menu">
        @foreach($languages as $language_code=>$language)
          <li><a href="{{url($language_code)}}">{{$language}}</a></li>
        @endforeach
        </ul>
      </li>
      <li><a href="#">Page 2</a></li>
      <li><a href="#">Page 3</a></li>
    </ul>
  </div>
</nav>
  
<div class="container">
  <h3>@lang('auth.title')</h3>
  <p>{{__('auth.desc')}}</p>
</div>

</body>
</html>
