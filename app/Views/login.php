<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <div>
    <form method="POST" id="form_login" onsubmit="validation_login()">
      <div>
        <label for="email">Email</label>
        <input type="email" name="email" id="email" minlength="10" maxlength="15">
      </div>
      <div>
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
      </div>
      <div>
        <button type="submit">Login</button>
      </div>
    </form>
  </div>

  <script>
    function validation_login() {
      let pass = document.querySelector('#password').value.split('');
      let char = false;
      let integer = false;
      let lowercase = false;
      let uppercase = false;
      pass.forEach(character => {
        if (typeof character === 'string') char = true;
        if (typeof character === 'string') integer = true;
        if (character.toLowerCase() === character) lowercase = true;
        if (character.toUpperCase() === character) upercase = true;
      });

      if (char === true && integer === true) return true;
      else {
        alert('kombinasi karakter angka, symbol, huruf capital dan huruf kecil');
        return false;
      };
      return false;
    }
  </script>
</body>

</html>