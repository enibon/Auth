<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/d125b03f12.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body>
    <div class="wrapper">
        <header>Send us a message</header>
        <form action="{{ route('contact.store') }}" method="POST">
            @csrf
             @if(Session::has('success'))
             <p class="alert alert-success">{{ Session::get('success') }}</p>
              @endif
              @if(Session::has('fail'))
             <p class="alert alert-danger">{{ Session::get('fail') }}</p>
              @endif
            <div class="dbl-field">
                <div class="field">
                    <input type="text" name="name" placeholder="Enter your name">
                    <i class="fas fa-user "></i>
                    @error('name')
              <div class="alert alert-danger" style="color:red">{{ $message }}</div>
                    @enderror
                </div>
                <div class="field">
                    <input type="text" name="email" placeholder="Enter your email">
                    <i class="fas fa-envelope"></i>
                    @error('email')
              <div class="alert alert-danger" style="color:red">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="dbl-field">
                <div class="field">
                    <input type="text" name="phone" placeholder="Enter your phone">
                    <i class="fas fa-phone-alt"></i>
                    @error('phone')
              <div class="alert alert-danger" style="color:red">{{ $message }}</div>
                    @enderror
                </div>
                <div class="field">
                    <input type="text" name="website" placeholder="Enter your website">
                    <i class="fas fa-globe"></i>
                    @error('website')
              <div class="alert alert-danger" style="color:red">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="message">
                <textarea placeholder="Write your message" name="message"></textarea>
                @error('message')
              <div class="alert alert-danger" style="color:red">{{ $message }}</div>
                    @enderror
            </div>
            <div class="button-area">
                <button type="submit" value="submit">Send Message</button>
        </form>
        </div>
</body>
</html>