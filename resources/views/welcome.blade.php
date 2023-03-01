<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>secret text</title>
  <link rel="icon" type="image/x-icon" href="anon.svg">
  @vite('resources/css/app.css')
</head>
<body>
  <h1 class="text-4xl font-bold text-center uppercase mt-10"> type your message </h1>
  <form method="post" action="{{ url('message') }}" class="md:text-3xl">
    @csrf
     <textarea name="msg" cols="30" rows="10" class="flex mx-auto mt-10 p-3 text-lg md:text-2xl"></textarea>
     <div class="flex">
        <div class="flex mx-auto mt-10 text-2xl">
        <p class="md:pr-8 pr-5">
            <input type="radio" name="anonym" class="h-5 w-5"> you can read it
        </p>
        <p>
            <input type="radio" name="anonym" class="h-5 w-5"> don't read it
        </p>
        </div>
     </div>
     <button type="submit" class="flex mx-auto border-1 rounded-3xl p-4 px-6 bg-purp text-white hover:bg-purple-300 hover:text-violet-700 mt-10 text-3xl">Send</button>
  </form>
  <div class="mt-10">
    @if ($message = Session::get('flash_message'))
        <img src="secret.gif" class="flex mx-auto">
    @endif 
  </div>
</body>
</html>