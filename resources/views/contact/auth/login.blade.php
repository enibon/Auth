<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <form action="{{route('login.signup')}}" method="POST">
        @csrf
     <label>ელ-ფოსტა</label>
     <input type="text" placeholder="შეიყვანეთ ელ-ფოსტა" name="email">
     @if($errors->has('email'))
    <div class="error">{{ $errors->first('email') }}</div>
      @endif
     <br>
     <label>პაროლი</label>
     <input type="password" placeholder="შეიყვანეთ პაროლი" name="password">
     @if($errors->has('password'))
    <div class="error">{{ $errors->first('password') }}</div>
      @endif
     <br>
     <br>
     <button type="submit">შესვლა</button>

    </form>
</head>
<body>
    
</body>
</html>