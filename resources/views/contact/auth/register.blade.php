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

    <form action="{{route('register.store')}}" method="POST">
        @csrf
     <label>ელ-ფოსტა</label>
     <input type="text" placeholder="შეიყვანეთ ელ-ფოსტა" name="email">
     <br>
     <label>ტელეფონი</label>
     <input type="text" placeholder="შეიყვანეთ ტელეფონი" name="phone">
     <br>
     <label>პაროლი</label>
     <input type="password" placeholder="შეიყვანეთ პაროლი" name="password">
     <br>
     <label>გაიმეორეთ პაროლი</label>
     <input type="password" placeholder="გაიმეორეთ პაროლი" name="repeat_password">
     <br>
     <br>
     <button type="submit">რეგისტრაცია</button>

    </form>
</body>
</html>