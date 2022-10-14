<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
   <header>
        <div class="header-section">
            <div class="logo">
                <h2>AUSTINE</h2>
            </div>
        </div>
    </header>
    <main>
        <section id="form">
           <div class="blue-bg">
                <h1>Please fill the form below to register</h1>
            </div>
          <form action="user_data.php" method="POST">
              <div>
                 <label for="name">NAME</label>
                 <input type="text" name="name" placeholder="Enter your name">
              </div>
              <div>
                 <label for="email">EMAIL</label>
                 <input type="email" name="email" placeholder="Enter your email address">
              </div>
              <div>
                 <label for="dob">DATE OF BIRTH</label>
                 <input type="date" name="dob">
              </div>
              <div>
                 <label for="gender">GENDER</label>
                 <select name="gender" id="gender">
                    <option value="male">MALE</option>
                    <option value="female">FEMALE</option>
                    <option value="others">OTHERS</option>
                 </select>
              </div>
              <div>
                 <label for="country">COUNTRY</label>
                 <input type="country" name="country" placeholder="Enter your country">
              </div>
        
              <button type="submit">Submit</button>
          </form>
        </section>
    </main>
    <footer>
        <p>Copyright &copy; 2022 Udhe Austine Ogaga.</p>
    </footer>
</body>
</html>