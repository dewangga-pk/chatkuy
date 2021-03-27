<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chatkuy | Realtime Chat App</title>
    <link rel="stylesheet" href="asset/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
</head>
<body>
    <div class="wrapper">
        <section class="form signup">
            <header>Chatkuy | Realtime Chat App</header>
            <form action="#">
                <div class="error-txt">This is error message!</div>
                <div class="name-details">
                    <div class="field input">
                        <label for="firstname">First Name</label>
                        <input type="text" id="firstname" placeholder="First Name">
                    </div>
                    <div class="field input">
                        <label for="lastname">Last Name</label>
                        <input type="text" id="lastname" placeholder="Last Name">
                    </div>
                </div>
                <div class="field input">
                    <label for="email">Email Address</label>
                    <input type="text" id="email" placeholder="Enter your email address">
                </div>
                <div class="field input">
                    <label for="password">Password</label>
                    <input type="password" id="password" placeholder="Enter new password">
                    <i class="fas fa-eye"></i>
                </div>
                <div class="field image">
                    <label for="image">Select Image</label>
                    <input type="file" id="image">
                </div>
                <div class="field button">
                    <input type="submit" value="Continue to Chat">
                </div>
            </form>
            <div class="link">Already signed up? <a href="#">Login now</a></div>
        </section>
    </div>

    <script src="asset/javascript/pass-show-hide.js"></script>
</body>
</html>