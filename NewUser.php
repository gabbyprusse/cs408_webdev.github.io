<html>
    <head>
        <meta charset="UTF-8">
        <title>New User</title>
        <link rel="icon" href="favicon.png">
        <link rel="stylesheet" href="NewUser.css">
    </head>

    <body>
    <! HEADER >
        <h1>Running from My Problems ...<img src="img.png" alt="cool pic"></h1>

        <ul class="MainPage">
            <li><a href="Profile.php">Log In  </a> </li>
            <div class="gear">
                <li>
                    <a href="https://www.roadrunnersports.com/?utm_source=google&utm_medium=cpc&utm_campaign=PMax%3A%20%28ROI%29%20Smart%20Shopping%202.0%20-%20Tier%201%20Shoes&utm_id=20990627255&utm_content=&utm_term=&gad_source=1&gclid=CjwKCAiAlcyuBhBnEiwAOGZ2S3QgAjEl_7vy-bZ1dn_P9NtmhkJ6fNrhglzZd3TSnSFCSzo0C1GvBoCFiYQAvD_BwE">Get Gear</a>
                </li>
            </div>
            <li>
                <a href="https://www.alltrails.com/">Find Trails </a>
            </li>
            <li>
                <a href="https://runningintheusa.com/classic/overview/">Upcoming Races </a>
            </li>
            <li  class="profileTitle"><a href="NewUser.php">Create Profile</a></li>
            <li><a href="AboutGabby.php">About Gabby</a></li>
        </ul>

    <! ACTUAL CONTENT >
    <form action="/NewUser.php">
        <label for="fname">First name:</label><br>
        <input type="text" id="fname" name="fname" value="Awesome"><br>

        <label for="lname">Last name:</label><br>
        <input type="text" id="lname" name="lname" value="Sauce"> <br><br>

        <label for="user">Username:</label><br>
        <input type="text" id="user" name="user" value="applesauce"><br>

        <label for="pswd">Password:</label><br>
        <input type="text" id="pswd" name="pswd" value="shhhhhh"><br><br>

        <label for="location">Location:</label><br>
        <input type="text" id="location" name="location" value="Boise, ID"><br>

        <label for="age">Age:</label><br>
        <input type="number" id="age" name="age" value="25"> years<br><br>




        <label for="distance">Goal Distance:</label><br>
        <input type="number" id="distance" name="distance" value="3"> miles<br>


        <p>Running Experience:</p>
        <input type="radio" id="mile<" name="level" value="mile<">
        <label for="mile<">I can't even run mile</label><br>

        <input type="radio" id="mile" name="level" value="mile">
        <label for="mile">I can run a mile, maybe 2</label><br>

        <input type="radio" id="mile>" name="level" value="mile>">
        <label for="mile>">I can run a 5k slowly</label> <br><br>

        <label for="music">Music Platform:</label>
        <select name="music" id="music">
            <option value="Apple Music">Apple Music</option>
            <option value="Spotify">Spotify</option>
            <option value="YouTube">YouTube</option>
        </select> <br> <br>

        <div>Music Preference:</div>
        <input type="checkbox" id="country" name="country" value="Country">
        <label for="country">Country</label><br>
        <input type="checkbox" id="pop" name="pop" value="Pop">
        <label for="pop">Pop</label><br>
        <input type="checkbox" id="classical" name="classical" value="classical">
        <label for="classical">Classical</label><br>
        <input type="checkbox" id="rap" name="rap" value="Rap">
        <label for="rap">Rap</label><br>
        <input type="checkbox" id="edm" name="edm" value="edm">
        <label for="edm">EDM</label><br>
        <input type="checkbox" id="latin" name="latin" value="latin">
        <label for="latin">Latin</label><br>
        <input type="checkbox" id="rock" name="rock" value="rock">
        <label for="rock">Rock</label><br> <br>


       <input type="submit" value="Create Profile">
    </form>


    <! FOOTER >
        <footer>
            <p>Author: Queen Gabby Prusse</p>
        </footer>

    </body>
</html>