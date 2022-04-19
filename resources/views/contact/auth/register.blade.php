<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>
    <h1>Registration</h1>

    @if(Session::has('succes'))
    <p class="alert alert-info">{{ Session::get('succes') }}</p>
    @endif

    @if(Session::has('fail'))
    <p class="alert alert-info">{{ Session::get('fail') }}</p>
    @endif
    <form action="{{route('register.store')}}" method="POST">
        @csrf
        <div class="registration-form">
     <label>ელ-ფოსტა</label>
     <input type="text" placeholder="შეიყვანეთ ელ-ფოსტა" name="email">
     <span class="text-danger" style="color:red">
        @error('email')
            {{ $message }}
         @enderror
     </span>
     <br>
     <label>ტელეფონი</label>
     <input type="text" placeholder="შეიყვანეთ ტელეფონი" name="phone">
     <span class="text-danger" style="color:red">
        @error('phone')
            {{ $message }}
         @enderror
     </span>
     <br>
     <label>პაროლი</label>
     <input type="password" placeholder="შეიყვანეთ პაროლი" name="password">
     <span class="text-danger" style="color:red">
        @error('password')
            {{ $message }}
         @enderror
     </span>
     <br>
     <label>გაიმეორეთ პაროლი</label>
     <input type="password" placeholder="გაიმეორეთ პაროლი" name="password_confirmation">
     <br>
     <br>
     <button type="submit">რეგისტრაცია</button>
     </div>
    </form>
</body>
</html>